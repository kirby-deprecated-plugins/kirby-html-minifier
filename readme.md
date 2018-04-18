# Kirby Html Minifier

![Version 0.8](https://img.shields.io/badge/version-0.7-blue.svg) ![MIT license](https://img.shields.io/badge/license-MIT-green.svg) [![Donate](https://img.shields.io/badge/give-donation-yellow.svg)](https://www.paypal.me/DevoneraAB)

Compress/minify the html output of a site built with Kirby CMS.

1. [Install the plugin](docs/installation.md) and it should work out of the box.
1. [Options](docs/options.md) are also available.

## Minified starterkit

Here is an example of the starterkit home page minified:

```html
<!doctype html><html lang="en"><head><meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1.0"><title>Kirby Starterkit | Home</title><meta name="description" content="This is Kirby's Starterkit."><link rel="stylesheet" href="http://localhost/plugins/kirby-html-minifier/assets/css/index.css"></head><body><header class="header wrap wide" role="banner"> <div class="grid"> <div class="branding column"> <a href="http://localhost/plugins/kirby-html-minifier" rel="home">Kirby Starterkit</a> </div> <nav class="navigation column" role="navigation"> <ul class="menu"> <li class="menu-item"> <a href="http://localhost/plugins/kirby-html-minifier/projects">Projects</a> </li> <li class="menu-item"> <a href="http://localhost/plugins/kirby-html-minifier/blog">Blog</a> </li> <li class="menu-item"> <a href="http://localhost/plugins/kirby-html-minifier/about">About</a> </li> <li class="menu-item"> <a href="http://localhost/plugins/kirby-html-minifier/contact">Contact</a> </li> </ul> </nav> </div> </header> <main class="main" role="main"> <header class="wrap"> <h1>Home</h1> <div class="intro text"> <p>Yay! If you are seeing this, the installation of Kirby worked. :-)</p> </div> <hr /> </header> <div class="text wrap"> <h2>Get started</h2> <ul> <li>Go to the <a href="http://localhost/plugins/kirby-html-minifier/panel">Panel</a> to give Kirby's admin interface a try</li> <li>Check out the <a href="http://getkirby.com/docs">docs</a> and start building your own site</li> <li>Follow <a href="https://twitter.com/getkirby">@getkirby</a> on Twitter for updates</li> <li>Visit the <a href="http://forum.getkirby.com">forum</a> to connect with other Kirby users</li> <li>Sign up to <a href="https://getkirby.com/#kosmos">Kirby Kosmos</a>, our monthly newsletter</li> <li><a href="http://getkirby.com/support">Get in contact</a> if you need support.</li> </ul> <p><strong>Have fun with Kirby!</strong></p> </div> <section class="projects-section"> <div class="wrap wide"> <h2>Latest Projects</h2> <ul class="showcase grid gutter-1"> <li class="showcase-item column"> <a href="http://localhost/plugins/kirby-html-minifier/projects/project-a" class="showcase-link"> <img src="http://localhost/plugins/kirby-html-minifier/thumbs/projects/project-a/creative-tools-600x600.jpg" alt="Thumbnail for Project A" class="showcase-image" /> <div class="showcase-caption"> <h3 class="showcase-title">Project A</h3> </div> </a> </li> <li class="showcase-item column"> <a href="http://localhost/plugins/kirby-html-minifier/projects/project-b" class="showcase-link"> <img src="http://localhost/plugins/kirby-html-minifier/thumbs/projects/project-b/room-600x600.jpg" alt="Thumbnail for Project B" class="showcase-image" /> <div class="showcase-caption"> <h3 class="showcase-title">Project B</h3> </div> </a> </li> <li class="showcase-item column"> <a href="http://localhost/plugins/kirby-html-minifier/projects/project-c" class="showcase-link"> <img src="http://localhost/plugins/kirby-html-minifier/thumbs/projects/project-c/camera-600x600.jpg" alt="Thumbnail for Project C" class="showcase-image" /> <div class="showcase-caption"> <h3 class="showcase-title">Project C</h3> </div> </a> </li> </ul> <p class="projects-section-more"><a href="http://localhost/plugins/kirby-html-minifier/projects" class="btn">show all projects &hellip;</a></p> </div> </section> </main> <footer class="footer cf" role="contentinfo"> <div class="wrap wide"> <p class="footer-copyright">© 2009–2017 The Kirby Team</p> <P class="footer-madewithkirby"> <a href="http://getkirby.com/made-with-kirby-and-love">Made with Kirby and <b class="heart">♥</b></a> </p> </div> </footer> </body></html>
```

## Changelog

[Changelog](docs/changelog.md)

## Troubleshooting

If it does not work, make sure you don't have some cache activated. 

## Requirements

- [**Kirby**](https://getkirby.com/) 2.5.5

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
- [@gearsdigital](https://github.com/gearsdigital) for the blacklisted response formats.