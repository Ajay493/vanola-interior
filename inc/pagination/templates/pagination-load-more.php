<?php if ( isset( $query_result ) && intval( $query_result->max_num_pages ) > 1 ) { ?>
	<div class="qodef-m-pagination qodef--load-more" <?php cuthbert_is_installed( 'framework' ) ? qode_framework_inline_style( $pagination_top_margin ) : ''; ?>>
		<div class="qodef-m-pagination-inner">
			<?php
			$button_params = array(
				'custom_class'  => 'qodef-load-more-button',
				'button_layout' => 'textual',
				'link'          => '#',
				'text'          => esc_html__( 'Load More', 'cuthbert' ),
			);

			cuthbert_render_button_element( $button_params );
			?>
		</div>
	</div>
	<?php
	// Include loading spinner
	cuthbert_render_svg_icon( 'spinner', 'qodef-m-pagination-spinner' );
	?>
<?php } ?>
