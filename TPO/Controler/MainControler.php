<?php

require_once("Model/tdJson.php");
//require_once("model/User.php");
require_once("ViewHelper.php");

class BowlController {

    public static function index() {
        ViewHelper::render("view/td-list.php", [
            "games" => tdJason::getDatafromApi(), 
            //"loggedIn" => User::isLoggedIn()
        ]);
    }

}