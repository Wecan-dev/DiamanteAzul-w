<?php
/**
 * Products per Page for WooCommerce - Core Class
 *
 * @version 1.2.0
 * @since   1.0.0
 * @author  Algoritmika Ltd.
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

if ( ! class_exists( 'Alg_WC_Products_Per_Page_Core' ) ) :

class Alg_WC_Products_Per_Page_Core {

	/**
	 * Constructor.
	 *
	 * @version 1.2.0
	 * @since   1.0.0
	 * @todo    [dev] (maybe) position priority for every hook
	 * @todo    [dev] (maybe) post or get
	 * @todo    [dev] (maybe) cookie or session
	 * @todo    [dev] (maybe) translation shortcode
	 * @todo    [dev] (maybe) form shortcode
	 * @todo    [dev] (maybe) option to redirect to last page num (i.e. instead of `get_pagenum_link()`)
	 */
	function __construct() {
		if ( 'yes' === get_option( 'alg_wc_products_per_page_enabled', 'yes' ) ) {
			// Cookie
			$this->do_use_cookie = ( 'yes' === get_option( 'alg_wc_products_per_page_cookie_enabled', 'yes' ) );
			// Set products per page
			add_filter( 'loop_shop_per_page', array( $this, 'set_products_per_page' ), PHP_INT_MAX );
			// Frontend
			$position_hooks = get_option( 'alg_products_per_page_position', array( 'woocommerce_before_shop_loop' ) );
			foreach ( $position_hooks as $position_hook ) {
				add_action( $position_hook, array( $this, 'add_products_per_page_form' ), get_option( 'alg_products_per_page_position_priority', 40 ) );
			}
		}
	}

	/**
	 * add_products_per_page_form.
	 *
	 * @version 1.2.0
	 * @since   1.0.0
	 */
	function add_products_per_page_form() {
		global $wp_query;
		$products_per_page = $this->get_products_per_page();
		// Options
		$options_html = '';
		$options      = array_map( 'trim', explode( PHP_EOL,
			apply_filters( 'alg_wc_products_per_page_select_options', '10|10' . PHP_EOL . '25|25' . PHP_EOL . '50|50' . PHP_EOL . '100|100' . PHP_EOL . 'All|-1' ) ) );
		foreach ( $options as $option ) {
			$_option = array_map( 'trim', explode( '|', $option ) );
			if ( 2 === count( $_option ) ) {
				$options_html .= '<option value="' . $_option[1] . '"' . selected( $products_per_page, $_option[1], false ) . '>' . $_option[0] . '</option>';
			}
		}
		// Replacements
		$paged        = ( 0 == ( $paged = get_query_var( 'paged' ) ) ? 1 : $paged );
		$select_class = get_option( 'alg_wc_products_per_page_select_class', 'sortby rounded_corners_class' );
		$select_style = get_option( 'alg_wc_products_per_page_select_style', '' );
		$replacements = array(
			'%from%'        => ( $paged - 1 ) * $products_per_page + 1,
			'%to%'          => ( $paged - 1 ) * $products_per_page + $wp_query->post_count,
			'%total%'       => $wp_query->found_posts,
			'%select_form%' => '<select name="alg_wc_products_per_page" id="alg_wc_products_per_page" class="' .
				$select_class . '" style="' . $select_style . '" onchange="this.form.submit()">' . $options_html . '</select>',
		);
		// Final HTML
		$html  = '';
		$html .= get_option( 'alg_wc_products_per_page_before_html', '<div class="clearfix"></div><div>' );
		$html .= '<form action="' . get_pagenum_link() . '" method="POST">';
		$html .= str_replace( array_keys( $replacements ), $replacements, get_option( 'alg_products_per_page_text',
			__( 'Products <strong>%from% - %to%</strong> from <strong>%total%</strong>. Products on page %select_form%', 'products-per-page-for-woocommerce' ) ) );
		$html .= '</form>';
		$html .= get_option( 'alg_wc_products_per_page_after_html', '</div>' );
		echo $html;
	}

	/**
	 * maybe_set_cookie.
	 *
	 * @version 1.2.0
	 * @since   1.2.0
	 */
	function maybe_set_cookie() {
		if ( $this->do_use_cookie && isset( $_POST['alg_wc_products_per_page'] ) ) {
			setcookie( 'alg_wc_products_per_page',
				intval( $_POST['alg_wc_products_per_page'] ), ( time() + get_option( 'alg_wc_products_per_page_cookie_sec', 1209600 ) ), '/', $_SERVER['SERVER_NAME'], false );
		}
	}

	/**
	 * set_products_per_page.
	 *
	 * @version 1.2.0
	 * @since   1.0.0
	 */
	function set_products_per_page( $products_per_page ) {
		$this->maybe_set_cookie();
		return $this->get_products_per_page();
	}

	/**
	 * get_products_per_page.
	 *
	 * @version 1.2.0
	 * @since   1.2.0
	 */
	function get_products_per_page() {
		if ( isset( $_POST['alg_wc_products_per_page'] ) ) {
			return intval( $_POST['alg_wc_products_per_page'] );
		} elseif ( isset( $_COOKIE['alg_wc_products_per_page'] ) ) {
			return intval( $_COOKIE['alg_wc_products_per_page'] );
		} else { // default
			return get_option( 'alg_products_per_page_default', 10 );
		}
	}

}

endif;

return new Alg_WC_Products_Per_Page_Core();
