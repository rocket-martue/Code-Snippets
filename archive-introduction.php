<?php
/*
 * 各投稿タイプのアーカイブページに導入文を表示
 * リンクボタンの表示
 * 検索結果は除外
 * 
 * @param mixed $desc　再利用ブロックの slug
 * @param mixed $link_btn 再利用ブロックの slug
 */
add_action(
	'snow_monkey_before_archive_entry_content',
	function() {
		$_post_type = get_post_type();
		$desc       = null;
		$link_btn   = null;
		switch ( $_post_type ) {
			case 'post':
				if ( ! is_category() ) {
					$desc = 'blog-desc';
				}
				$link_btn = '';
				break;
			case 'news':
				$desc     = 'news-desc';
				// $link_btn = 'btn-news-link';
				break;
			case 'collection':
				$desc = 'collection-desc';
				break;
			case 'gallary':
				$desc = 'gallary-desc';
				break;
		}
		if ( $desc && ! is_search() ) {
			if ( function_exists( 'the_rubi_content' ) ) {
			?>
<div class="desc">
	<?php the_rubi_content( $desc ); ?>
</div>
			<?php
			}
		}
		if ( $link_btn && ! is_search() ) {
			if ( function_exists( 'the_rubi_content' ) ) {
		?>
<div class="link_btn">
	<?php the_rubi_content( $link_btn ); ?>
</div>
		<?php
			}
		}
	}
);
