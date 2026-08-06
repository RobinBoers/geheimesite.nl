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
      box-sizing: border-box;
      position: absolute;
      top: 0;
      right: 2rem;
      z-index: 100000;
      width: max-content;
      font: 1.4rem serif;
      text-transform: lowercase;
      padding: 0;
      font-weight: normal;
    }

    #le-global summary {
      box-sizing: border-box;
      display: flex;
      align-items: center;
      gap: 0.6em;
      padding: 0.5em 1em;
      background: black;
      color: white;
      border-radius: 0 0 15px 15px;
      cursor: pointer;
      list-style: none;
      user-select: none;
      font-weight: normal;
    }

    #le-global summary::-webkit-details-marker {
      display: none;
    }

    #le-global summary:after {
      display: none !important;
    }

    #le-global summary svg {
      flex: none;
      fill: currentColor;
      transition: transform 150ms ease;
    }

    #le-global[open] summary svg {
      transform: rotate(180deg);
    }

    #le-dropdown {
      box-sizing: border-box;
      position: absolute;
      top: 100%;
      right: 0;
      display: flex;
      flex-direction: column;
      min-width: 100%;
      padding: 0.5em 0;
      background: light-dark(#ededed, #00000033);;
      border-radius: 15px;
      margin-top: 0.5em;
    }

    #le-global a {
      box-sizing: border-box;
      color: inherit;
      font: inherit;
      text-decoration: none;
      white-space: nowrap;
    }

    #le-dropdown a {
      padding: 0.35em 1em;
    }

    #le-dropdown a:hover,
    #le-dropdown a[aria-current="page"] {
      text-decoration: underline;
      text-decoration-thickness: 0.1em;
      text-underline-offset: 4px;
    }

    #le-dropdown span {
      padding: 0.35em 1em;
      white-space: nowrap;
    }
  `;

  const dropdown = document.createElement("details");
  dropdown.id = "le-global";

  const summary = document.createElement("summary");

  const hostname = document.createElement("span");
  hostname.textContent = location.hostname;

  const icon = document.createElementNS(
    "http://www.w3.org/2000/svg",
    "svg"
  );

  icon.setAttribute("aria-hidden", "true");
  icon.setAttribute("width", "0.75rem");
  icon.setAttribute("height", "0.75rem");
  icon.setAttribute("viewBox", "0 0 20 20");

  const iconPath = document.createElementNS(
    "http://www.w3.org/2000/svg",
    "path"
  );

  iconPath.setAttribute("fill-rule", "evenodd");
  iconPath.setAttribute(
    "d",
    "M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
  );
  iconPath.setAttribute("clip-rule", "evenodd");

  icon.append(iconPath);
  summary.append(hostname, icon);

  const menu = document.createElement("div");
  menu.id = "le-dropdown";

  dropdown.append(summary, menu);

  document.head.append(style);
  body.append(dropdown);

  try {
    const cache_key = "le-global-domains";
    const cache_ttl = 10 * 60 * 1000;
    let domains;

    try {
      const cached = JSON.parse(localStorage.getItem(cache_key));

      if (Array.isArray(cached?.domains) && Date.now() - cached.stored_at < cache_ttl)
        domains = cached.domains;
    } catch {}

    if (!domains) {
      const response = await fetch("https://nm.geheimesite.nl/domains.json");
      if (!response.ok) throw new Error(`HTTP ${response.status}`);

      domains = await response.json();

      try {
        localStorage.setItem(cache_key, JSON.stringify({ domains, stored_at: Date.now() }));
      } catch {}
    }

    for(const domain of domains) {
      const link = document.createElement("a");

      link.href = `https://${domain}`;
      link.textContent = domain;

      if (domain === location.hostname)
        link.setAttribute("aria-current", "page");

      menu.append(link);
    }
  } catch(error) {
    console.error("Could not load domain menu:", error);

    const message = document.createElement("span");
    message.textContent = "could not load domains";

    menu.append(message);
  }

  document.addEventListener("click", event => {
    if (!dropdown.contains(event.target)) {
      dropdown.open = false;
    }
  });
})();