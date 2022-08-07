<?xml version="1.0"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:output method="html" version="1.0" encoding="UTF-8" indent="yes"/>
    <xsl:template match="/opml">
        <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
            <head>
                <title><xsl:value-of select="head/title"/></title>
                <meta name="viewport" content="width=device-width, initial-scale=1" />
                <link rel="stylesheet" type="text/css" href="/assets/css/main.css"/>
            </head>
            <body>
                <p>
                    <a>
                        <xsl:attribute name="href">
                            <xsl:value-of select="head/ownerId"/>
                        </xsl:attribute>
                        &#171; <xsl:value-of select="head/ownerName" />
                    </a>
                </p>
                <aside>
                    <p>
                        Hi! You're looking at an <a href="https://en.wikipedia.org/wiki/OPML">OPML</a> file, which I rendered nicely using some <a href="/assets/css/opml.xsl">XSL</a> (which I stole from <a href="https://petermolnar.net">Peter Molnar</a>). These are the blogs I follow. You can use this code to for example import them in an RSS reader.
                    </p>
                </aside>
            </body>
        </html>
    </xsl:template>
    <xsl:template match="outline" xmlns="http://www.w3.org/1999/xhtml">
        <xsl:choose>
            <xsl:when test="((@type='folder'))">
                <details open="open">
                    <summary>
                        <xsl:value-of select="@title"/>
                    </summary>
                    <ul>
                        <xsl:apply-templates select="outline"/>
                    </ul>
                </details>
            </xsl:when>
            <xsl:otherwise>
                <li>
                    <a href="{@xmlUrl}" title="feed URL">
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                            <path d="M14.5 0h-13c-0.825 0-1.5 0.675-1.5 1.5v13c0 0.825 0.675 1.5 1.5 1.5h13c0.825 0 1.5-0.675 1.5-1.5v-13c0-0.825-0.675-1.5-1.5-1.5zM4.359 12.988c-0.75 0-1.359-0.603-1.359-1.353 0-0.744 0.609-1.356 1.359-1.356 0.753 0 1.359 0.613 1.359 1.356 0 0.75-0.609 1.353-1.359 1.353zM7.772 13c0-1.278-0.497-2.481-1.397-3.381-0.903-0.903-2.1-1.4-3.375-1.4v-1.956c3.713 0 6.738 3.022 6.738 6.737h-1.966zM11.244 13c0-4.547-3.697-8.25-8.241-8.25v-1.956c5.625 0 10.203 4.581 10.203 10.206h-1.963z"></path>
                        </svg>
                    </a>
                    <xsl:choose>
                        <xsl:when test="((@xmlUrl != @htmlUrl))">
                            <a href="{@htmlUrl}" title="webpage URL">
                                <xsl:value-of select="@title"/>
                            </a>
                        </xsl:when>
                        <xsl:otherwise>
                            <xsl:value-of select="@title"/>
                        </xsl:otherwise>
                    </xsl:choose>
                </li>
            </xsl:otherwise>
        </xsl:choose>
    </xsl:template>
</xsl:stylesheet>