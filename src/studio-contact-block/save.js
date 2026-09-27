import { useBlockProps } from "@wordpress/block-editor";

export default function save() {
	return (
		<div {...useBlockProps.save()}>
			<div data-studio-contact="true" />
		</div>
	);
}
