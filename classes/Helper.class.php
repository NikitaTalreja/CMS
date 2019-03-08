<?php
class Helper{
    public static function sectionYield($sectionName){
        include_once(LAYOUTS . "{$sectionName}.php");
    }
    public static function redirect($url){
        header("Location: {$url}");
    }
}
?>