<?php

class Home_Controller extends Controller {

    public static function index () {

        echo self::Layout()->get(array(
            'title' => 'Home',
            'content' => get_view('home.php')
        ));
    }
}