<?php
get_header();
?>

<div class='wrapper'>


  <section class="banner-home">
    <ul class="single-item">
    <?php $args = array( 'post_type' => 'Banner');?>   
      <?php $loop = new WP_Query( $args ); ?>
      <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
        <li>
          <a href="">

            <img src="<?php echo get_the_post_thumbnail_url(); ?>">
          </a>
        </li>
      <?php endwhile; ?>
    </ul>
  </section>



  <div class="visible-xs">
   <form>
    <div class="input-group">
      <input class="form-control" placeholder="Buscar..." type="text">
      <div class="input-group-append">
        <button class="btn btn-primary" type="button">
          <i class="icofont-search"></i>
        </button>
      </div>
    </div>

  </form>
</div>
</div>
<div class="container category-container">
  <div class="category-box">
  <h1>Nuestas categorias</h1>
    <div class="category-items">
      <div class="row">

      <?php $wcatTerms = get_terms('product_cat', array('hide_empty' => 0, 'parent' =>0)); 
        $count_cat = 1;
      foreach($wcatTerms as $wcatTerm) : 
      
          $thumbnail_id = get_woocommerce_term_meta($wcatTerm->term_id, 'thumbnail_id', true);

          $images = wp_get_attachment_image_src($thumbnail_id, 'large');

          ?>
          <?php if ($count_cat <= 6): ?>
        <div class="col-lg-4 col-sm-6 col-xs-12">
          <div class="card-catalogue">
            <div class="card-catalogue-img">
              <a href="<?php echo $url_category = get_term_link( $wcatTerm ) ?>"><img src="<?php the_field('imagen_de_la_card', $wcatTerm);?>">
              </a>
            </div>
            <div class="card-catalogue-content">
              <h2 class="card-catalogue-title"><?php echo $wcatTerm->name; ?></h2>
            </div>
          </div>
        </div>

        <?php endif; ?>
<?php $count_cat++; endforeach;  ?>

        <!-- <div class="col-lg-4 col-sm-6 col-xs-12">
          <div class="card-catalogue">
            <div class="card-catalogue-img">
              <a href="productos.html"><img src="<?php echo get_template_directory_uri();?>/assets/img/Products/grado/FONDO-CATEGORIA-GRIEGA.jpg">
              </a>
            </div>
            <div class="card-catalogue-content">
              <h2 class="card-catalogue-title">griega</h2>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 col-xs-12">
          <div class="card-catalogue">
            <div class="card-catalogue-img">
              <a href="productos.html"><img src="<?php echo get_template_directory_uri();?>/assets/img/Products/grado/FONDO-CATEGORIA-JOYA.jpg">
              </a>
            </div>
            <div class="card-catalogue-content">
              <h2 class="card-catalogue-title">JOYA</h2>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 col-xs-12">
          <div class="card-catalogue">
            <div class="card-catalogue-img">
              <a href="productos.html"><img src="<?php echo get_template_directory_uri();?>/assets/img/Products/grado/FONDO-CATEGORIA-GRIEGA.jpg">
              </a>
            </div>
            <div class="card-catalogue-content">
              <h2 class="card-catalogue-title">griega</h2>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 col-xs-12">
          <div class="card-catalogue">
            <div class="card-catalogue-img">
              <a href="productos.html"><img src="<?php echo get_template_directory_uri();?>/assets/img/Products/grado/FONDO-CATEGORIA-JOYA.jpg">
              </a>
            </div>
            <div class="card-catalogue-content">
              <h2 class="card-catalogue-title">JOYA</h2>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 col-xs-12">
          <div class="card-catalogue">
            <div class="card-catalogue-img">
              <a href="productos.html"><img src="<?php echo get_template_directory_uri();?>/assets/img/Products/grado/FONDO-CATEGORIA-JOYA.jpg">
              </a>
            </div>
            <div class="card-catalogue-content">
              <h2 class="card-catalogue-title">JOYA</h2>
            </div>
          </div>
        </div> -->

      </div>
    </div>
  </div>
 <!--  <center>
    <a href="catalogo.html" class='btn btn-custom'>Ir al categorias</a>
  </center> -->
</div>


<?php
get_footer();
?>
