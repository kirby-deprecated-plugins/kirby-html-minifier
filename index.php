<?php
include __DIR__ . '/tiny-html-minifier/tiny-html-minifier.php';

class HtmlMinifier {
    public static function minify($result) {
        if(!isset($result) || !property_exists($result, 'content')) return;

        $minified = TinyMinify::html($result->render());
        
        echo new Response($minified, 'text/html'); die;
    }
}