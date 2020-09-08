<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

get_header( 'shop' );
// get the query object
$cat = get_queried_object();

// get the thumbnail id using the queried category term_id
	$category_id =  get_term_meta( $cat->term_id, 'thumbnail_id', true );
// get the title id using the queried category term_id
	$title =  get_term_meta( $cat->term_id, 'title', true );
// get the image URL
  $image = wp_get_attachment_url( $category_id );
/**
 * Hook: woocommerce_before_main_content.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 * @hooked WC_Structured_Data::generate_website_data() - 30
 */
do_action( 'woocommerce_before_main_content' );



  // Ahora buscamos las categorías inferiores
  $id_cate = $cat->term_id;
	$argumentos = array(
    'hierarchical' => 1,
    'show_option_none' => '',
    'hide_empty' => 1,
    'parent' => $cat->term_id,
    'taxonomy' => 'product_cat',
		);

	// Creamos la matriz $categorias_hijas

  $categorias_hijas = get_categories( $argumentos );
  
 
?>


	

<header class="woocommerce-products-header">
	<?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
		<h1 class="woocommerce-products-header__title page-title"><?php woocommerce_page_title();  ?></h1>
	<?php endif; ?>

  
	<?php
	/**
	 * Hook: woocommerce_archive_description.
	 *
	 * @hooked woocommerce_taxonomy_archive_description - 10
	 * @hooked woocommerce_product_archive_description - 10
	 */
	do_action( 'woocommerce_archive_description' );
	?>
</header>



<div class='wrapper'>
  <div class="container category-container">
    <div class="category-header">
      <h1><?php echo single_cat_title(); ?></h1>
      <form action="http://localhost/DiamanteAzul-w">
        <div class="input-group">
          <input class="form-control" name="s" placeholder="Buscar..." type="text">
          <div class="input-group-append">
            <button class="btn btn-primary" type="button">
              <i class="icofont-search"></i>
            </button>
          </div>
        </div>
     
      </form>
    </div>
  </div>



    <?php if($image): ?>
      <div class="banner-category-box">
        <img class="banner-category" src="<?php echo $image; ?>">
      </div>
    <?php endif; ?>


  <div class="container ">
    <div class="category-box">
      <div class="category-items">
        <div class="row">
        <?php
    $parentid = get_queried_object_id();
    $args = array(
        'parent' => $parentid
    );
    $categories = get_terms(
        'product_cat', $args
    );
  

    if ( $categories ) :
        foreach ( $categories as $category ) :
          ?>

            <div class="col-lg-4 col-sm-6 col-xs-12">
              <div class="card-catalogue">
                <div class="card-catalogue-img">
                  <a href="<?php echo esc_url( get_term_link( $category ) ); ?>"><img src="<?php the_field('imagen_de_la_card', $category);?>">
                  </a>
                </div>
                <div class="card-catalogue-content">
					<a  href="<?php echo esc_url( get_term_link( $category ) ); ?>">
                  		<h2 class="card-catalogue-title"><?php  echo esc_html($category->name); ?></h2>
					</a>
                </div>
              </div>
            </div>
            <?php

         
            
        endforeach;
         else:?>



        <?php while ( have_posts() ) : ?>
        <?php the_post();  global $product;?>

        <div class="col-lg-4 col-sm-6 col-xs-12">
            <div class="card-catalogue">
              <div class="card-catalogue-img">
                <a href="<?php the_permalink(); ?>"><img src="<?php echo get_the_post_thumbnail_url(); ?>">
                </a>
              </div>
              <div class="card-catalogue-content">
				<a href="<?php the_permalink(); ?>">
                	<h2 class="card-catalogue-title"><?php the_title(); ?></h2>
              	</a>
              </div>
            </div>
          </div>
          <?php endwhile; ?>
        <div class="col-lg-12 col-sm-12 col-xs-12 page-paginador"> <?php echo paginate_links();?></div>
   <?php endif;
?>
    

			<style> .page-paginador{
				display: flex;
   justify-content: center;
				}
				
				.page-paginador .current{
				 background-color: #007bff;
					color: white;
				}
				
				.page-numbers{
					position: relative;
    display: block;
    padding: .5rem .75rem;
    margin-left: -1px;
    line-height: 1.25;
    color: #007bff;
    background-color: #fff;
    border: 1px solid #dee2e6;
					
				}
			
			</style>

        </div>
      </div>
    </div>
  </div>
</div>



<?php
get_footer();
?>