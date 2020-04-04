<?php
/**
 * Update WCPBC to 1.8.21
 *
 * @package WCPBC
 * @version 1.8.21
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

// Update database for WC<3.9.
if ( version_compare( WC_VERSION, '3.4', '>=' ) && version_compare( WC_VERSION, '3.9', '<' ) ) {
	WCPBC_Update_GeoIP_DB::install();
}
