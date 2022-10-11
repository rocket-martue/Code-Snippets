<?php
if ( ! function_exists( 'the_rubi_content' ) ) {

	add_action(
		'snow_monkey_after_contents_inner',
		function() {
			if ( ! is_front_page() ) {
				the_rubi_content( 'footer-cta' );
			}
		}
	);

}
