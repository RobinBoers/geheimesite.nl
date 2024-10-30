const range = (from, to) => [...Array(to - from + 1).keys()].map(i => i + from);
const currentYear = () => new Date().getFullYear();

export default function (config) {
  config.addGlobalData("year", currentYear());
  config.addGlobalData("years", range(2018, currentYear()).reverse());

  // Setup asset pipeline + dev optimizations
  config.addPassthroughCopy({ assets: "/" });
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
