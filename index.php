<?php

require 'inc/configuration.php';
require 'inc/Slim-2.x/Slim/Slim.php';

\Slim\Slim::registerAutoloader();

$app = new \Slim\Slim();





// GET route
$app->get(
    '/',
    function () {

        require_once("views/index.php");
        
    }
);//END route






$app->get(
    '/videos',
    function () {
        
        require_once("views/videos.php");
        
    }
);//END route






/******** APP RUN ************* */
$app->run();
