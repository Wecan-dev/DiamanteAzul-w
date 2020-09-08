<?php
/**
 * Products per Page for WooCommerce - General Section Settings
 *
 * @version 1.2.0
 * @since   1.0.0
 * @author  Algoritmika Ltd.
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

if ( ! class_exists( 'Alg_WC_Products_Per_Page_Settings_General' ) ) :

class Alg_WC_Products_Per_Page_Settings_General extends Alg_WC_Products_Per_Page_Settings_Section {

	/**
	 * Constructor.
	 *
	 * @version 1.0.0
	 * @since   1.0.0
	 */
	function __construct() {
		$this->id   = '';
		$this->desc = __( 'General', 'products-per-page-for-woocommerce' );
		parent::__construct();
	}

	/**
	 * get_settings.
	 *
	 * @version 1.2.0
	 * @since   1.0.0
	 */
	function get_settings() {
		$settings = array(
			array(
				'title'    => __( 'Products per Page Options', 'products-per-page-for-woocommerce' ),
				'type'     => 'title',
				'id'       => 'alg_wc_products_per_page_plugin_options',
			),
			array(
				'title'    => __( 'Products per Page', 'products-per-page-for-woocommerce' ),
				'desc'     => '<strong>' . __( 'Enable plugin', 'products-per-page-for-woocommerce' ) . '</strong>',
				'id'       => 'alg_wc_products_per_page_enabled',
				'default'  => 'yes',
				'type'     => 'checkbox',
			),
			array(
				'type'     => 'sectionend',
				'id'       => 'alg_wc_products_per_page_plugin_options',
			),
			array(
				'title'    => __( 'Select Options', 'products-per-page-for-woocommerce' ),
				'type'     => 'title',
				'id'       => 'alg_wc_products_per_page_select_options',
			),
			array(
				'title'    => __( 'Select options', 'products-per-page-for-woocommerce' ),
				'desc'     => sprintf( __( 'Enter one option per line in %s format. Use %s for all products.', 'products-per-page-for-woocommerce' ),
						'<code>' . __( 'Title', 'products-per-page-for-woocommerce' ) . '|' . __( 'Number', 'products-per-page-for-woocommerce' ) . '</code>', '<code>-1</code>' ) .
					apply_filters( 'alg_wc_products_per_page_settings', '<br>' .
						'You will need <a href="https://wpfactory.com/item/products-per-page-woocommerce/" target="_blank">Products per Page for WooCommerce Pro plugin</a> to change this option.' ),
				'id'       => 'alg_products_per_page_select_options',
				'default'  => '10|10' . PHP_EOL . '25|25' . PHP_EOL . '50|50' . PHP_EOL . '100|100' . PHP_EOL . 'All|-1',
				'type'     => 'textarea',
				'css'      => 'height:200px;',
				'custom_attributes' => apply_filters( 'alg_wc_products_per_page_settings', array ( 'readonly' => 'readonly' ) ),
			),
			array(
				'title'    => __( 'Default option', 'products-per-page-for-woocommerce' ),
				'id'       => 'alg_products_per_page_default',
				'default'  => 10,
				'type'     => 'number',
				'custom_attributes' => array( 'min' => -1 ),
			),
			array(
				'type'     => 'sectionend',
				'id'       => 'alg_wc_products_per_page_select_options',
			),
			array(
				'title'    => __( 'Position Options', 'products-per-page-for-woocommerce' ),
				'type'     => 'title',
				'id'       => 'alg_wc_products_per_page_position_options',
			),
			array(
				'title'    => __( 'Position', 'products-per-page-for-woocommerce' ),
				'id'       => 'alg_products_per_page_position',
				'default'  => array( 'woocommerce_before_shop_loop' ),
				'type'     => 'multiselect',
				'class'    => 'chosen_select',
				'options'  => array(
					'woocommerce_before_shop_loop' => __( 'Before shop loop', 'products-per-page-for-woocommerce' ),
					'woocommerce_after_shop_loop'  => __( 'After shop loop', 'products-per-page-for-woocommerce' ),
				),
			),
			array(
				'title'    => __( 'Position priority', 'products-per-page-for-woocommerce' ),
				'desc_tip' => __( 'Used to fine-tune the Position.', 'products-per-page-for-woocommerce' ),
				'id'       => 'alg_products_per_page_position_priority',
				'default'  => 40,
				'type'     => 'number',
				'custom_attributes' => array( 'min' => 0 ),
			),
			array(
				'type'     => 'sectionend',
				'id'       => 'alg_wc_products_per_page_position_options',
			),
			array(
				'title'    => __( 'Template Options', 'products-per-page-for-woocommerce' ),
				'type'     => 'title',
				'id'       => 'alg_wc_products_per_page_template_options',
			),
			array(
				'title'    => __( 'Template', 'products-per-page-for-woocommerce' ),
				'id'       => 'alg_products_per_page_text',
				'default'  => __( 'Products <strong>%from% - %to%</strong> from <strong>%total%</strong>. Products on page %select_form%', 'products-per-page-for-woocommerce' ),
				'type'     => 'textarea',
				'css'      => 'width:100%;',
				'alg_wc_ppp_raw' => true,
			),
			array(
				'title'    => __( 'Select class', 'products-per-page-for-woocommerce' ),
				'id'       => 'alg_wc_products_per_page_select_class',
				'default'  => 'sortby rounded_corners_class',
				'type'     => 'text',
				'css'      => 'width:100%;',
				'alg_wc_ppp_raw' => true,
			),
			array(
				'title'    => __( 'Select style', 'products-per-page-for-woocommerce' ),
				'id'       => 'alg_wc_products_per_page_select_style',
				'default'  => '',
				'type'     => 'text',
				'css'      => 'width:100%;',
				'alg_wc_ppp_raw' => true,
			),
			array(
				'title'    => __( 'Before HTML', 'products-per-page-for-woocommerce' ),
				'id'       => 'alg_wc_products_per_page_before_html',
				'default'  => '<div class="clearfix"></div><div>',
				'type'     => 'textarea',
				'css'      => 'width:100%;',
				'alg_wc_ppp_raw' => true,
			),
			array(
				'title'    => __( 'After HTML', 'products-per-page-for-woocommerce' ),
				'id'       => 'alg_wc_products_per_page_after_html',
				'default'  => '</div>',
				'type'     => 'textarea',
				'css'      => 'width:100%;',
				'alg_wc_ppp_raw' => true,
			),
			array(
				'type'     => 'sectionend',
				'id'       => 'alg_wc_products_per_page_template_options',
			),
			array(
				'title'    => __( 'Advanced Options', 'products-per-page-for-woocommerce' ),
				'type'     => 'title',
				'id'       => 'alg_wc_products_per_page_advanced_options',
			),
			array(
				'title'    => __( 'Enable cookie', 'products-per-page-for-woocommerce' ),
				'desc'     => __( 'Enable', 'products-per-page-for-woocommerce' ),
				'desc_tip' => sprintf( __( '%s cookie is used to save user\'s products per page selection.', 'products-per-page-for-woocommerce' ),
					'<code>alg_wc_products_per_page</code>' ),
				'id'       => 'alg_wc_products_per_page_cookie_enabled',
				'default'  => 'yes',
				'type'     => 'checkbox',
			),
			array(
				'title'    => __( 'Cookie expiration time', 'products-per-page-for-woocommerce' ),
				'desc'     => __( 'seconds', 'products-per-page-for-woocommerce' ),
				'id'       => 'alg_wc_products_per_page_cookie_sec',
				'default'  => 1209600,
				'type'     => 'number',
				'custom_attributes' => array( 'min' => 60 ),
			),
			array(
				'type'     => 'sectionend',
				'id'       => 'alg_wc_products_per_page_advanced_options',
			),
		);
		return $settings;
	}

}

endif;

return new Alg_WC_Products_Per_Page_Settings_General();
