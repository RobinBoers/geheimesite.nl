<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Follow me — geheimesite.nl | Robin Boers</title>

    <link rel="stylesheet" href="/assets/css/main.css" title="default" />
    <script defer src="/assets/js/menu.js"></script>

    <link rel="alternate" hreflang="en" href="https://geheimesite.nl" />
</head>

<body>
    <a class="skip-nav" href="#content">Skip navigation</a>
    <header class="pageheader">
        <p class="title"><a href="/en">Robin Boers</a></p>

        <img src="/assets/images/menu.svg" alt="menu button" class="menu-button" hidden />

        <nav>
            <ul class="menu">
                <li><a href="/en">Home</a></li>
                <li><a href="/en/about">About me</a></li>
                <li><a href="/en/projects">Projects</a></li>
                <li><a href="/en/books">Books</a></li>
                <li><a href="https://blog.geheimesite.nl/en">Blog</a></li>
            </ul>
        </nav>
    </header>

    <main id="content" class="page-content">
        <article>
            <section>
                <h1>Follow me</h1>
                <p>
                    I don't like social media. Actually, <a href="https://blog.geheimesite.nl/2021/12/social-media-wat-moeten-we-er-mee-aan.html">I hate it</a>. However, I do have a few <a href="https://en.wikipedia.org/wiki/RSS" target="_blank">RSS</a> feeds:
                </p>

                <ul>
                    <li>
                        <a href="https://blog.geheimesite.nl/index.xml">Webdevelopment-En-Meer</a>
                        <small>(primary feed, dutch)</small>
                    </li>
                    <li>
                        <a href="https://blog.geheimesite.nl/en/index.xml">ThatCrazyWebdev</a>
                        <small>(less frequent posts, english)</small>
                    </li>
                    <li>
                        <a href="https://micro.geheimesite.nl/feed">Robijntje's neolog</a>
                        <small>(microblog, english)</small>
                    </li>
                    <li>
                        <a href="https://blog.geheimesite.nl/stupid-codes/index.xml">Stupid Codes</a>
                        <small>(feed with programming tips, inactive, english)</small>
                    </li>
                </ul>
            </section>

            <hr class="my-7 border-none">

            <section>
                <h2>What is RSS?</h2>

                <p>RSS is like your facebook feed, but instead of an algorithm deciding what to show you, you choose which feeds to subscribe to. That means it is fully in your control: no ads, no snooping.</p>

                <p>In order to read the feeds you need an <a href="https://en.wikipedia.org/wiki/News_aggregator" target="_blank">RSS reader</a>. I recommend either <a href="https://inoreader.com">Inoreader</a> or <a href="https://theoldreader.com" target="_blank">The Old Reader</a>.</p>

                <p>I can explain how RSS works here, but I think Nicky Case does a way better job than I do, so please read <a href="https://ncase.me/rss">her explanation</a> instead :)</p>
            </section>

            <hr class="my-7 border-none">

            <section>
                <h2>But if you really ❤️ email....</h2>

                <p>Look, I totally understand if you don't want to setup RSS and you'd rather receive an email if I post something. That's why I also use Follow.it for email notifications (dutch blog only).</p>

                <form action="https://api.follow.it/subscription-form/c3F0clRXeXpFVlR3Um5xL2NyQVFWQXRqMzdSNlJLb3dGdkk2YzRlQ0ZJMlo4WUhYLzhETDFPRmJTLzFiMlk0cVQwcjVWODR3ZEVoQ2xOaXlVWFVuSld5U25aamRVODRXdCtBS1BSYmxJMjMxQi80ZjduaGNDZDhwTnpEU25WL1Z8eXFRN2FNemhJQUVCeU9IKzMrNlhwbGl1OW5xWGZ0ODlkMlRCV0hCK3h3WT0=/8" method="post">
                    <label for="email">Emailaddress</label>
                    <input class="input" type="email" name="email">
                    <input class="input button" type="submit" value="Subscribe">
                </form>
                
                <p class="mt-6 supplement">If you fill in the form I will probably be able to see your emailaddress.</p>
                
            </section>
        </article>
    </main>

    <footer class=" page-footer">
        &copy; <?php echo date("Y"); ?> Robin Boers. Webdesigner en Elixir programmeur sinds 2017.
    </footer>
</body>

</html>