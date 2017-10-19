# Kirby Html Minifier

*Version 0.4*

![Version 0.4](https://img.shields.io/badge/version-0.3-blue.svg) ![MIT license](https://img.shields.io/badge/license-MIT-green.svg) [![Donate](https://img.shields.io/badge/give-donation-yellow.svg)](https://www.paypal.me/DevoneraAB)

Compress/minify the html output of a site built with Kirby CMS.

## Installation

Use one of the alternatives below.

### 1. Kirby CLI

If you are using the [Kirby CLI](https://github.com/getkirby/cli) you can install this plugin by running the following commands in your shell:

```text
$ cd path/to/kirby
$ kirby plugin:install jenstornell/kirby-html-minifier
```

### 2. Clone or download

1. [Clone](https://github.com/jenstornell/kirby-html-minifier.git) or [download](https://github.com/jenstornell/kirby-html-minifier/archive/master.zip)  this repository.
2. Unzip the archive if needed and rename the folder to `kirby-html-minifier`.

**Make sure that the plugin folder structure looks like this:**

```text
site/plugins/kirby-html-minifier/
```

### 3. Git Submodule

If you know your way around Git, you can download this plugin as a submodule:

```text
$ cd path/to/kirby
$ git submodule add https://github.com/jenstornell/kirby-html-minifier site/plugins/kirby-html-minifier
```

When the plugin is successfully installed, your html code should be minified.

## Options

```php
c::set('plugin.html.minifier.active', true);
c::get('plugin.html.minifier.options',[]);
c::get('plugin.html.minifier.blacklist', []);
```

## active

It's active by default but it's possible to turn it off. It's especially useful with [multi environmental setup](https://getkirby.com/docs/developer-guide/configuration/options#multi-environment-setup).

```php
c::set('plugin.html.minifier.active', true);
```

## options
If you are a hardcore user you can use the options of the `Minify_HTML` class.

```php
c::get('plugin.html.minifier.options', []);
```

Read about the options in the [code](https://github.com/mrclay/minify/blob/master/lib/Minify/HTML.php#L69).

## blacklist

You can disable pages from being minified by adding page id(s) as a string or an array. Every child to that page will be disabled as well.

**Example**

```php
c::get('plugin.html.minifier.blacklist', ['about', 'projects']);
```

## Changelog

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

## Troubleshooting

If it does not work, make sure you don't have some cache activated. 

## Requirements

- [**Kirby**](https://getkirby.com/) 2.3 beta 2

## Disclaimer

This plugin is provided "as is" with no guarantee. Use it at your own risk and always test it yourself before using it in a production environment. If you find any issues, please [create a new issue](https://github.com/jenstornell/kirby-html-minifier/issues/new).

## License

[MIT](https://opensource.org/licenses/MIT)

It is discouraged to use this plugin in any project that promotes racism, sexism, homophobia, animal abuse, violence or any other form of hate speech.

## Donate

If you want to make a donation, you can do that by sending any amount https://www.paypal.me/DevoneraAB

## Credits

- [Jens Törnell](https://github.com/jenstornell)
- [@ian-cox](https://github.com/ian-cox) for inspiration from the plugin [Kirby MinifyHTML](https://github.com/ian-cox/Kirby-MinifyHTML).
- [@lukasbestle](https://github.com/lukasbestle) for all the improvements.