<?php
include __DIR__ . '/tiny-html-minifier/tiny-html-minifier.php';
include __DIR__ . '/lib/core.php';

if(option('jenstornell.kirby-html-minifier.active')) {
	Kirby::plugin('jenstornell/kirby-html-minifier', [
		'components' => [
			'response' => function ($kirby, $output) {
				return HtmlMinifier::minify($output);
			}
		]
	]);
}