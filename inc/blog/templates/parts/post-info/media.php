<div class="qodef-e-media">
	<?php
	switch ( get_post_format() ) {
		case 'gallery':
			cuthbert_template_part( 'blog', 'templates/parts/post-format/gallery' );
			break;
		case 'video':
			cuthbert_template_part( 'blog', 'templates/parts/post-format/video' );
			break;
		case 'audio':
			cuthbert_template_part( 'blog', 'templates/parts/post-format/audio' );
			break;
		default:
			cuthbert_template_part( 'blog', 'templates/parts/post-info/image' );
			break;
	}
	?>
</div>
