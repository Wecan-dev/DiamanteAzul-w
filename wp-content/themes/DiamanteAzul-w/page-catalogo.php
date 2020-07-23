<?php
get_header();
?>
<div class='wrapper'>
  <div class="container catalogue-container">
    <!-- <form action="<?php bloginfo('url'); ?>" method="get">
      <div class="input-group">
        <input class="form-control" name="s" placeholder="Buscar..." type="text">
        <div class="input-group-append">
          <button class="btn btn-primary" type="submit">
            <i class="icofont-search"></i>
          </button>
        </div>
      </div>

      <small>Ejemplo: graduación, boda, dije, etc.</small>
    </form> -->


    <div class="catalogue-items">
      <div class='row'>
      <?php $wcatTerms = get_terms('product_cat', array('hide_empty' => 0, 'parent' =>0)); 
        $count_cat = 1;
      foreach($wcatTerms as $wcatTerm) : 
      
          $thumbnail_id = get_woocommerce_term_meta($wcatTerm->term_id, 'thumbnail_id', true);

          $images = wp_get_attachment_image_src($thumbnail_id, 'large');

          ?>
          

        <a href="<?php echo $url_category = get_term_link( $wcatTerm ) ?>" class='col-lg-4'>
          <div class='card-catalogue'>
            <div class='card-catalogue-img'>
              <img src="<?php the_field('imagen_de_la_card', $wcatTerm);?>">
            </div>
            <div class='card-catalogue-content'>
              <h2 class="card-catalogue-title"><?php echo $wcatTerm->name; ?></h2>
            </div>
          </div>
        </a>
        <?php $count_cat++; endforeach;  ?>
      </div>
    </div>
  </div>
</div>
<?php
get_footer();
?>