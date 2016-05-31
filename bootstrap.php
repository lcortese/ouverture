<?php

include dirname(__FILE__).'/libraries/classes.php';
include dirname(__FILE__).'/controllers/classes.php';

$path = isset($_GET['_p']) ? $_GET['_p'] : '';

switch ($path) {
    case '':
        Home_Controller::index();
    break;
    
    default:
        Controller::not_found();
    break;
}

?>