<?php
/**
 * The template for rendering the block on the front-end.
 */

// Extract the First Name attribute from the $attributes variable.
$jobTitle = isset( $attributes['jobTitle'] ) ? $attributes['jobTitle'] : '';

// Output the block's content on the front-end.
?>
<div class="block-five">
    <h3><?php esc_html_e( 'Fifth Block', 'registration-block' ); ?></h3>
    <div class="jobTitle">
        <label for="jobTitle"><?php esc_html_e( 'Job Title:', 'registration-block' ); ?></label>
        <input type="text" id="jobTitle" name="jobTitle" value="<?php echo esc_attr( $jobTitle ); ?>">
    </div>
</div>
