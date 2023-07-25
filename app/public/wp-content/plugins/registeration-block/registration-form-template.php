<?php
/*
Template Name: Registration Form Template
*/

// Display the registration form using render_block
function rimshasajid_render_registration_form_block() {
	ob_start();
	?>
	<!-- Add a container for the block -->
	<div class="registration-form-block">
		<?php
		// Output the blocks' values as input fields in the form
		$blocks = parse_blocks( get_the_content() );
		foreach ( $blocks as $block ) {
			if ( $block['blockName'] === 'rimshasajid/first-block' ) {
				$first_name = $block['attrs']['firstName'];
				echo '<label>First Name</label>';
				echo '<input type="text" name="firstName" value="' . esc_attr( $first_name ) . '" /><br />';
			}

			// Add similar code for other blocks (Last Name, Phone Number, and Email)
		}
		?>
	</div>
	<?php
	return ob_get_clean();
}

// Register the custom template function as a block rendering callback
register_block_type( 'rimshasajid/registration-form', array(
	'render_callback' => 'rimshasajid_render_registration_form_block',
) );
