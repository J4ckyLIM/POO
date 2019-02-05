<?php

require "GameBallPerso.php";
require "GameBallArena.php";

$GameBallArena = new GameBallArena(
    [
        new Character('Papy Nookz',21,21,8,2,2),
        new Character ('Pou13',20,50,2,2,2),
        new Character ('Yrm',100,8,5,5,5),
        new Character ('Jean Nemuuuuuuuuuuuuu',15,8,37,5,5)
    ]
);
$GameBallArena->beginFight();
