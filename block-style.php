<?php
/**
 * Block Styles
 *
 * @link https://developer.wordpress.org/reference/functions/register_block_style/
 * @param string $block_name,
 * @param array  $style_properties
 */
 
if ( function_exists( 'register_block_style' ) ) {
	/**
	 * Register block styles.
	 */
	add_action(
		'init',
		function() {
			register_block_style(
				'core/heading',
				array(
					'name'         => 'has_icon',
					'label'        => 'アイコン付き',
				)
			);

			register_block_style(
				'snow-monkey-blocks/section',
				array(
					'name'         => 'has_icon',
					'label'        => 'アイコン付き',
				)
			);

			register_block_style(
				'snow-monkey-blocks/items',
				array(
					'name'         => 'jcc',
					'label'        => '中央コンテンツ',
				)
			);

			register_block_style(
				'snow-monkey-blocks/items-item-standard',
				array(
					'name'         => 'theme-01',
					'label'        => 'テーマ01',
				)
			);

			register_block_style(
				'snow-monkey-blocks/items-item-standard',
				array(
					'name'         => 'theme-02',
					'label'        => 'テーマ02',
				)
			);
		}
	);
}
