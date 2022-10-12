<?php
add_action(
	'snow_monkey_after_contents_inner',
	function() {
		if ( ! is_front_page() ) {
			if ( function_exists( 'the_rubi_content' ) ) {
				the_rubi_content( 'footer-cta' );
			}
		}
	}
);
