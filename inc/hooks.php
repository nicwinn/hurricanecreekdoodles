<?php
/**
 * Custom hooks
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( ! function_exists( 'understrap_site_info' ) ) {
	/**
	 * Add site info hook to WP hook library.
	 */
	function understrap_site_info() {
		do_action( 'understrap_site_info' );
	}
}

add_action( 'understrap_site_info', 'understrap_add_site_info' );
if ( ! function_exists( 'understrap_add_site_info' ) ) {
	/**
	 * Add site info content.
	 */
	function understrap_add_site_info() {
		$the_theme = wp_get_theme();

		$site_info = '&copy;' . date("Y") . ' ' . $the_theme->get( 'Name' );

        $attr = array (
            'width' => '32', //input only number, in pixel
            'height' => '32', //input only number, in pixel
            'margin' => '6', //input only number, in pixel
            'display' => 'horizontal', //horizontal | vertical
            'alignment' => 'center', //center | left | right
            'attr_id' => 'hcd-social' //add custom id to <ul> wraper
//            'attr_class' => 'custom_icon_class' //add custom class to <ul> wraper
//            'selected_icons' => array ( '1', '3', '5', '6' )
            //you can get the icon ID form All Icons page
        );
        if ( function_exists('cn_social_icon') ) echo cn_social_icon( $attr );

        // Check if customizer site info has value.
		if ( get_theme_mod( 'understrap_site_info_override' ) ) {
			$site_info = get_theme_mod( 'understrap_site_info_override' );
		}

		echo apply_filters( 'understrap_site_info_content', $site_info ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped

	}
}
