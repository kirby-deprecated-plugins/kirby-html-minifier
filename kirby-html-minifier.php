<?php
namespace KirbyMinifier;

use c;
use str;
use Kirby\Component\Response;
use Minify_HTML;

require __DIR__ . DS . 'mclay-minify' . DS . 'HTML.php';

class Minifier extends Response {
	public function make($response) {
		$buffer = parent::make( $response );

		if(empty($buffer)) return '';
		if(!c::get('plugin.html.minifier.active', true)) return $buffer;
		if(!$this->minifierAllowed()) return $buffer;

		return Minify_HTML::minify($buffer, c::get('plugin.html.minifier.options', []));
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