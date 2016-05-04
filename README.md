# Kirby Html Minifier

*Version 0.2*

This plugin uses the `response` component. That means no output buffer is needed.

## Installation

1. Add `html-minifier` folder into `site/plugins/`.
1. All your pagees should now have minified html output.

## Options

### Active

It's active by default but it's possible to turn it off.

```php
c::set('plugin.html.minifier.active', true));
```

### Options

If you are a hardcore user you can use the options of the `Minify_HTML` class.

```php
c::get('plugin.html.minifier.options', array());
```

Read about the options in the [code](https://github.com/mrclay/minify/blob/2.x/min/lib/Minify/HTML.php) somewhere around line 50.

## Changelog

- **0.2** - Added namespaces. Inherit response from parent. Added options.
- **0.1** - Init
 
## Troubleshooting

If it does not work, make sure you don't have some cache activated. 

## Requirements

Kirby 2.3 beta 2

## Special thanks to

- [@ian-cox](https://github.com/ian-cox) for inspiration from the plugin [Kirby MinifyHTML](https://github.com/ian-cox/Kirby-MinifyHTML).
- [@lukasbestle](https://github.com/lukasbestle) for all the improvements.