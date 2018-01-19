<?php
namespace KirbyMinifier;

use c;
use str;
use Kirby\Component\Response;
use TinyMinify;

require __DIR__ . DS . 'tiny-html-minifier' . DS . 'tiny-html-minifier.php';

class Minifier extends Response {
	public function make($response) {

        $response_format = $response->format();
        if($response_format == 'js' || $response_format == 'css') {
            return $response;
        }

		$html = parent::make( $response );

		if(empty($html)) return '';
		if(!c::get('plugin.html.minifier.active', true)) return $html;
		if(!$this->minifierAllowed()) return $html;
		
		return TinyMinify::html($html, c::get('plugin.html.minifier.options', []));
	}

	public function minifierAllowed() {
		$parents = c::get('plugin.html.minifier.blacklist', []);
		$parents = (is_string($parents)) ? [$parents] : $parents;
		$page_id = page()->id();
		foreach($parents as $parent) {
			if(str::startsWith($page_id, $parent . '/') || $parent == $page_id) {
				return false;
			}
		}
		return true;
	}
}

$kirby->set('component', 'response', 'KirbyMinifier\Minifier');