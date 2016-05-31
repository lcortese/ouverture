<?php

class Controller {

	public function Controller () {}

	public static function not_found () {

		http_response_code(404);
		echo 'Not found';
	}
}

include dirname(__FILE__).'/_home.php';