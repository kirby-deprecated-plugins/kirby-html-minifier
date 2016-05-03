# Kirby Html Minifier

***Output buffer free html minification***

Inspired by [Kirby MinifyHTML](https://github.com/ian-cox/Kirby-MinifyHTML) by [@ian-cox](https://github.com/ian-cox).

## Why another html minifier?

This plugin uses the `response` component. That means no output buffer is needed.

## Installation

1. Add `html-minifier` folder into `site/plugins/`.
1. All your pagees should now have minified html output.

## Options

It's active by default but it's possible to turn it off.

```php
c::set('plugin.html.minifier.active', true) );
```
 
## Troubleshooting

If it does not work, make sure you don't have some cache activated. 

## Requirements

Kirby 2.3 beta 2