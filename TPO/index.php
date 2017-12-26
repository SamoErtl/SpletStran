<?php

session_start();

//require_once("controller/UserController.php");
require_once("Controler/MainControler.php");

define("BASE_URL", $_SERVER["SCRIPT_NAME"] . "/");
//define("IMAGES_URL", rtrim($_SERVER["SCRIPT_NAME"], "index.php") . "static/images/");
define("CSS_URL", rtrim($_SERVER["SCRIPT_NAME"], "index.php") . "static/css/");

$path = isset($_SERVER["PATH_INFO"]) ? trim($_SERVER["PATH_INFO"], "/") : "";

$urls = [
    "td" => function () {
        MainController::index();
    },
    "td/all" => function () {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            MainController::add();
        } else {
            MainController::addForm();
        }
    },
    "" => function () {
        ViewHelper::redirect(BASE_URL . "td");
    },
];


try {
    if (isset($urls[$path])) {
       $urls[$path]();
    } else {
        echo "No controller for '$path'";
    }
} catch (Exception $e) {
    echo "An error occurred: <pre>$e</pre>";
    //ViewHelper::error404();
} 