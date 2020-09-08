<?php
get_header();
?>
<div class='wrapper'>
  <?php $args = array( 'post_type' => 'Contacto');?>   
  <?php $loop = new WP_Query( $args ); ?>
  <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
    <section class='contact'>
      <div class='container'>
        <div class='row'>
          <div class='col-md-6 col-sm-12'>
            
              <center class='mb-5'>
                <img  src="<?php echo get_template_directory_uri();?>/assets/img/contact/logo_negro.png" class='center-block logo-contact'>
              </center>
              <div class='text-justify' style="text-indent: 25px;">
                <?php the_content(); ?>
                <img src="<?php echo get_the_post_thumbnail_url(); ?>" class='w-100 center-block'>
              </div>
            

          </div>
          <div class='col-md-6 col-sm-12'>
            <div class='formBox-contact'>
              <div class='row'>
                <div class='col-sm-12'>
                  <h4><?php the_title(); ?></h4>
                </div>
              </div>
              <ul class='contact-social'>
                <li>
					<?php if ( wp_is_mobile() ) : ?>
						<a href="http://api.whatsapp.com/send?phone=<?php the_field('telefono') ?>">
							<i class="fa fa-whatsapp" aria-hidden="true"></i>
							<span>
							<?php the_field('telefono') ?>
							</span>

						  </a>
					<?php else : ?>
						<a href="http://web.whatsapp.com/send?phone=<?php the_field('telefono') ?>">
							<i class="fa fa-whatsapp" aria-hidden="true"></i>
							<span>
							<?php the_field('telefono') ?>
							</span>

						  </a>
					<?php endif; ?>
                  
                </li>
                <li>
                  <a href="tel:<?php the_field('telefono_fijo') ?>">
                    <i class='fa fa-phone'></i>
                    <span>
                    <?php the_field('telefono_fijo') ?>
                    </span>
                  </a>
                </li>
                <li>
                  <a href="mailto:<?php the_field('correo_electronico') ?>">
                    <i class='fa fa-envelope'></i>
                    <span>
                    <?php the_field('correo_electronico') ?>
                    </span>
                  </a>
                </li>
                <li>
                  <a href="<?php the_field('cuenta_de_instragram') ?>">
                    <i class='fa fa-instagram'></i>
                    <span>
                    <?php the_field('cuenta_de_instragram') ?>
                    </span>
                  </a>
                </li>
                <li>
                  <a href="<?php the_field('cuenta_de_facebook') ?>">
                    <i class="fa fa-facebook-official" aria-hidden="true"></i>
                    <span>
                    <?php the_field('cuenta_de_facebook') ?>
                    </span>
                  </a>
                </li>
                <li>
                  <i class='fa fa-map-marker'></i>
                  <span class='address'>
                  <?php the_field('direccion') ?>
                    
                  </span>
                </li>
                <li>
                  <ul class='schedule-box'>
                    <li>
                      <i class='fa fa-clock-o'></i>
                      <span class='schedule'>
                      <?php the_field('dias_de_semana') ?>
                      </span>
                      <br>
                      <span class='time'>
                      <?php the_field('hora_de_semana') ?>
                      </span>
                    </li>
                    <li>
                      <span class='schedule'>
                      <?php the_field('dias_feriados') ?>
                      </span>
                      <br>
                      <span class='time'>
                       <?php the_field('hora_feriados') ?>
                      </span>
                    </li>
                  </ul>
                </li>
              </ul>
              <div class='row'>
                <div class='col-sm-12'>
                  <h3>
                    Envíenos un mensaje
                    <br>
                    <small>Si desea enviarnos un mensaje, por favor llene el siguiente formulario y le responderemos lo antes posible</small>
                  </h3>
                </div>
              </div>

<div id="contactp_form">
  <?php echo FrmFormsController::get_form_shortcode( array( 'id' => 1, 'title' => false, 'description' => false ) ); ?>
</div>
             
      </div>
    </section>
  <?php endwhile; ?>
</div>



<script>
  $('#message_form').validate({
    event: 'blur',
    errorClass: 'error-class',
    validClass: 'valid-class',
    rules: {
     'message[name]': { required: true},
     'message[from_email]': { required: true, email: true},
     'message[subject]': {required: true}
   },
   messages: {
     'message[name]': 'Indica tu nombre',
     'message[from_email]': 'Indica tu correo',
     'message[subject]': 'Indica el asunto'
   },
   debug: true,errorElement: 'label',
   submitHandler: function(form){
    form.submit();
  }
});
</script>

<?php
get_footer();
?>