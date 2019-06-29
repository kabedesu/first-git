<?php
class Character {
    public static $type = "";
    public $suffix;
    public $hp;
    public $power;
    
    function __construct($hp=1,$power=1,$suffix="") {
        $this->hp = $hp;
        $this->power =$power;
        $this->suffix = $suffix;
    }

    function name() {
        return $this::$type.$this->suffix;
    }

    function attack($character) {
        echo $this->name(),"が",$character->name(),"を攻撃して",
        $this->power,"ポイントのダメージを与えた！<br>";
        
        $character->hp = $character->hp - $this->power;

        if ($character->hp <= 0) {
            $this->defeat($character);
        }
    }

    function defeat($character) {
        echo $this->name(),"は",$character->name(),"を倒した！<br>";
    }
    
    static function description() {
        echo "このゲームのキャラクターです<br>";
    }
}

?>