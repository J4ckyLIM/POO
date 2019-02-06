<?php
require_once "GameBallWarrior.php";
require_once "GameBallRogue.php";
require_once "GameBallMonk.php";
require_once "GameBallPaladin.php";
require_once "GameBallHit.php";
require_once "GameBallCharacter.php";
require_once "GameBallArena.php";

$GameBallArena = new GameBallArena(
    [
        new Paladin ('Papy Nookz',150,20,5,25,5),
        new Rogue ('Pou13',150,20,5,25,5),
        new Monk ('Yrm',150,20,55,25,5),
        new Warrior ('Jean Nemuuuuuuuuuuuuu',150,20,5,25,5)
        //new Character ('Pochaontas',250,40,35,1,1)
    ]
);
$GameBallArena->beginFight();
