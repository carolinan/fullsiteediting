const { __ } = wp.i18n;

/* Create a sticky variation of the navigation block. */
wp.blocks.registerBlockVariation( 'core/navigation', {
	name: 'sticky-menu',
	title: 'Fixed Navigation',
	description: __( 'Fixate the navigation to the top right.' ),
	scope: [ 'transform' ],
	attributes: {
		className: 'is-style-jace-sticky'
	},
});

/* Allow switching back to the default navigation. */
wp.blocks.registerBlockVariation( 'core/navigation', {
	name: 'navigation',
	title: 'Navigation',
	description: __( 'Default style' ),
	scope: [ 'transform' ],
	attributes: {
		className: 'is-style-default-navigation'
	},
});

/* Create a sticky variation of the header. */
wp.blocks.registerBlockVariation( 'core/template-part', {
	name: 'sticky-header',
	title: 'Sticky Header',
	description: __( 'Sticky header.' ),
	scope: [ 'transform' ],
	attributes: {
		className: 'is-style-jace-sticky-header'
	},
});

/* Allow switching back to the default header. */
wp.blocks.registerBlockVariation( 'core/template-part', {
	name: 'template-part',
	title: 'Template part',
	description: __( 'Default style' ),
	scope: [ 'transform' ],
	attributes: {
		className: 'is-style-default'
	},
});
