<?php

class Home_Controller extends Controller {

    public static function index () {

        echo self::get_layout()->get(array(
            'content' => get_view('home.php')
        ));
    }
}