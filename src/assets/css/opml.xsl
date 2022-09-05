<?xml version="1.0"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    <xsl:output method="html" version="1.0" encoding="UTF-8" indent="yes" />
    <xsl:template match="/opml">
        <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
            <head>
                <meta http-equiv="X-UA-Compatible" content="IE=edge" />
                <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
                <meta name="viewport" content="width=device-width, initial-scale=1" />
                <title>
                    <xsl:value-of select="head/title" />
                    — geheimesite.nl | Robin Boers
                </title>

                <style>
                    .feed-icon {
                        margin-right: 5px;
                    }
                </style>

                <link rel="stylesheet" href="/assets/css/main.css" type="text/css" />
                <script defer="defer" src="/assets/js/menu.js"></script>
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
                            <h1>Subscriptions</h1>
                            <p>
                                Hi! You're looking at an
                                <a href="https://en.wikipedia.org/wiki/OPML">OPML</a>
                                file, which I rendered nicely using some
                                <a href="/assets/css/opml.xsl">XSL</a>
                                (that I stole from
                                <a href="https://petermolnar.net">Peter Molnar</a>
                                ). These are the blogs I follow. You can use this code to for example import them in an RSS reader.
                            </p>
                        </section>

                        <section>
                            <xsl:apply-templates select="body/outline" />
                        </section>
                    </article>
                </main>
            </body>
        </html>
    </xsl:template>
    <xsl:template match="outline" xmlns="http://www.w3.org/1999/xhtml">
        <xsl:choose>
            <xsl:when test="((@type='folder'))">
                <details open="open">
                    <summary>
                        <xsl:value-of select="@title" />
                    </summary>
                    <ul>
                        <xsl:apply-templates select="outline" />
                    </ul>
                </details>
            </xsl:when>
            <xsl:otherwise>
                <li>
                    <a href="{@xmlUrl}" class="feed-icon" title="feed URL">
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                            <path d="M14.5 0h-13c-0.825 0-1.5 0.675-1.5 1.5v13c0 0.825 0.675 1.5 1.5 1.5h13c0.825 0 1.5-0.675 1.5-1.5v-13c0-0.825-0.675-1.5-1.5-1.5zM4.359 12.988c-0.75 0-1.359-0.603-1.359-1.353 0-0.744 0.609-1.356 1.359-1.356 0.753 0 1.359 0.613 1.359 1.356 0 0.75-0.609 1.353-1.359 1.353zM7.772 13c0-1.278-0.497-2.481-1.397-3.381-0.903-0.903-2.1-1.4-3.375-1.4v-1.956c3.713 0 6.738 3.022 6.738 6.737h-1.966zM11.244 13c0-4.547-3.697-8.25-8.241-8.25v-1.956c5.625 0 10.203 4.581 10.203 10.206h-1.963z"></path>
                        </svg>
                    </a>
                    <xsl:choose>
                        <xsl:when test="((@xmlUrl != @htmlUrl))">
                            <a href="{@htmlUrl}" title="webpage URL">
                                <xsl:value-of select="@title" />
                            </a>
                        </xsl:when>
                        <xsl:otherwise>
                            <xsl:value-of select="@title" />
                        </xsl:otherwise>

                        <xsl:when test="((@text != @title))">
                            <i>
                                <xsl:value-of select="@text" />
                            </i>
                        </xsl:when>
                    </xsl:choose>
                </li>
            </xsl:otherwise>
        </xsl:choose>
    </xsl:template>
</xsl:stylesheet>