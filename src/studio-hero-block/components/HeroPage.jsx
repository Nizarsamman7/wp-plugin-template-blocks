import { SiteChrome } from "../../shared/components/SiteChrome";

export function HeroPage() {
	return (
		<SiteChrome>
			<section className="studio-hero">
				<p>Starter block</p>
				<h1>Replace this hero with the client story.</h1>
				<p>Edit site copy in src/shared/data/siteData.js and this component. Build with npm run build before shipping.</p>
				<a className="studio-button" href="/contact">
					Contact
				</a>
			</section>
		</SiteChrome>
	);
}
