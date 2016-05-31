<?php

class Ajax_Controller extends Controller {

    public static function sections () {
    	echo json_encode(Sections_model::get());
    }
}