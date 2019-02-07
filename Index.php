<!DOCTYPE HTML>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Caesar+Dressing" rel="stylesheet"> 
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <title> Game Ball's Legends </title>
</head>
<h1 id="gameTitle"> Game Ball's Legends <i class="fab fa-d-and-d"></i></h1>
<body>
    <section class="description">
        <p id="gameEntrance"> Les joueurs arrivent dans l'arène <i class="fas fa-walking"></i><i class="fas fa-dungeon"></i></p>
    </section>
    <section class="charProfil">
        <img src="image/monk.jpg" class="charImage">
        <img src="image/warrior.jpg" class="charImage">
        <img src="image/rogue.png" class="charImage">
        <img src="image/paladin.jpg" class="charImage">
    </section>
    <section class="fightingPart">
<?php
require_once "GameBallWarrior.php";
require_once "GameBallRogue.php";
require_once "GameBallMonk.php";
require_once "GameBallPaladin.php";
require_once "GameBallHit.php";
require_once "GameBallCharacter.php";
require_once "GameBallArena.php";
require_once "GameBallPocahontas.php";

$GameBallArena = new GameBallArena(
    [
        new Paladin ('Papy Nookz',mt_rand(170,180),mt_rand(15,20),mt_rand(5,8),mt_rand(25,35),5),
        new Rogue ('Pou13',mt_rand(125,135),mt_rand(30,39),mt_rand(2,5),mt_rand(20,30),5),
        new Monk ('Yrm',mt_rand(135,140),mt_rand(15,25),mt_rand(2,5),mt_rand(25,30),5),
        new Warrior ('Jean Nemuuuuuuuuuuuuu',mt_rand(145,155),mt_rand(20,27),mt_rand(2,5),mt_rand(20,25),5),
        new Pocahontas ('SnickersMan',250,1,1,50,1)
    ]
);
$GameBallArena->beginFight();

?>
    </section>
    <footer class="resetButton">
    <a href="http://localhost:8888/POO/"> <i class="fab fa-firefox"></i></a>
    </footer>
</body>
</html>

