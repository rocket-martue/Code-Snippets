<?php
/**
 * 空欄検索・スペース検索を無効化 
 */
add_filter(
	'posts_search',
	function( $search, \WP_Query $q ) {
	if( ! is_admin() && empty( $search ) && $q->is_search() && $q->is_main_query() )
		$search .=" AND 0=1 ";
		return $search;
	},
	10,
	2
);

/**
 * 検索の全角スペース対応
 */
add_action(
	'pre_get_posts',
	function ( $query ) {
		if ( is_admin() || ! $query->is_main_query() ) {
			return;
		}
		if( $query->is_search ) {
			$formtxt = $query->get( 's' );
			$formtxt = str_replace('　',' ',$formtxt);
			$query->set('s',$formtxt);
		}
	}
);
