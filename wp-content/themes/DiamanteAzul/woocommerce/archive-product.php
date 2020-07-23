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
      <form>
        <div class="input-group">
          <input class="form-control" placeholder="Buscar..." type="text">
          <div class="input-group-append">
            <button class="btn btn-primary" type="button">
              <i class="icofont-search"></i>
            </button>
          </div>
        </div>
        <small>Ejemplo: graduación, boda, dije, etc.</small>
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
  

        

       <?php if ( !empty( $categorias_hijas ) ): ?>

       <?php $wcatTerms = get_terms('product_cat', array('hide_empty' => 0, 'parent' =>0)); 
      foreach($wcatTerms as $wcatTerm) : 
       ?>
         <?php
         $wsubargs = array(
           'hierarchical' => 1,
           'show_option_none' => '',
           'hide_empty' => 1,
           'parent' => $wcatTerm->term_id,
           'taxonomy' => 'product_cat',
         );
         $wsubcats = get_categories($wsubargs);
         foreach ($wsubcats as $wsc):

           $thumbnail_id = get_woocommerce_term_meta($wsc->term_id, 'thumbnail_id', true);

             $images = wp_get_attachment_image_src($thumbnail_id, 'large');
           ?>

           <div class="col-lg-4 col-sm-6 col-xs-12">
             <div class="card-catalogue">
               <div class="card-catalogue-img">
                 <a href="<?php echo $url_category = get_term_link($wsc) ?>"><img src="<?php the_field('imagen_de_la_card', $wsc);?>">
                 </a>
               </div>
               <div class="card-catalogue-content">
                 <h2 class="card-catalogue-title"><?php echo $wsc->name; ?></h2>
               </div>
             </div>
           </div>

                     <?php  endforeach;  ?> 
         
                     <?php  endforeach;  ?>  
         <?php else:?>



        <?php while ( have_posts() ) : ?>
        <?php the_post();  global $product;?>

        <div class="col-lg-4 col-sm-6 col-xs-12">
            <div class="card-catalogue">
              <div class="card-catalogue-img">
                <a href="<?php the_permalink(); ?>"><img src="<?php echo get_the_post_thumbnail_url(); ?>">
                </a>
              </div>
              <div class="card-catalogue-content">
                <h2 class="card-catalogue-title"><?php the_title(); ?></h2>
                <a class="btn btn-custom" href=" <?php echo 'https://web.whatsapp.com/send?phone=5804246779776&text=Hola,%20Estoy%20interesado%20en%20este%20producto%20'.str_replace( ' ', '%20', get_the_title()) . ' ' . urlencode(get_permalink());?>">Comprar por Whatsapp
                </a>
              </div>
            </div>
          </div>
          <?php endwhile; ?>
         <?php endif; ?>
                
    

        </div>
      </div>
    </div>
  </div>
</div>



<?php get_footer();?>


