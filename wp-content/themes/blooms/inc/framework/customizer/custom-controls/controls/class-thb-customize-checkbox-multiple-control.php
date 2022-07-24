<?php

/**
 * Multiple checkbox customize control class.
 *
 * @since  1.0.0
 */
class THB_Customize_Checkbox_Multiple_Control extends WP_Customize_Control {

	/**
	 * The type of customize control being rendered.
	 *
	 * @since  1.0.0
	 * @var    string
	 */
	public $type = 'checkbox-multiple';

	/**
	 * Enqueue scripts/styles.
	 *
	 * @since  1.0.0
	 * @return void
	 */
	public function enqueue() {
		wp_enqueue_script( 'thb-custom-controls-js', esc_url( get_theme_file_uri( 'inc/framework/customizer/custom-controls/js/customizer.js' ) ), array( 'jquery' ), '1.0', true );
		wp_enqueue_style( 'thb-custom-controls-css', esc_url( get_theme_file_uri( 'inc/framework/customizer/custom-controls/css/customizer.css' ) ), array(), '1.0', 'all' );
		wp_enqueue_editor();
	}

	/**
	 * Displays the control content.
	 *
	 * @since  1.0.0
	 * @return void
	 */
	public function render_content() {

		if ( empty( $this->choices ) ) {
			return;
		} ?>

		<?php if ( ! empty( $this->label ) ) : ?>
			<span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
		<?php endif; ?>

		<?php if ( ! empty( $this->description ) ) : ?>
			<span class="description customize-control-description"><?php echo esc_html( $this->description ); ?></span>
		<?php endif; ?>

		<?php
		$multi_values = ! is_array( $this->value() ) ? explode( ',', $this->value() ) : $this->value();
		?>

		<ul>
			<?php
			foreach ( $this->choices as $value => $label ) :
				?>

				<li>
					<label>
						<input type="checkbox" value="<?php echo esc_attr( $value ); ?>" <?php checked( in_array( strval( $value ), $multi_values, true ) ); ?> />
						<?php echo esc_html( $label ); ?>
					</label>
				</li>

			<?php endforeach; ?>
		</ul>

		<input type="hidden" <?php $this->link(); ?> value="<?php echo esc_attr( implode( ',', $multi_values ) ); ?>" />
		<?php
	}
}
