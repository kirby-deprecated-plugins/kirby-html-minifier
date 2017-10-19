# Options

```php
c::set('plugin.html.minifier.active', true);
c::get('plugin.html.minifier.options',[]);
c::get('plugin.html.minifier.blacklist', []);
```

### active

It's active by default but it's possible to turn it off. It's especially useful with [multi environmental setup](https://getkirby.com/docs/developer-guide/configuration/options#multi-environment-setup).

```php
c::set('plugin.html.minifier.active', true);
```

### options
If you are a hardcore user you can use the options of the `Minify_HTML` class.

```php
c::get('plugin.html.minifier.options', []);
```

Read about the options in the [code](https://github.com/mrclay/minify/blob/master/lib/Minify/HTML.php#L69).

### blacklist

You can disable pages from being minified by adding page id(s) as a string or an array. Every child to that page will be disabled as well.

**Example**

```php
c::get('plugin.html.minifier.blacklist', ['about', 'projects']);
```