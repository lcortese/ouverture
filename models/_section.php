<?php

class Section_model extends Model {

    public static function get ($id) {

        $id = self::db()->real_escape_string($id);

        $rows = Array();
        $result = self::db()->query('
            SELECT * FROM sections
            WHERE id = '.$id
        );

        $r = $result->fetch_object();

        if (!$r) {
        	return (object)array();
        }

        return $r;
    }
}

?>