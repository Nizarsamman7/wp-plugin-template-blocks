import { site } from "../../shared/data/siteData";
import { SiteChrome } from "../../shared/components/SiteChrome";

export function ContactPage() {
	return (
		<SiteChrome>
			<section className="studio-contact">
				<p>Contact</p>
				<h1>Talk to {site.name}.</h1>
				<p>
					<a href={"tel:" + site.phone.replace(/\s/g, "")}>{site.phone}</a>
				</p>
				<p>
					<a href={"mailto:" + site.email}>{site.email}</a>
				</p>
			</section>
		</SiteChrome>
	);
}
