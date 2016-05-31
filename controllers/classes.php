<?php

class Controller {

    private static $Layout;

    protected static function get_layout () {

      if (!self::$Layout) {

        self::$Layout = new View('layout.php', array(
            'base' => 'http://localhost'
        ));
      }

      return self::$Layout;
    }

    public static function not_found () {

        http_response_code(404);

        self::get_layout()->set_data(array(
            'base' => 'culo'
        ));

        echo self::get_layout()->get(array(
            'content' => get_view('not_found.php')
        ));
    }
}

include dirname(__FILE__).'/_home.php';