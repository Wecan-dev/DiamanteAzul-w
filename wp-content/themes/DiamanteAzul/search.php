<?php
get_header();
?>
<div class='wrapper'>
    <div class="container ">
        <div class="category-box">
        <div class="category-items">
            <div class="row">

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
            </div>
        </div>
        </div>
    </div>
    </div>
</div>



<?php
get_footer();
?>