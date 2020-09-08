<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

foreach((get_the_terms($post_id, 'product_cat' )) as $category) {                
   $cat = array_shift( wp_get_post_terms( get_the_ID(), 'product_cat' ))->name; 
   $cate =$category->slug;              
}

//////// PROGRAMAS POWERBUILDING


global $product;

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked woocommerce_output_all_notices - 10
 */
do_action( 'woocommerce_before_single_product' );

if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}
?>
<div id="product-<?php the_ID(); ?>" <?php wc_product_class( '', $product ); ?>>
<div class='wrapper'>
	<div class="container">
		<div class="main-product__grid">
			<div class="main-product__item">
			<?php
					/**
					 * Hook: woocommerce_before_single_product_summary.
					 *
					 * @hooked woocommerce_show_product_sale_flash - 10
					 * @hooked woocommerce_show_product_images - 20
					 */
					do_action( 'woocommerce_before_single_product_summary' );
					?>
			</div>
			<div class="main-product__item">
			<div class="product-description">
			
				<h3><?php the_field('ref_producto'); ?></h3>
				<h1><?php the_title(); ?></h1>
				
				<?php if ($cat == 'ANILLOS DE GRADO' or $cat == 'GRIEGA' or $cat == 'CLÁSICOS' or $cat == 'JOYA'  or $cat == 'ANILLOS DE COMPROMISO' or $cat == 'ANILLOS DE MATRIMONIO' ): ?>
				<div class="row">
					<div class="col-sm-12">
					<h4>Materiales</h4>
					</div>
				</div>


		
	 
				
					<form class="form-single" action="">
						<div class="inputBox">
							<label  class="checkbox-container">
							Oro 18k
							<input name="radio[]" type="radio" value="Oro 18k">
							<span class="checkmark"></span>
							</label>
							<label class="checkbox-container">
							Oro 10k
							<input name="radio[]" type="radio" value="Oro 10k">
							<span class="checkmark"></span>
							</label>
							<label class="checkbox-container">
							Plata Ley 950
							<input name="radio[]"  id="three"  type="radio" value="Plata Ley 950">
							<span class="checkmark"></span>
							</label>					 
						</div>

						<div class="inputBox">
							<label class="checkbox-container">
							Plata con baño de oro 24k
							<input name="radio[]"   type="radio" value="Plata con baño de oro 24k">
							<span class="checkmark"></span>
							</label>
							<label class="checkbox-container">
							Plata con baño de rodio
							<input name="radio[]"  type="radio" value="Plata con baño de rodio">
							<span class="checkmark"></span>
							</label>
						</div>

						

					</form>
<?php endif;?>


					
				<!-- <div class="row">
					<div class="col-sm-12">
						<div >Ids seleccionados en matriz <span id="arr"></span></div>
						<div >Ids seleccionados <span id="str"></span></div>

						
					</div>
				</div> -->

				<div class="row">
					<div class="col-sm-12">
						
						<h4>Características</h4>
						<?php the_content(); ?>
						
						<!--<h4>DETAL: < ?php echo $product->get_price_html(); ?></h4>-->
						<br>

					</div>
				</div>

				<div class="row">
					<div class="col-lg-12 col-xs-12">
						<div id="hidden" class="form-footer">
							<a class="btn btn-custom" href=" <?php echo 'https://web.whatsapp.com/send?phone=5804246779776&text=Hola,%20Estoy%20interesado%20en%20este%20producto%20'.str_replace( ' ', '%20', $var_PHP) . ' ' . urlencode(get_permalink());?>" class="btn btn-custom" type="submit">
								Comprar por Whatsapp
							</a>							
						</div>
						<div id="resultado" class="form-footer"> </div>


						
						
					</div>
				</div>
				
				 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script> 
		
			</div>
			</div>
		</div>

	</div>
</div>
	
<div class="main-wooco__details">

	<div class="summary entry-summary">
		<?php
		/**
		 * Hook: woocommerce_single_product_summary.
		 *
		 * @hooked woocommerce_template_single_title - 5
		 * @hooked woocommerce_template_single_rating - 10
		 * @hooked woocommerce_template_single_price - 10
		 * @hooked woocommerce_template_single_excerpt - 20
		 * @hooked woocommerce_template_single_add_to_cart - 30
		 * @hooked woocommerce_template_single_meta - 40
		 * @hooked woocommerce_template_single_sharing - 50
		 * @hooked WC_Structured_Data::generate_product_data() - 60
		 */
		do_action( 'woocommerce_single_product_summary' );
		?>
	<?php
	/**
	 * Hook: woocommerce_after_single_product_summary.
	 *
	 * @hooked woocommerce_output_product_data_tabs - 10
	 * @hooked woocommerce_upsell_display - 15
	 * @hooked woocommerce_output_related_products - 20
	 */
	do_action( 'woocommerce_after_single_product_summary' );
	?>

<?php do_action( 'woocommerce_after_single_product' ); ?>
	</div>
</div>

</div>





<style>
	#sidebar{
		display: none !important;
	}
.main-product__grid{
  display: grid;
  grid-template-columns: 1fr 1fr;
}
.woocommerce-product-gallery__image{
	margin-top: 2rem;
}
.variable-item:not(.radio-variable-item) {
    width: 100%;
    height: 100%;
}
.form-single{
	display: flex;
}
</style>

<script>
$(document).ready(function() {

	
	$('[name="radio[]"]').click(function() {
		
	var arr = $('[name="radio[]"]:checked').map(function(){
		return this.value;
	}).get();
	

	//var str = arr.join(',');
		var str = arr.join(',');
	
	$('#arr').text(JSON.stringify(arr));
	
	
	var variableJS = $('#str').text(str);
		
    $("#hidden").css("display", "none");
    var a = '<a  class="btn btn-custom" href="https://web.whatsapp.com/send?phone=5804246779776&text=Hola,%20Estoy%20interesado%20en%20este%20producto%20';
    var b = str.replace(' ', '%20'); 
    var c = ' <?php echo urlencode(get_permalink());?>" class="btn btn-custom" type="submit"> Comprar por Whatsapp </a>';
    document.getElementById("resultado").innerHTML = a+b+c;		

	});
});

</script>



