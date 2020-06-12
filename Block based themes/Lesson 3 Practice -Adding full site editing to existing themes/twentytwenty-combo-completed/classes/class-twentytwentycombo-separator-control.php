<?php
/**
 * Customizer Separator Control settings for this theme.
 *
 * @package Twenty_Twenty_Combo
 * @since Twenty Twenty Combo 1.0
 */

if ( class_exists( 'WP_Customize_Control' ) ) {

	if ( ! class_exists( 'TwentyTwentyCombo_Separator_Control' ) ) {
		/**
		 * Separator Control.
		 */
		class TwentyTwentyCombo_Separator_Control extends WP_Customize_Control {
			/**
			 * Render the hr.
			 */
			public function render_content() {
				echo '<hr/>';
			}

		}
	}
}
