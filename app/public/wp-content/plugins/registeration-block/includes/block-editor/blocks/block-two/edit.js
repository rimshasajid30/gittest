import { __ } from '@wordpress/i18n';
import { useBlockProps, InspectorControls } from '@wordpress/block-editor';
import { PanelBody, TextControl } from '@wordpress/components';

export default function Edit({ attributes, setAttributes }) {
	const { fieldName } = attributes;

	const blockProps = useBlockProps();

	return (
		<>
			<InspectorControls>
				<PanelBody title={__('Field Settings', 'registration-block')}>
					<TextControl
						label={__('Field Name', 'registration-block')}
						value={fieldName}
						onChange={(value) => setAttributes({ fieldName: value })}
					/>
				</PanelBody>
			</InspectorControls>
			<div {...blockProps}>
				<h3>{__('Second Block', 'registration-block')}</h3>
				<div className="phone">
					<label htmlFor={fieldName}>
						{__('Input Name:', 'registeration-block')}
					</label>
					<input
						type="text"
						id={fieldName}
						name={fieldName}
						value=""
					/>
				</div>
			</div>
		</>
	);
}
