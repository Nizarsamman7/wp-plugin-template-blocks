import { site } from "../data/siteData";

export function SiteChrome({ children }) {
	return (
		<div className="studio-site">
			<header className="studio-nav">
				<a className="studio-wordmark" href={site.homeUrl}>
					{site.name}
				</a>
				<nav>
					{site.nav.map((item) => (
						<a key={item.href} href={item.href}>
							{item.label}
						</a>
					))}
				</nav>
			</header>
			{children}
			<footer className="studio-footer">
				<p>{site.name}</p>
				<p>
					{site.phone} · {site.email}
				</p>
			</footer>
		</div>
	);
}
