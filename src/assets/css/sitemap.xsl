<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="2.0" xmlns:html="http://www.w3.org/TR/REC-html40" xmlns:sitemap="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
	<xsl:output method="html" version="1.0" encoding="UTF-8" indent="yes" />
	<xsl:template match="/">
		<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
			<head>
				<title>Sitemap — geheimesite.nl | Robin Boers</title>
				<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
				<meta name="viewport" content="width=device-width, initial-scale=1" />
				<link rel="stylesheet" href="https://geheimesite.nl/assets/css/main.css" type="text/css" />
			</head>
			<body>
				<a class="skip-nav" href="#content">Skip navigation</a>
				<header class="pageheader">
					<p class="title">
						<a href="/">Robin Boers</a>
					</p>

					<img src="/assets/images/menu.svg" alt="menu button" class="menu-button" hidden="hidden" />

					<nav>
						<ul class="menu">
							<li>
								<a href="/en">Home</a>
							</li>
							<li>
								<a href="/en/about">About</a>
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

						<table cellpadding="5">
							<tr style="border-bottom:1px black solid;">
								<th>URL</th>
								<th>Priority</th>
							</tr>
							<xsl:variable name="lower" select="'abcdefghijklmnopqrstuvwxyz'" />
							<xsl:variable name="upper" select="'ABCDEFGHIJKLMNOPQRSTUVWXYZ'" />
							<xsl:for-each select="sitemap:urlset/sitemap:url">
								<tr>
									<xsl:if test="position() mod 2 != 1">
										<xsl:attribute name="class">high</xsl:attribute>
									</xsl:if>
									<td>
										<xsl:variable name="itemURL">
											<xsl:value-of select="sitemap:loc" />
										</xsl:variable>
										<a href="{$itemURL}">
											<xsl:value-of select="sitemap:loc" />
										</a>
									</td>
									<td>
										<xsl:value-of select="concat(sitemap:priority*100,'%')" />
									</td>
								</tr>
							</xsl:for-each>
						</table>
					</article>
				</main>
			</body>
		</html>
	</xsl:template>
</xsl:stylesheet>