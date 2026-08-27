(async () => {
  const body = document.body || await new Promise(resolve => {
    const observer = new MutationObserver(() => {
      if (!document.body) return;

      observer.disconnect();
      resolve(document.body);
    });

    observer.observe(document.documentElement, { childList: true });
  });

  if (document.querySelector("#le-global")) return;

  const style = document.createElement("style");

  style.textContent = `
    #le-global {
      color: currentColor;
      position: absolute;
      top: 0;
      left: 0;
      z-index: 100;
    }

    #le-global svg {
      width: 40px;
      height: 40px;
      margin: clamp(7px, 0.5rem, 20px);
    }

    #le-global svg,
    #le-global svg path {
      fill: currentColor;
      stroke: none !important;
    }
  `;

  const href = location.hostname == "nm.geheimesite.nl"
    ? "https://geheimesite.nl"
    : "https://nm.geheimesite.nl";

  document.head.append(style);
  body.insertAdjacentHTML("afterbegin", `
    <a id="le-global" href="${href}">
      <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 16 16" shape-rendering="crispEdges">
        <path d="M8 2h2v1H8zM6 3h2v1H6zM3 4h2v1H3zM9 4h4v1H9zM15 4h1v1h-1zM1 5h5v1H1zM8 5h7v1H8zM1 6h14v1H1zM1 7h6v1H1zM8 7h6v1H8zM2 8h3v1H2z"></path>
        <path d="M7 2h1v1H7zM8 3h1v1H8zM14 4h1v1h-1zM15 5h1v1h-1z" opacity=".188235"></path>
      </svg>
    </a>
  `);
})();
