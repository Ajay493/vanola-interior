<?php
$social_share_enabled = 'yes' === cuthbert_core_get_post_value_through_levels( 'qodef_blog_enable_social_share' );
$social_share_layout  = cuthbert_core_get_post_value_through_levels( 'qodef_social_share_layout' );

if ( class_exists( 'CuthbertCore_Social_Share_Shortcode' ) && $social_share_enabled ) {
	$params = array(
		'layout' => $social_share_layout,
	);

	echo CuthbertCore_Social_Share_Shortcode::call_shortcode( $params );
}
