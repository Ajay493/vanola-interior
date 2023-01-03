<?php
/*
Template Name: Timetable Event
*/
get_header();

// Include event content template
if ( cuthbert_is_installed( 'core' ) ) {
	cuthbert_core_template_part( 'plugins/timetable', 'templates/content' );
}

get_footer();
