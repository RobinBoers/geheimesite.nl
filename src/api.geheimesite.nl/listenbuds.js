const ENDPOINT = "https://api.geheimesite.nl/listenbuds";

let none = { recent_listens: [] };

let stored = localStorage.getItem("listen-data");
let data = stored ? JSON.parse(stored) : none;

let pulling = false;
let watcher;

const container = document.querySelector("#listenbuds");

async function pullListens() {
  pulling = true;

  const response = await fetch(ENDPOINT);

  if (response.status >= 400) data = none;
  else data = await response.json();

  renderListens();
  saveListens();

  pulling = false;
}

function saveListens() {
  localStorage.setItem("listen-data", JSON.stringify(data));
}

function renderListens() {
  if (!data.recent_listens || data.recent_listens.length == 0) {
    container.innerHTML = '<div class="empty">No recent listens found.</div>';
    return;
  }

  container.innerHTML = `
    <div class="lb-section lb-recents">
      <h3>Recent listens</h3>
      ${renderRecentListens()}
    </div>

    <div class="lb-section lb-top-artists">
      <h3>Top artists</h3>
      ${renderTopArtists()}
    </div>
  `;
}


function renderTopArtists() {
  if (!data.top_artists || data.top_artists.length == 0) return '<div class="empty">No artist data available.</div>';

  return `
    <div class="lb-row">
      ${data.top_artists.map((artist, index) => `
        <div class="lb-card lb-artist">
          <div class="lb-rank">${index + 1}</div>
          <img src="${artist.profile_picture}" alt="" />
          <div class="lb-info">
            <div class="title">${artist.name}</div>
            <div class="subtitle">${artist.listen_count} plays</div>
          </div>
        </div>
      `).join('')}
    </div>
  `;
}

function renderRecentListens() {
  return data.recent_listens.map(listen => {
    const timeAgo = formatTimeAgo(listen.listened_ts);
    const artists = listen.artists.join(', ');
    
    return `
      <div class="lb-listen">
        <div class="lb-song">
          <cite class="track">${listen.track}</cite>
          ${!are_equal(listen.track, listen.album) ? `<cite class="album">${listen.album}</cite>` : ''}
          <span class="artists">${artists}</span>
        </div>
        <div class="lb-meta">
          <span class="lb-time">${timeAgo}</span>
          ${listen.url ? `<a href="${listen.url}" class="lb-button" target="_blank" rel="noopener">♫</a>` : ''}
        </div>
      </div>
    `;
  }).join('');
}

function are_equal(n1, n2) {
  return normalize(n1) == normalize(n2);
}

function normalize(str) {
  if(!str) return "";

  return str.normalize("NFKC")        // normalize Unicode
    .replace(/[^\w\s]/g, "")          // strips all punctuation  
    .replace(/\s+/g, " ")             // collapses multiple spaces into one  
    .trim()
    .toLowerCase();
}

function formatTimeAgo(timestamp) {
  const now = Date.now() / 1000;
  const diff = now - timestamp;
  
  if (diff < 60) return 'just now';
  if (diff < 3600) return `${Math.floor(diff / 60)}m ago`;
  if (diff < 86400) return `${Math.floor(diff / 3600)}h ago`;
  if (diff < 2592000) return `${Math.floor(diff / 86400)}d ago`;
  return new Date(timestamp * 1000).toLocaleDateString();
}

if (stored) renderListens();
pullListens();
