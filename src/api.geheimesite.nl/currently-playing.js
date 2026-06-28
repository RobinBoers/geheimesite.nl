const ENDPOINT = "https://api.geheimesite.nl/currently-playing";
const FPS = 100;

let none = { playing: false };

let stored = localStorage.getItem("song-data");
let data = stored ? JSON.parse(stored) : none;

let pulling = false;
let watcher;

const song = document.querySelector("#song");
const progress = document.querySelector("#progress");

async function pullSong() {
  pulling = true;

  const response = await fetch(ENDPOINT);

  if (response.status >= 400) data = none;
  else data = await response.json();

  loadSong();
  saveProgress();

  pulling = false;
}

function loadSong() {
  if (watcher) window.clearInterval(watcher);
  if (data.playing) mountWatcher();

  renderSong();
}

function mountWatcher() {
  watcher = window.setInterval(() => {
    data.progress += FPS;
    saveProgress();

    renderSong();

    let finished = data.progress > data.duration;
    if (finished && !pulling) pullSong();
  }, FPS);
}

function saveProgress() {
  localStorage.setItem("song-data", JSON.stringify(data));
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

function renderSong() {
  if (data.playing) {
    if (are_equal(data.track, data.album)) {
      song.innerHTML = `
        <cite class="track">${data.track}</cite> 
        by <span class="artists">${data.artists.join(", ")}</span>
      `;
    } else {
      song.innerHTML = `
        <cite class="track">${data.track}</cite> 
        from <cite class="album">${data.album}</cite> 
        by <span class="artists">${data.artists.join(", ")}</span>
      `;
    }

    song.className = "playing";
    progress.innerText = `${fmtTime(data.progress)}/${fmtTime(data.duration)}`;
  } else {
    song.innerText = "Not playing anything right now.";
    song.className = "";
    progress.innerText = "";
  }
}

function fmtTime(ms) {
  const totalSeconds = Math.floor(ms / 1000);
  const minutes = Math.floor(totalSeconds / 60);
  const seconds = totalSeconds % 60;
  const formattedSeconds = seconds < 10 ? `0${seconds}` : seconds;
  return `${minutes}:${formattedSeconds}`;
}

// Kickstart the player.
if (stored) loadSong();
pullSong();

// If something gets stuck this should correct it.
window.setInterval(() => {
  if (!pulling) pullSong();
}, 15000);
