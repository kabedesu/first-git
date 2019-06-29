<?php
    require_once "human.php";

    class Main {
        function start() {
            $tanaka = new Human("田中",25,"電車");
            $tanaka->say();
            $tanaka->think($tanaka->sayHobby());
        }
    }

    Main::start();
?>