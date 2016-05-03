<?php
include __DIR__ . DS . 'minify' . DS . 'HTML.php';

class HtmlMinifier extends Kirby\Component\Response {
	public function make($response) {
		if(is_string($response)) {
			$buffer = $this->kirby->render(page($response));
		} else if(is_array($response)) {
			$buffer = $this->kirby->render(page($response[0]), $response[1]);
		} else if(is_a($response, 'Page')) {
			$buffer = $this->kirby->render($response);      
		} else if(is_a($response, 'Response')) {
			$buffer = $response;
		} else {
			return null;
		}
		if( c::get('plugin.html.minifier.active', true) ) {
			return Minify_HTML::minify( $buffer );
		}
		return $buffer;
	}
}

$kirby->set('component', 'response', 'HtmlMinifier');