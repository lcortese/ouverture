<?php

class Home_Controller extends Controller {

    public static function index () {

    	$data = array(
    		'sections' => Sections_model::get()
    	);

        echo self::Layout()->get(array(
            'title' => 'Home',
            'content' => get_view('home.php', $data)
        ));
    }
}