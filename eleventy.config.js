import { feedPlugin } from "@11ty/eleventy-plugin-rss";
import { eleventyImageTransformPlugin } from "@11ty/eleventy-img";

import path from "node:path";
import prettier from "prettier";

const metadata = {
  language: "en",
  title: "Robin's Blog",
  subtitle: "Thoughts and opinions of a teenager from the Netherlands.",
  base: "https://geheimesite.nl",
  author: { name: "Robin Boers" },
};

const range = (from, to) => [...Array(to - from + 1).keys()].map(i => i + from);
const currentYear = new Date().getFullYear();

export default function (config) {
  config.addGlobalData("blog.title", metadata.title);
  config.addGlobalData("blog.subtitle", metadata.subtitle);
  config.addGlobalData("canonical", metadata.base);
  config.addGlobalData("language", metadata.language);
  config.addGlobalData("layout", "default.njk");
  config.addGlobalData("year", currentYear);
  config.addGlobalData("years", range(2018, currentYear).reverse());

  // Setup asset pipeline + dev optimizations
  config.addPassthroughCopy({ "assets": "/", "src/*.txt": "/", ".htaccess": "/.htaccess" });
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

  // Image optimizations
  config.addPlugin(eleventyImageTransformPlugin, {
    extensions: "html",
    formats: ["webp", "jpeg", "svg"],
    urlPath: "/optimized/",
    defaultAttributes: {
      loading: "lazy",
      decoding: "async",
    },
  });

  // Smartypants!!
  // Turned off, because it's mega inconsistent on where the stuff is smartified.
  //config.amendLibrary("md", (md) => md.set({ typographer: true }));

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
      "%B": date.toLocaleString("en-US", { month: "long" }),
    };

    return format.replace(/%[YmdHMSbB]/g, (match) => formatMap[match] || match);
  });

  config.addFilter("mdash", text => text.replace(/--(?!>)(?!--)/g, "&mdash;"));
  config.addFilter("shortc", text => text
      .replace(/\(TM\)/g, "™")
      .replace(/\(c\)/g, "©")
      .replace(/:back:/g, "←")
      .replace(/:go:/g, "→")
      .replace(/:x:/g, "×")
      .replace(/:love:/g, "♡")
      .replace(/:hot:/g, "🔥")
      .replace(/:sparkles:/g, "✨")
      .replace(/:rocket:/g, "🚀")
      .replace(/:email:/g, "✉️")
      .replace(/:video:/g, "📺")
      .replace(/:audio:/g, "🎙️")
      .replace(/:shrug:/g, "¯\\_(ツ)_/¯")
      .replace(/:dancing:/g, "ᕕ( ᐛ )ᕗ")
      .replace(/:fight:/g, "(ง'̀-'́)ง")
      .replace(/:flex:/g, "ᕦ(•̀‿•́ )ᕤ")
      .replace(/:happy:/g, "(✿◠‿◠)")
      .replace(/:cute:/g, "٩(｡•́‿•̀｡)۶"));

  // Format HTML before spitting it out
  config.addTransform("prettier", function (content, outputPath) {
    const extension = path.extname(outputPath);

    switch (extension) {
      case ".html":
      case ".json":
        // Strip leading period from extension and use as the Prettier parser.
        const parser = extension.replace(/^./, "");
        return prettier.format(content, { parser });

      default: 
        return content;
    }
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
