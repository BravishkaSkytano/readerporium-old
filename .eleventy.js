const slugify = require('@sindresorhus/slugify');

module.exports = function (eleventyConfig) {

  eleventyConfig.addPassthroughCopy("src/assets/covers");

  eleventyConfig.addFilter("slugify", slugify);

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