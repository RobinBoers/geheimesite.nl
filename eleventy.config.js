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

  return {
    dir: {
      input: "src",
      includes: "../inc",
      data: "../data",
      output: "dist",
    },
  };
}
