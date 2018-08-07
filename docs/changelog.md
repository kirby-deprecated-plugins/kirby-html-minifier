# Changelog

**0.9 beta**

- Kirby 3 required
- Uses the hook route:after which needs to be set in the config file
- Added support for routes
- Disallows all files that does not have text/html

**0.8**

- Updated [tiny-html-minifier](https://github.com/jenstornell/tiny-html-minifier) to version 2.0 which solves some bugs reported.

**0.7**

- Prevent processing of blacklisted response formats. By default it does not minify CSS and JS. Special thanks to @gearsdigital for the pull request.

**0.6**

- Updated [tiny-html-minifier](https://github.com/jenstornell/tiny-html-minifier) to version 1.2.

**0.5**

- Wrote an own [tiny-html-minifier](https://github.com/jenstornell/tiny-html-minifier) class to get complete control.
- Changed to my new minifier class.
- Option `plugin.html.minifier.options` is still present, but work a bit different.

**0.4**

- Changed minifier engine back to [mrclay/minify](https://github.com/mrclay/minify) because of minify problems.
- Made a minor edit to prevent breaking inside tags.
- Tested SVG files with good result.
- Option `plugin.html.minifier.options` added back.
- Option `plugin.html.minifier.blacklist` added.

**0.3**

- Changed minifier engine to [zaininnari/html-minifier](https://github.com/zaininnari/html-minifier).
- The issue with breaking tags is fixed with the new minifier engine.
- Added a fix for package.json.
- Removed option `plugin.html.minifier.options` because of the new minifier engine.

**0.2**

- Added namespaces.
- Inherit response from parent.
- Added options.

**0.1**

- Inititial release