<?php
/**
 * Plugin Name: YITH WooCommerce Minimum Maximum Quantity
 * Plugin URI: https://yithemes.com/themes/plugins/yith-woocommerce-minimum-maximum-quantity/
 * Description: <code><strong>YITH WooCommerce Minimum Maximum Quantity</strong></code> allows you to set a minimum and/or maximum quantity for purchases in your shop
 * Author: YITH
 * Text Domain: yith-woocommerce-minimum-maximum-quantity
 * Version: 1.3.3
 * Author URI: http://yithemes.com/
 * WC requires at least: 3.2.0
 * WC tested up to: 3.4.x
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
} // Exit if accessed directly

if ( ! function_exists( 'is_plugin_active' ) ) {
	require_once( ABSPATH . 'wp-admin/includes/plugin.php' );
}

function ywmmq_install_free_admin_notice() {
	?>
	<div class="error">
		<p><?php _e( 'You can\'t activate the free version of YITH WooCommerce Minimum Maximum Quantity while you are using the premium one.', 'yith-woocommerce-minimum-maximum-quantity' ); ?></p>
	</div>
	<?php
}

function ywmmq_install_woocommerce_admin_notice() {
	?>
	<div class="error">
		<p><?php _e( 'YITH WooCommerce Minimum Maximum Quantity is enabled but not effective. It requires WooCommerce in order to work.', 'yith-woocommerce-minimum-maximum-quantity' ); ?></p>
	</div>
	<?php
}

if ( ! defined( 'YWMMQ_VERSION' ) ) {
	define( 'YWMMQ_VERSION', '1.3.3' );
}

if ( ! defined( 'YWMMQ_FREE_INIT' ) ) {
	define( 'YWMMQ_FREE_INIT', plugin_basename( __FILE__ ) );
}

if ( ! defined( 'YWMMQ_FILE' ) ) {
	define( 'YWMMQ_FILE', __FILE__ );
}

if ( ! defined( 'YWMMQ_DIR' ) ) {
	define( 'YWMMQ_DIR', plugin_dir_path( __FILE__ ) );
}

if ( ! defined( 'YWMMQ_URL' ) ) {
	define( 'YWMMQ_URL', plugins_url( '/', __FILE__ ) );
}

if ( ! defined( 'YWMMQ_ASSETS_URL' ) ) {
	define( 'YWMMQ_ASSETS_URL', YWMMQ_URL . 'assets' );
}

if ( ! defined( 'YWMMQ_TEMPLATE_PATH' ) ) {
	define( 'YWMMQ_TEMPLATE_PATH', YWMMQ_DIR . 'templates' );
}

/* Plugin Framework Version Check */
if ( ! function_exists( 'yit_maybe_plugin_fw_loader' ) && file_exists( YWMMQ_DIR . 'plugin-fw/init.php' ) ) {
	require_once( YWMMQ_DIR . 'plugin-fw/init.php' );
}
yit_maybe_plugin_fw_loader( YWMMQ_DIR );

function ywmmq_free_init() {

	/* Load text domain */
	load_plugin_textdomain( 'yith-woocommerce-minimum-maximum-quantity', false, dirname( plugin_basename( __FILE__ ) ) . '/languages/' );

	/* === Global YITH WooCommerce Minimum Maximum Quantity  === */
	YITH_WMMQ();

}

add_action( 'ywmmq_init', 'ywmmq_free_init' );

function ywmmq_free_install() {

	if ( ! function_exists( 'WC' ) ) {
		add_action( 'admin_notices', 'ywmmq_install_woocommerce_admin_notice' );
	} elseif ( defined( 'YWMMQ_PREMIUM' ) ) {
		add_action( 'admin_notices', 'ywmmq_install_free_admin_notice' );
		deactivate_plugins( plugin_basename( __FILE__ ) );
	} else {
		do_action( 'ywmmq_init' );
	}

}

add_action( 'plugins_loaded', 'ywmmq_free_install', 11 );

/**
 * Init default plugin settings
 */
if ( ! function_exists( 'yith_plugin_registration_hook' ) ) {
	require_once 'plugin-fw/yit-plugin-registration-hook.php';
}

register_activation_hook( __FILE__, 'yith_plugin_registration_hook' );

if ( ! function_exists( 'YITH_WMMQ' ) ) {

	/**
	 * Unique access to instance of YITH_WC_Min_Max_Qty
	 *
	 * @since   1.0.0
	 * @return  YITH_WC_Min_Max_Qty|YITH_WC_Min_Max_Qty_Premium
	 * @author  Alberto Ruggiero
	 */
	function YITH_WMMQ() {

		// Load required classes and functions
		require_once( YWMMQ_DIR . 'class.yith-wc-min-max-qty.php' );

		if ( defined( 'YWMMQ_PREMIUM' ) && file_exists( YWMMQ_DIR . 'class.yith-wc-wc-min-max-qty-premium.php' ) ) {


			require_once( YWMMQ_DIR . 'class.yith-wc-min-max-qty-premium.php' );

			return YITH_WC_Min_Max_Qty_Premium::get_instance();
		}

		return YITH_WC_Min_Max_Qty::get_instance();

	}

}