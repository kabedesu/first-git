<?php
    require_once "hero.php";
    require_once "slime.php";
    class Game {
        static function start() {
            Slime::description();
            Hero::description();

            $slime_a = new Slime(10,3,"A");
            $hero = new Hero(1000,30);

            $slime_a->attack($hero);
            $hero->attack($slime_a);
        }
    }

    Game::start();
