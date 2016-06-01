<?php

class Ajax_Controller extends Controller {

    public static function sections () {
        echo json_encode(Sections_model::get());
    }

    public static function section ($id) {
        echo json_encode(Section_model::get($id));
    }
}