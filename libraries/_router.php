<?php

include dirname(__FILE__).'/vendor/AltoRouter.php';

/*
 * Wrapp AltoRouter into a static class
 */

class Router {

    private static $AltoRouter;
    private static $path;

    private static function AltoRouter () {

        if (!self::$AltoRouter) {
            self::$AltoRouter = new AltoRouter();
            self::$path = isset($_GET['_p']) ? $_GET['_p'] : '/';
        }

        return self::$AltoRouter;
    }

    public static function __callStatic($name, $arguments) {

        return call_user_func_array(
            array(self::AltoRouter(), $name),
            $arguments
        );
    }

    public static function run () {

        $match = self::AltoRouter()->match(self::$path);

        if ($match) {
            call_user_func_array($match['target'], $match['params']);
        }

        return $match;
    }
}
