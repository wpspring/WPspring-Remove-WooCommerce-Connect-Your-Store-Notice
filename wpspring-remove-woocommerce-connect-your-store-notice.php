<?php
/**
 * Plugin Name: Remove Connect your store to WooCommerce.com Notice
 * Plugin URI: https://wordpress.org/plugins/wpspring-remove-woocommerce-connect-your-store-notice/
 * Description: This plugin removes the WooCommerce.com Connect Your Store Notice from the WP-Admin header.
 * Version: 1.0.2
 *
 * WC requires at least: 2.5
 * WC tested up to: 3.3.4
 * Author: WPspring
 * Author URI: https://wpspring.com/
 * Requires at least: 3.0
 * Tested up to: 4.9.5
 *
 * @author WPspring
 */

if ( !class_exists( 'WC_WPspringRemoveWCConnectYourStoreNotice') ) :

class WC_WPspringRemoveWCConnectYourStoreNotice {

	public function __construct() {

		add_action( 'plugins_loaded', array( $this, 'plugins_loaded' ) );

	}

	public function plugins_loaded() {

		if ( is_admin() ) {

   add_filter( 'woocommerce_helper_suppress_admin_notices', '__return_true' );

		}

	}

}

$GLOBALS['wc_wpspringremovewcconnectyourstorenotice'] = new WC_WPspringRemoveWCConnectYourStoreNotice();

endif;
