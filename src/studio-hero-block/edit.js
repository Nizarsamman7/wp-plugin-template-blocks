import { __ } from "@wordpress/i18n";
import { useBlockProps } from "@wordpress/block-editor";
import "./editor.scss";

export default function Edit() {
	return (
		<div {...useBlockProps()}>
			<div className="studio-block-preview">
				<p>{__("Studio Hero", "studio-blocks")}</p>
				<p className="description">{__("Full-page hero with navigation and footer.", "studio-blocks")}</p>
			</div>
		</div>
	);
}
