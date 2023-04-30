<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="2.0" xmlns:html="http://www.w3.org/TR/REC-html40"
	xmlns:sitemap="http://www.sitemaps.org/schemas/sitemap/0.9"
	xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
	<xsl:output method="html" version="5.0" encoding="UTF-8" indent="yes" />
	<xsl:template match="/">
		<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
			<head>
				<meta http-equiv="X-UA-Compatible" content="IE=edge" />
				<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
				<meta name="viewport" content="width=device-width, initial-scale=1" />
				<title>Sitemap — geheimesite.nl | Robin Boers</title>

				<link rel="stylesheet" href="https://geheimesite.nl/assets/css/main.css"
					type="text/css" />
				<script defer="defer" src="/assets/js/menu.js"></script>

				<link rel="alternate" hreflang="nl" href="https://geheimesite.nl/sitemap.xml" />

				<style>
					li {
					list-style: none;
					}

					.page {
					padding-left: 20px;
					}
					.subpage {
					padding-left: 40px;
					}
				</style>
			</head>
			<body>
				<a class="skip-nav" href="#content">Skip navigation</a>
				<header class="page-header">
					<p class="title">
						<a href="/en">Robin Boers</a>
					</p>

					<img src="/assets/images/ui/menu.svg" alt="menu button" class="menu-button"
						hidden="hidden" />

					<nav>
						<ul class="menu">
							<li>
								<a href="/en">Home</a>
							</li>
							<li>
								<a href="/en/about">About me</a>
							</li>
							<li>
								<a href="/en/projects">Projects</a>
							</li>
							<li>
								<a href="/en/books">Books</a>
							</li>
							<li>
								<a href="https://blog.geheimesite.nl/en">Blog</a>
							</li>
							<li>
								<a href="/en/more">More</a>
							</li>
						</ul>
					</nav>
				</header>

				<main id="content" class="page-content">
					<article>
						<section>
							<h1>Sitemap</h1>
							<p>
								This is a list of all public pages on my site.
							</p>
						</section>

						<section>
							<ul>
								<xsl:for-each select="sitemap:urlset/sitemap:url">
									<li>
										<xsl:choose>
											<xsl:when test="sitemap:priority&lt;0.8">
												<xsl:attribute name="class">subpage</xsl:attribute>
											</xsl:when>
											<xsl:when test="sitemap:priority&lt;1.0">
												<xsl:attribute name="class">page</xsl:attribute>
											</xsl:when>
											<xsl:otherwise>
												<xsl:attribute name="class">root</xsl:attribute>
											</xsl:otherwise>
										</xsl:choose>

										<xsl:variable name="itemURL">
											<xsl:value-of select="sitemap:loc" />
										</xsl:variable>
										<a href="{$itemURL}">
											<!--<xsl:value-of
											select="substring-after(substring-before(sitemap:loc,
											'/'), '/')" />-->
											<xsl:value-of
												select="substring-after(sitemap:loc, 'https://geheimesite.nl')" />
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