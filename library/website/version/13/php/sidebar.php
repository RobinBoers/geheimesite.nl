<section class="w3-container w3-margin w3-margin-top">
<p class="nodec bigger">
    <b><i class="fab fa-blogger" style="color:orange"></i></b> <a href="https://www.webdevelopment-en-meer.blogspot.com">Webdevelopment-En-Meer</a> (It's in dutch...)<br>
    <b><i class="fab fa-github"></i></b> <a href="https://github.com/RobinBoers">github.com/RobinBoers</a><br>
    <b><i class="fab fa-youtube" style="color:red;"></i></b> <a href="https://www.youtube.com/channel/UCx4li1iMygs5KtqgcU5KGRw">Robin Boers - Tech, reviews & more!</a> (It's also in dutch...)
</p>
</section>
<hr>
<section class="w3-container w3-margin w3-margin-top">
    <h3>Blog</h3>
    <p>
        Do you want to see my blog?<br>
        <a href="http://www.webdevelopment-en-meer.blogspot.com">Webdevelopment-en-Meer</a>
    </p>
</section>
<hr>
<section class="w3-container w3-margin w3-margin-top">
<h3>Account (dutch)</h3>
<?php
if($_SESSION['login19'] === true) {
    ?><li><a href="/account/index.php">My account</a></li>
    <li><a href="/account/uitloggen.php">Logout</a></li><?php
} else {
    ?><li><a href="/account/inloggen.php">Sign in</a></li>
    <li><a href="/account/aanmelden.php">Sign up</a></li><?php
} ?>
</section>