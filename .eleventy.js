const slugify = require('@sindresorhus/slugify');

module.exports = function (eleventyConfig) {

  eleventyConfig.addPassthroughCopy("src/assets/covers");
  eleventyConfig.addPassthroughCopy("src/assets/*.js")

  eleventyConfig.addFilter("slugify", slugify);
  eleventyConfig.addFilter("strip_html", (book) => {
    const content = book.replace(/(<([^>]+)>)/gi, "");
    return content;
  });

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