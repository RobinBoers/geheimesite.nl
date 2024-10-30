import EleventyFetch from "@11ty/eleventy-fetch";

const color = "f43f5e";
const endpoint = "https://git.dupunkto.org/api/graph";
const year = new Date().getFullYear();

const fetchSVG = async (mode) => {
  return EleventyFetch(`${endpoint}/${year}?c=${color}&m=${mode}`, 
    { duration: "1d", type: "text" });
};

const toDataURL = (svg) => {
  return `data:image/svg+xml;base64,${btoa(svg)}`
}

export async function dark_svg() {
	return await fetchSVG("dark");
};

export async function light_svg() {
	return await fetchSVG("light");
};

export async function dark_href() {
  return toDataURL(await dark_svg());
};

export async function light_href() {
  return toDataURL(await light_svg());
}
