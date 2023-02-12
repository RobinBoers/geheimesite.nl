<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="2.0" xmlns:html="http://www.w3.org/TR/REC-html40"
	xmlns:sitemap="http://www.sitemaps.org/schemas/sitemap/0.9"
	xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
	<xsl:output method="html" version="1.0" encoding="UTF-8" indent="yes" />
	<xsl:template match="/">
		<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="nl" lang="nl">
			<head>
				<meta http-equiv="X-UA-Compatible" content="IE=edge" />
				<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
				<meta name="viewport" content="width=device-width, initial-scale=1" />
				<title>Sitemap — geheimesite.nl | Robin Boers</title>

				<link rel="stylesheet" href="https://geheimesite.nl/assets/css/main.css"
					type="text/css" />
				<script defer="defer" src="/assets/js/menu.js"></script>

				<link rel="alternate" hreflang="en" href="https://geheimesite.nl/en/sitemap.xml" />

				<style>
					.high {
					padding-left: 20px;
					}

					.sub {
					padding-left: 30px;
					}

					.low {
					padding-left: 40px;
					}
				</style>
			</head>
			<body>
				<a class="skip-nav" href="#content">Skip navigation</a>
				<header class="pageheader">
					<p class="title">
						<a href="/">Robin Boers</a>
					</p>

					<img src="/assets/images/menu.svg" alt="menu button" class="menu-button"
						hidden="hidden" />

					<nav>
						<ul class="menu">
							<li>
								<a href="/">Home</a>
							</li>
							<li>
								<a href="/over-mij">Over mij</a>
							</li>
							<li>
								<a href="/projecten">Projecten</a>
							</li>
							<li>
								<a href="/boeken">Boeken</a>
							</li>
							<li>
								<a href="https://blog.geheimesite.nl">Blog</a>
							</li>
						</ul>
					</nav>
				</header>

				<main id="content" class="page-content">
					<article>
						<section>
							<h1>Sitemap</h1>
							<p>
								Dit is een lijst van alle publieke pagina's op mijn site.
							</p>
						</section>

						<section>
							<ul>
								<xsl:for-each select="sitemap:urlset/sitemap:url">
									<li>
										<xsl:if test="sitemap:priority == 0.80">
											<xsl:attribute name="class">high</xsl:attribute>
										</xsl:if>

										<xsl:if test="sitemap:priority == 0.70">
											<xsl:attribute name="class">sub</xsl:attribute>
										</xsl:if>

										<xsl:if test="sitemap:priority == 0.60">
											<xsl:attribute name="class">low</xsl:attribute>
										</xsl:if>

										<xsl:variable name="itemURL">
											<xsl:value-of select="sitemap:loc" />
										</xsl:variable>
										<a href="{$itemURL}">
											<xsl:value-of select="sitemap:title" />
										</a>
									</li>
								</xsl:for-each>
							</ul>
						</section>
					</article>
				</main>
			</body>
		</html>
	</xsl:template>
</xsl:stylesheet>