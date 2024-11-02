<?php

require './vendor/autoload.php';

use DamoFD\MagicForm\Controllers\CandyController;

if ($_SERVER['REQUEST_URI'] === '/') {
    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        $candyController = new CandyController();
        $candyController->index();
    }
}

if ($_SERVER['REQUEST_URI'] === '/create') {
    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        $candyController = new CandyController();
        $candyController->create();
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $candyController = new CandyController();
        $candyController->store();
    }
}

$url = $_SERVER['REQUEST_URI'];
$arr = explode('/', $url);

if (isset($arr[2])) {
    $id = $arr[2];
    $candyController = new CandyController();
    $candyController->show($id);
}

?>
