<?php

class Section_model extends Model {

    public static function get ($id) {

        $id = self::db()->real_escape_string($id);

        $rows = Array();
        $result = self::db()->query('
            SELECT * FROM sections
            WHERE id = '.$id
        );

        return $result->fetch_object();
    }
}

?>