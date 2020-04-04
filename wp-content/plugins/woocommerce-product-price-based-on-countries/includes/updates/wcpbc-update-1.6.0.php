<?php
/**
 * Update WCPBC to 1.6.0
 *
 * @author 		OscarGare
 * @category 	Admin
 * @version     1.6.0
 */

if ( ! defined( 'ABSPATH' ) )  exit; // Exit if accessed directly

global $wpdb;

foreach ( WCPBC_Pricing_Zones::get_zones() as $wcpbc_zone ) {

	/**
	 * Remove "_variable" prefix for prices meta keys
	 */
	$wcpbc_zone_id = $wcpbc_zone->get_zone_id();
	$wpdb->query( "update {$wpdb->postmeta} set meta_key = replace(meta_key, '_variable', '') where meta_key like '_{$wcpbc_zone_id}_variable_%'" );

	/**
	 * Sync product prices
	 */
	wcpbc_sync_exchange_rate_prices( $wcpbc_zone );
}

/**
 * Update shipping option
 */
$wc_price_based_shipping_conversion = get_option( 'wc_price_based_shipping_conversion', 'no' );
update_option( 'wc_price_based_country_shipping_exchange_rate', $wc_price_based_shipping_conversion );

/**
 * Delete deprecated option
 */
 delete_option( 'wc_price_based_country_hide_ads' );
 delete_option( 'wc_price_based_shipping_conversion' );
