<?php
namespace JensTornell;

use C;
use Kirby\Component\Response;
use zz\Html\HTMLMinify;

$path = __DIR__ . DS . 'HTMLMinify' . DS;

require_once $path . 'HTMLNames.php';
require_once $path . 'HTMLToken.php';
require_once $path . 'HTMLTokenizer.php';
require_once $path . 'SegmentedString.php';
require_once $path . 'HTMLMinify.php';

class HtmlMinifier extends Response {
	public function make($response) {
		$buffer = parent::make( $response );
		
		if($buffer && c::get('plugin.html.minifier.active', true)) {
			return HTMLMinify::minify($buffer);
		}
		return $buffer;
	}
}

$kirby->set('component', 'response', 'JensTornell\HtmlMinifier');