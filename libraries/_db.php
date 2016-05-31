<?php

/*
 * Just wrap 'mysqli'
 */
class Db extends mysqli {

    public function Db ($host, $user, $pass, $name) {

        parent::__construct($host, $user, $pass, $name);
        $this->set_charset('utf8');
    }
}

?>