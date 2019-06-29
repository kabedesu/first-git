<?php
require_once "character.php";
class Slime extends Character {
    public static $type = "slime";
    static function description() {
        echo self::$type,"は最弱モンスター!","<br>";
    }
}

?>