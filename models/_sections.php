<?php

class Sections_model extends Model {

    public static function get () {

        $rows = Array();
        $result = self::db()->query('
            SELECT id, title FROM sections
            ORDER BY weight ASC
        ');

        while($row = $result->fetch_object()) {
            $rows[] = $row;
        }

        return $rows;
    }
}

?>