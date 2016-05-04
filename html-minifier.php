<?php
namespace JensTornell;

use C;
use Kirby\Component\Response;
use Minify_HTML;

include __DIR__ . DS . 'minify' . DS . 'HTML.php';

class HtmlMinifier extends Response {
	public function make($response) {
		$buffer = parent::make( $response );
		if( $buffer && c::get('plugin.html.minifier.active', true) ) {
			return Minify_HTML::minify( $buffer, c::get('plugin.html.minifier.options', array()) );
		}
		return $buffer;
	}
}

$kirby->set('component', 'response', 'JensTornell\HtmlMinifier');