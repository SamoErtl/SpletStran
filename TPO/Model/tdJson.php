<?php


class tdJason {
    public static function getDatafromApi(){
            $game_url = 'http://api.nejcribic.com/TowerDefenseStatistics/root/app/api.php?all/';
            $game_json = file_get_contents($game_url);
            $game_array = json_decode($game_json, true);

            return $game_array;
    }
}
