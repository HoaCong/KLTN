<?php
/**
 * Main class
 *
 * @author  YITH
 * @package YITH WooCommerce Colors and Labels Variations
 * @version 1.1.1
 */

defined( 'YITH_WCCL' ) || exit; // Exit if accessed directly.

if ( ! class_exists( 'YITH_WCCL' ) ) {
	/**
	 * YITH WooCommerce Colors and Labels Variations
	 *
	 * @since 1.0.0
	 * @author Francesco Licandro
	 */
	class YITH_WCCL {

		/**
		 * Plugin object
		 *
		 * @since 1.0.0
		 * @var mixed
		 */
		public $obj = null;

		/**
		 * Constructor
		 *
		 * @since 1.0.0
		 * @author Francesco Licandro
		 * @return void
		 */
		public function __construct() {

			add_action( 'plugins_loaded', array( $this, 'plugin_fw_loader' ), 15 );

			if ( is_admin() ) {
				$this->obj = new YITH_WCCL_Admin();
			} else {
				$this->obj = new YITH_WCCL_Frontend();
			}

			// Add new attribute types.
			add_filter( 'product_attributes_type_selector', array( $this, 'attribute_types' ), 10, 1 );
		}

		/**
		 * Plugin Framework loader
		 *
		 * @since 1.0.0
		 * @author Francesco Licandro
		 */
		public function plugin_fw_loader() {
			if ( ! defined( 'YIT_CORE_PLUGIN' ) ) {
				global $plugin_fw_data;
				if ( ! empty( $plugin_fw_data ) ) {
					$plugin_fw_file = array_shift( $plugin_fw_data );
					require_once $plugin_fw_file;
				}
			}
		}

		/**
		 * Add new attribute types to standard WooCommerce
		 *
		 * @since  1.5.0
		 * @author Francesco Licandro <francesco.licandro@yithemes.com>
		 * @param array $default_type Array of default types.
		 * @return array
		 */
		public function attribute_types( $default_type ) {
			$custom = ywccl_get_custom_tax_types();
			return is_array( $custom ) ? array_merge( $default_type, $custom ) : $default_type;
		}
	}
}
