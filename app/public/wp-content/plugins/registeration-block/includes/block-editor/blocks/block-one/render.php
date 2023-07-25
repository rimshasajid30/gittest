<?php
/**
 * The template for rendering the block on the front-end.
 */

// Extract the Field Name attribute from the $attributes variable.
$field_name = isset( $attributes['fieldName'] ) ? $attributes['fieldName'] : 'Input Name';

// Output the block's content on the front-end.
?>
<div class="block-one">
    <h3><?php esc_html_e( 'First Block', 'registration-block' ); ?></h3>
    <div class="field-name">
        <label for="<?php echo esc_attr( $field_name ); ?>"><?php echo esc_html( $field_name ); ?>:</label>
        <input type="text" id="<?php echo esc_attr( $field_name ); ?>" name="<?php echo esc_attr( $field_name ); ?>" value="">
    </div>
</div>
