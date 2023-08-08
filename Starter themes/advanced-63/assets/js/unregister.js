wp.domReady( () => {
	wp.blocks.unregisterBlockStyle( 'core/quote', 'plain' );
	wp.blocks.unregisterBlockStyle( 'core/quote', 'default' );
	wp.blocks.unregisterBlockStyle( 'core/button', 'outline' );
	wp.blocks.unregisterBlockStyle( 'core/table', 'stripes' );
	wp.blocks.unregisterBlockStyle( 'core/table', 'regular' );
} );
