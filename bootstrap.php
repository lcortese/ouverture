<?php

include dirname(__FILE__).'/libraries/classes.php';
include dirname(__FILE__).'/controllers/classes.php';
include dirname(__FILE__).'/models/classes.php';

$path = isset($_GET['_p']) ? $_GET['_p'] : '';


/*
 * Router
 */

switch ($path) {
    case '':
        Home_Controller::index();
    break;

    case 'ajax/sections':
        Ajax_Controller::sections();
    break;

    default:
        Controller::not_found();
    break;
}

?>