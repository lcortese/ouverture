<?php

class Controller {

    private static $Layout;

    protected static function get_layout () {

      if (!self::$Layout) {

        $base = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http';
        $base.= '://'.$_SERVER['SERVER_NAME'];

        $dir = $_SERVER['REQUEST_URI'];

        if (isset($_GET['_p'])) {
            $dir = str_replace($_GET['_p'], null, $dir);
        }

        $base.= $dir;

        if (substr($base, -1) != '/') {
            $base.= '/';
        }

        self::$Layout = new View('layout.php', array(
            'base' => $base
        ));
      }

      return self::$Layout;
    }

    public static function not_found () {

        http_response_code(404);

        echo self::get_layout()->get(array(
            'title' => 'Not Found',
            'content' => get_view('not_found.php')
        ));
    }
}

include dirname(__FILE__).'/_home.php';