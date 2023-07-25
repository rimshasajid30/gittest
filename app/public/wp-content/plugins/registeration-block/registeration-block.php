<?php
/**
 * Registers the block using the metadata loaded from the `block.json` file.
 * Behind the scenes, it registers also all assets so they can be enqueued
 * through the block editor in the corresponding context.
 *
 * @see https://developer.wordpress.org/reference/functions/register_block_type/
 */
function registration_block_block_init() {
	$blocks = array(
		'block-one' => 'block-one/',
		'block-two' => 'block-two/',
		'block-three' => 'block-three/',
		'block-four' => 'block-four/',
		'block-five' => 'block-five/',
	);

	foreach ( $blocks as $block_name => $block_path ) {
		register_block_type_from_metadata( __DIR__ . '/includes/block-editor/blocks/' . $block_path, array(
			'attributes' => array(
				array(
					'block_name' => 'block-one/',
					'attribute'  => 'inputName', // Change this attribute to the relevant attribute in the block-one block.
				),
				array(
					'block_name' => 'block-two/',
					'attribute'  => 'phone-number', // Change this attribute to the relevant attribute in the block-one block.
				),
				array(
					'block_name' => 'block-three/',
					'attribute'  => 'email', // Change this attribute to the relevant attribute in the block-one block.
				),
				array(
					'block_name' => 'block-four/',
					'attribute'  => 'password', // Change this attribute to the relevant attribute in the block-two block.
				),
				array(
					'block_name' => 'block-five/',
					'attribute'  => 'country', // Change this attribute to the relevant attribute in the block-two block.
				),
			),
			'render_callback' => function ( $attributes, $content ) use ( $block_path ) {
				ob_start();
				require plugin_dir_path( __FILE__ ) . 'includes/block-editor/blocks/' . $block_path . 'render.php';
				return ob_get_clean();
			},
		) );
	}
}
add_action( 'init', 'registration_block_block_init' );
