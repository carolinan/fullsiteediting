function prefix_filter_column_class( $block_content, $block ) {
	if ( 'core/column' === $block['blockName'] ) {
		$block_attr = $block['attrs'];

		if ( isset( $block_attr['width'] ) && $block_attr['width'] > 50 ) {

			$block_content = str_replace( 'class="wp-block-column', 'class="wp-block-column wide-column ', $block_content );

		} elseif ( isset( $block_attr['width'] ) && $block_attr['width'] < 50 ) {

			$block_content = str_replace( 'class="wp-block-column', 'class="wp-block-column narrow-column ', $block_content );

		}
	}
	return $block_content;
}

add_filter( 'render_block', 'prefix_filter_column_class', 10, 2 );