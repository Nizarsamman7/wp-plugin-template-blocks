import { createRoot } from "@wordpress/element";

/**
 * Mount a React page into every matching block container.
 * Safe when the view script runs after DOMContentLoaded.
 */
export function mountStudioBlock(selector, Page) {
	const run = () => {
		document.querySelectorAll(selector).forEach((container) => {
			if (container.dataset.studioMounted === "true") {
				return;
			}
			container.dataset.studioMounted = "true";
			createRoot(container).render(<Page />);
		});
	};

	if (document.readyState === "loading") {
		document.addEventListener("DOMContentLoaded", run);
	} else {
		run();
	}
}
