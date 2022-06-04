<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>About me — geheimesite.nl | Robin Boers</title>

        <link rel="alternate stylesheet" href="/css/plain.css" title="plain" />       
        <script src="/js/plain-mode.js"></script>

        <link rel="stylesheet" href="/css/main.css" title="default" />
        <script defer src="/js/menu.js"></script>

        <link rel="alternate" hreflang="nl" href="https://geheimesite.nl/over-mij" />
    </head>
    <body>
        <a class="skip-nav" href="#content">Skip navigation</a>
        <header class="pageheader">
            <p class="title"><a href="/">Robin Boers</a></p>

            <img src="/images/menu.svg" alt="menu button" class="menu-button" hidden />

            <nav>
                <ul class="menu">
                    <li><a href="/en/">Home</a></li>
                    <li class="selected">About me</li>
                    <li><a href="/en/projects">Projects</a></li>
                    <li><a href="/en/books">Books</a></li>
                    <li><a href="https://blog.geheimesite.nl/en">Blog</a></li>
                </ul>
            </nav>
        </header>

        <main id="content" class="page-content">
            <article>
                <div class="flex flex-col lg:flex-row items-center">
                    <section class="lg:mr-0">
                        <h1>About me</h1>
                        <p>
                            Hi, my name is Robin. I was born 15 years ago in Vlaardingen, Netherlands but I have lived in Maassluis for my entire life. I love to thinker with code and I currently work at Qdentity. This site is a place for me to showcase my projects. I also have a <a href="https://blog.geheimesite.nl/en">blog</a> where I write about programming, webdevelopment and other cool shit.
                        </p>
                    </section>
                    <img class="w-full h-60 mb-5 lg:rotate-1 rounded-xl aspect-square object-cover object-right-top lg:mb-0 lg:h-fit lg:w-1/5" src="/images/me.jpeg" alt="Dit ben ik.">
                </div>

                <section>
                    <p>
                        I also play handball and I have a <a href="https://www.youtube.com/channel/UCx4li1iMygs5KtqgcU5KGRw">YouTube channel</a>, where I make videos about programming, video-editing, computers and a lot of other cool things.<br />
                        I also have a <a href="https://github.com/RobinBoers">GitHub account</a> where most of my projects are hosted under open-source licenses.
                    </p>
                </section>

                <div class="flex flex-col lg:flex-row justify-center items-center gap-1 lg:gap-4">
                    <img class="w-full lg:w-auto" src="https://github-readme-stats.vercel.app/api/top-langs/?username=RobinBoers&layout=compact" alt="De meestgebruikte programmeertalen in mijn projecten">

                    <img class="w-full lg:w-auto" src="https://github-readme-stats.vercel.app/api?username=RobinBoers&count_private=true&show_icons=true&hide_title=true" alt="Mijn activiteit op GitHub het afgelopen jaar.">
                </div>

                <section>
                    <h2>How I learned programming</h2>
                    <p>
                        I've been coding since I was 10 years old (2017). It started with a book I found at the library about making websites. You have to know I've been a computer nerd since like forever, and knew what almost every button in Windows did. The book was titled <a href="https://www.nano-tips.com/">Creeëren met code: Zo maak je een website</a>, which is Dutch for "Creating with code: How to build a website". So I built my first website, that I launched end-2017. I've saved backups of early iterations of my website, which you can check out in my <a href="library/website/overview.php">Website Library</a>. Be warned: it is cringe and Dutch.
                    </p>

                <!-- <div class="flex flex-col lg:flex-row-reverse items-center">   -->
                    <!--section.lg:ml-0-->   
                    <!-- <img class="rounded-xl w-1/2 lg:w-1/5 lg:-ml-10 lg:mr-10 lg:-rotate-2 mb-5 lg:mb-0" src="images/content/coderdojo-nano-cover.jpg" alt="CoderDojo Nano: Bouw je eigen website!">
                </div> -->

                    <p>
                        I'm currently learning Linux, Elixir and Phoenix LiveView. I regularly post updates on my blog about what I make, learn and do. I'm always trying to learn new things.
                    </p>
                    <p>
                        I host my website at <a href="https://www.bhosted.nl?ref=97f4c4a4b13e269e12cfd4f0352ba527">bHosted</a>. I pay about 30 euros per year for my webhosting. I've also built sites for <a href="http://www.groendoenerij.nl">my father</a>, <a href="https://jokessterrenkruid.blogspot.com">my grandmother</a>, <a href="https://thesisevelineboers.blogspot.com/">my mother</a>
                        and <a href="https://hvm-oldscool.nl">my grandfather</a>
                        (now only my sister is left 🙈)
                    </p>
                </section>
                    
                <section>
                    <h2>About the site</h2>
                    <p>
                        My site is built using pure HTML and some PHP for extra magic. It is hosted at <a href="https://www.bhosted.nl?ref=97f4c4a4b13e269e12cfd4f0352ba527">bHosted</a>. The projects page is dynamically filled using the GitHub API to show my recent GitHub projects and the books page is built using <a href="https://micro.blog">Micro.blog</a> Bookshelves. For the styling I'm using tailwindcss. The font used for the headings is called Poppins, and for the main content I'm using Merriweather. The display font is Bungee Shade. My blog is composed of a few static sites built using <a href="https://gohugo.io">Hugo</a> and can be found at <a href="https://github.com/RobinBoers/blog">RobinBoers/blog</a>. The source code for the main site can be found at <a href="https://github.com/RobinBoers/geheimesite.nl">RobinBoers/geheimesite.nl</a>.
                    </p>
                </section>

                <section>
                    <h2 id="contact">Contact</h2>
                    <p>
                        Wanna send me a message?<br />This is one of my six emailaddresses: <a href="mailto:robin@geheimesite.nl">robin@geheimesite.nl</a><br />
                        Or use the contact form:
                    </p>
                    <form action="../scripts/contact-form.php" method="post">
                        <input class="input" type="text" name="email" placeholder="Emailaddress..." />
                        <input class="input" type="text" name="subject" placeholder="Subject..." />
                        <textarea class="input md-mark resize-none max-h-90" name="message" placeholder="Message..."></textarea>
                        <input class="input button" type="submit" name="send" value="Send" />
                    </form>
                </section>

                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d39365.680571004195!2d4.218705347976204!3d51.9274773547032!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c6be6c29b13c1f%3A0xd6195a4cc083b47a!2sMaassluis!5e0!3m2!1snl!2snl!4v1571501037238!5m2!1snl!2snl" class="my-10 border-0 w-full h-60 grayscale contrast-125 pointer-events-none" allowfullscreen></iframe>
            </article>
        </main>

        <footer class="page-footer">
            &copy; <?php echo date("Y"); ?> Robin Boers. Webdesigner and Elixir programmeur since 2017.
        </footer>
    </body>
</html>
