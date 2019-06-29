<?php
    require_once "character.php";
    class Hero extends Character {
        public static $type ="Hero";
        static function description() {
            echo self::$type,"は勇者だ<br>";
        }
    }
?>