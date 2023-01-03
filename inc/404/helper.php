<?php

if ( ! function_exists( 'cuthbert_set_404_page_inner_classes' ) ) {
	/**
	 * Function that return classes for the page inner div from header.php
	 *
	 * @param string $classes
	 *
	 * @return string
	 */
	function cuthbert_set_404_page_inner_classes( $classes ) {

		if ( is_404() ) {
			$classes = 'qodef-content-full-width';
		}

		return $classes;
	}

	add_filter( 'cuthbert_filter_page_inner_classes', 'cuthbert_set_404_page_inner_classes' );
}

if ( ! function_exists( 'cuthbert_set_404_header_inner_classes' ) ) {
	/**
	 * Function that return classes for the page inner div from header.php
	 *
	 * @param string $classes
	 *
	 * @return string
	 */
	function cuthbert_set_404_header_inner_classes( $classes ) {

		if ( is_404() ) {
			$classes[] = 'qodef-skin--light';
		}

		return $classes;
	}

	add_filter( 'cuthbert_filter_header_inner_class', 'cuthbert_set_404_header_inner_classes' );
}

if ( ! function_exists( 'cuthbert_get_404_page_parameters' ) ) {
	/**
	 * Function that set 404 page area content parameters
	 */
	function cuthbert_get_404_page_parameters() {

		$params = array(
			'tagline'     => esc_html__( '404', 'cuthbert' ),
			'title'       => esc_html__( 'Error Page', 'cuthbert' ),
			'text'        => esc_html__( 'The page you are looking for doesn\'t exist. It may have been moved or removed altogether. Please try searching for some other page, or return to the website\'s homepage to find what you\'re looking for.', 'cuthbert' ),
			'button_text' => esc_html__( 'Back to home', 'cuthbert' ),
		);

		return apply_filters( 'cuthbert_filter_404_page_template_params', $params );
	}
}
