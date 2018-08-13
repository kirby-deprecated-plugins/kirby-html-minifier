<?php
class HtmlMinifier {
    public static function minify($result) {
			if(!isset($result)) return;
			if(!self::allowedType($result)) return;
        return new Response(TinyMinify::html(self::toHtml($result)), 'text/html');
	}
	
	private static function allowedType($result) {
		if(property_exists($result, 'type') && $result->type() != 'text/html') return;
		return true;
	}

	private static function toHtml($result) {
		return (property_exists($result, 'content')) ? $result->render() : $result->body();
	}
}