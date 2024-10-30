---
title: Privacy
---

{% container %}
<h1>{{ title }}</h1>

This site **does not** track you or store your personal information in any way. I do not use cookies and won’t save your information, but third parties might.

## Google fonts

I stopped using Google fonts when I discovered they were tracking my visitors. If you use Google fonts served from Google they can see your IP address and will save it. My web fonts are now self-hosted.

## YouTube embeds

This site uses [Invidious](//invidious.io) for YouTube embeds. They do not store your personal information.

<br><br>
{% endcontainer %}

<section class="box">

  **However**, if you really insist, we store your personal information for you.

  <noscript>
    Unfortunately, this requires JavaScript.
  </noscript>

  <label>Enter your personal information: <textarea></textarea></label>
  <button class="store">Store</button>
  <button class="download">Download</button>
</section>

<script>
  const storeInformation = (e) => {
    let merged;

    const existing = localStorage.getItem("info");
    const appended = document.querySelector("textarea").value;

    if(existing) merged = `${existing}\n${appended}`;
    else merged = appended;

    localStorage.setItem("info", merged);

    document.querySelector("textarea").value = "";
    flashButton(e.target, "Stored!");
    maybeShowDownloadButton();
  }

  const flashButton = (button, text) => {
    const old = button.innerText;
    button.innerText = text;
    window.setTimeout(() => button.innerText = old, 700);
  }

  const downloadInformation = () => {
    const stored = localStorage.getItem("info");

    if(stored) createDownloadableBlob("personal-information.txt", stored);
    else alert("Your personal information was empty. Either we lost it or you broke my website. Or both");
  };

  const createDownloadableBlob = (filename, data) => {
    var link = document.createElement('a');
    link.href = `data:text/plain;charset=utf-8,${encodeURIComponent(data)}`;
    link.download = filename;
    link.click();
  };

  const maybeShowDownloadButton = () => {
    if(localStorage.getItem("info")) {
      document.querySelector(".download").style.display = "inline";
    } else {
      document.querySelector(".download").style.display = "none";
    }
  };

  document.querySelector(".store").addEventListener("click", storeInformation);
  document.querySelector(".download").addEventListener("click", downloadInformation);

  maybeShowDownloadButton();
</script>
