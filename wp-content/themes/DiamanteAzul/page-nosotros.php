

<?php
get_header();
?>

<div class='wrapper'>
  <?php $args = array( 'post_type' => 'Nosotros');?>   
  <?php $loop = new WP_Query( $args ); ?>
  <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

  <section class='about'>
    <div class='container'>
      <div class='row'>
        <div class='col-md-5 col-sm-12 diseno-img'>
          <img src="<?php echo get_the_post_thumbnail_url(); ?>" class='w-100'>
          <a href="productos.html" class='btn btn-custom'>Conoce mis diseños</a>
        </div>
        <div class='col-md-7 col-sm-12'>
          <center class='logo-diseno-joyas'>
            <img src="<?php the_field('logo')?>">
          </center>
          <div class='text-justify' style="text-indent: 25px;padding:20px;">
            <?php the_content()?>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php endwhile; ?>

</div>
<?php
get_footer();
?>
