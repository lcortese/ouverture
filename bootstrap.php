<?php

include dirname(__FILE__).'/libraries/classes.php';
include dirname(__FILE__).'/controllers/classes.php';
include dirname(__FILE__).'/models/classes.php';


/*
 * Router
 */

Router::map('GET', '/', function() {
    Home_Controller::index();
});

Router::map('GET', 'ajax/sections', function() {
    Ajax_Controller::sections();
});

Router::map('GET', 'ajax/section/[i:id]', function($id) {
    Ajax_Controller::section($id);
});

if (!Router::run()) {
    Controller::not_found();
}

?>