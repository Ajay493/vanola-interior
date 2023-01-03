<?php

if ( ! function_exists( 'cuthbert_load_page_mobile_header' ) ) {
	/**
	 * Function which loads page template module
	 */
	function cuthbert_load_page_mobile_header() {
		// Include mobile header template
		echo apply_filters( 'cuthbert_filter_mobile_header_template', cuthbert_get_template_part( 'mobile-header', 'templates/mobile-header' ) ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
	}

	add_action( 'cuthbert_action_page_header_template', 'cuthbert_load_page_mobile_header' );
}

if ( ! function_exists( 'cuthbert_register_mobile_navigation_menus' ) ) {
	/**
	 * Function which registers navigation menus
	 */
	function cuthbert_register_mobile_navigation_menus() {
		$navigation_menus = apply_filters( 'cuthbert_filter_register_mobile_navigation_menus', array( 'mobile-navigation' => esc_html__( 'Mobile Navigation', 'cuthbert' ) ) );

		if ( ! empty( $navigation_menus ) ) {
			register_nav_menus( $navigation_menus );
		}
	}

	add_action( 'cuthbert_action_after_include_modules', 'cuthbert_register_mobile_navigation_menus' );
}
