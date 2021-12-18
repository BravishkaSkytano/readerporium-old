const slugify = require('@sindresorhus/slugify');

function sortByOrder(values) {
  let vals = [...values];     // this *seems* to prevent collection mutation...
  return vals.sort((a, b) => Math.sign(a.order - b.order));
}

module.exports = function (eleventyConfig) {

  eleventyConfig.addPassthroughCopy("src/assets");

  eleventyConfig.addFilter("slugify", slugify);
  eleventyConfig.addFilter("strip_html", (book) => {
    const content = book.replace(/(<([^>]+)>)/gi, "");
    return content;
  });
  eleventyConfig.addFilter('sortByOrder', sortByOrder)

  return {
    htmlTemplateEngine: "njk",
    dir: {
      input: 'src',
      includes: '_includes',
      data: '_data',
      output: 'dist',
    },
  };
};