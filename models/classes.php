<?php

class Model {

    private static $Db;

    protected static function Db () {

      if (!self::$Db) {

        $env = include dirname(__FILE__).'/../.env.php';
        self::$Db = new Db($env['db_host'], $env['db_user'], $env['db_pass'], $env['db_name']);
      }

      return self::$Db;
    }
}

include dirname(__FILE__).'/_sections.php';

?>