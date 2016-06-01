<?php

class Ajax_Controller extends Controller {

    public static function sections () {
        echo json_encode(array(
            'results' => Sections_model::get()
        ));
    }

    public static function section ($id) {

    	$result = Section_model::get($id);

    	if(!isset($result->id)) {
    		http_response_code(404);
    	}

        echo json_encode(array(
            'data' => $result
        ));
    }
}