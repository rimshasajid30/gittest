/**
 * Retrieves the translation of text.
 *
 * @see https://developer.wordpress.org/block-editor/packages/packages-i18n/
 */
import { __ } from '@wordpress/i18n';

/**
 * React hook that is used to mark the block wrapper element.
 * It provides all the necessary props like the class name.
 *
 * @see https://developer.wordpress.org/block-editor/packages/packages-block-editor/#useBlockProps
 */
import { useBlockProps } from '@wordpress/block-editor';

/**
 * Lets webpack process CSS, SASS or SCSS files referenced in JavaScript files.
 * Those files can contain any CSS code that gets applied to the editor.
 *
 * @see https://www.npmjs.com/package/@wordpress/scripts#using-css
 */
import './editor.scss';

/**
 * The edit function describes the structure of your block in the context of the
 * editor. This represents what the editor will render when the block is used.
 *
 * @see https://developer.wordpress.org/block-editor/developers/block-api/block-edit-save/#edit
 * @return {WPElement} Element to render.
 */

import { TextControl } from '@wordpress/components';

export default function Edit({ attributes, setAttributes }){
	const { jobTitle } = attributes;
	return (
		<div {...useBlockProps()}>
		  <h3>{__('Fifth Block', 'registeration-block')}</h3>
		  <TextControl
			label={__('Job Title', 'registeration-block')}
			value={jobTitle}
			onChange={(value) => setAttributes({ jobTitle: value })}
			className="jobTitle"
		  />
		</div>
	  );
}