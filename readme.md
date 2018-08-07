# Kirby Html Minifier

Minify your html output. It's build upon [Tiny HTML Minifier](https://github.com/jenstornell/tiny-html-minifier).

- **Version:** 0.9 beta
- **Requirement:** Kirby 3
- [Changelog](docs/changelog.md)
- [Disclaimer](https://devonera.se/docs/disclaimer/?user=jenstornell&plugin=kirby-html-minifier)
- [Donate](https://devonera.se/docs/donate/?user=jenstornell&plugin=kirby-html-minifier)

## Options

To prevent collisions with other plugins, you need to setup the hook yourself, but it's super simple.

```php
return [
  'hooks' => [
    'route:after' => function($route, $path, $method, $result) {
      HtmlMinifier::minify($result);
    }
  ]
];
```

## Credits

- [Jens Törnell](https://github.com/jenstornell)
- [@ian-cox](https://github.com/ian-cox) for inspiration from the plugin [Kirby MinifyHTML](https://github.com/ian-cox/Kirby-MinifyHTML).
- [@lukasbestle](https://github.com/lukasbestle) for all the improvements.
- [@gearsdigital](https://github.com/gearsdigital) for the blacklisted response formats.