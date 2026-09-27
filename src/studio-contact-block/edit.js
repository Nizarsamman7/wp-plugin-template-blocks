import { __ } from "@wordpress/i18n";
import { useBlockProps } from "@wordpress/block-editor";
import "./editor.scss";

export default function Edit() {
	return (
		<div {...useBlockProps()}>
			<div className="studio-block-preview">
				<p>{__("Studio Contact", "studio-blocks")}</p>
				<p className="description">{__("Contact page shell with phone and email.", "studio-blocks")}</p>
			</div>
		</div>
	);
}
