<?php

class Sections_model extends Model {

    public static function get () {

        $rows = Array();
        $result = self::db()->query('
            SELECT * FROM sections
        ');

        while($row = $result->fetch_object()) {
            $rows[] = $row;
        }

        return $rows;
    }
}

?>