import { feedPlugin } from "@11ty/eleventy-plugin-rss";

const metadata = {
  language: "en",
  title: "Robin's Blog",
  subtitle: "Thoughts and opinions of a teenager from the Netherlands.",
  base: "https://geheimesite.nl",
  author: { name: "Robin Boers" }
};

const range = (from, to) => [...Array(to - from + 1).keys()].map(i => i + from);
const currentYear = () => new Date().getFullYear();

export default function (config) {
  config.addGlobalData("blog.title", metadata.title);
  config.addGlobalData("blog.subtitle", metadata.subtitle);
  config.addGlobalData("canonical", metadata.base);
  config.addGlobalData("language", metadata.language);
  config.addGlobalData("layout", "default.njk");
  config.addGlobalData("year", currentYear());
  config.addGlobalData("years", range(2018, currentYear()).reverse());

  // Setup asset pipeline + dev optimizations
  config.addPassthroughCopy({ assets: "/", "src/*.txt": "/" });
  config.setServerPassthroughCopyBehavior("passthrough");

  // My pretty URLs are configured in Apache
  config.addGlobalData("permalink", () => ({ page }) => `${page.filePathStem}.${page.outputFileExtension}`);
  config.addUrlTransform((page) => {
    if (page.url.endsWith(".html")) return page.url.slice(0, -1 * ".html".length);
  });

  // Shortcodes
  config.addShortcode("hr", () => `<hr style="border: none; margin: 2em 0">`);

  // Blocks
  config.addPairedShortcode("container", (innerContent) => {
    return `<div class="container">${innerContent}</div>`;
  });

  // Setup blog section
  config.addCollection("blog", async (collectionApi) => {
    return collectionApi.getFilteredByGlob("src/blog/*.md").map((post) => {
      post.data.layout = "blog"; return post;
    });
  });

  // Setup RSS feeds
  const collection = { name: "blog", limit: 0 };
  config.addPlugin(feedPlugin, { type: "rss", outputPath: "/index.xml", collection, metadata });
  config.addPlugin(feedPlugin, { type: "atom", outputPath: "/atom.xml", collection, metadata });
  config.addPlugin(feedPlugin, { type: "json", outputPath: "/feed.json", collection, metadata });

  // Custom filters
  config.addFilter("date", (date, format = "%Y-%m-%d") => {
    const zeroPad = (num) => String(num).padStart(2, "0");

    const formatMap = {
      "%Y": date.getFullYear(),
      "%m": zeroPad(date.getMonth() + 1),
      "%d": zeroPad(date.getDate()),
      "%H": zeroPad(date.getHours()),
      "%M": zeroPad(date.getMinutes()),
      "%S": zeroPad(date.getSeconds()),
      "%b": date.toLocaleString("en-US", { month: "short" }),
      "%B": date.toLocaleString("en-US", { month: "long" })
    };

    return format.replace(/%[YmdHMSbB]/g, (match) => formatMap[match] || match);
  });

  return {
    dir: {
      input: "src",
      includes: "../inc",
      data: "../data",
      output: "dist",
    },
  };
}
