<?php
require_once "GameBallArena.php";
require_once "GameBallHit.php";
require_once "GameBallCharacter.php";
Class Pocahontas extends Character implements GameBallHit {
    
    final function __construct($Name,$HP, $Attack,$Defence,$Agility,$Crit){
        parent::__construct($Name,$HP, $Attack,$Defence,$Agility,$Crit);
    }
    public function Hit($CharacterToHit){
    
        $Crit = mt_rand(1,100);
        if ($Crit <= $this->_Agility) {
            $Damage = 0;
            ($Damage = ($Damage < 0) ? $Damage * -1 : $Damage);
            if($CharacterToHit->_Defence >= $this->_Attack){
                $Damage = 0;
            }
            echo $this->getName() . " mange un snickers et inflige " . $Damage . " dégats à " . $CharacterToHit->getName() ." parce que le sucre ça rend gentil<br>";
                
        }
        else {
            $Damage = 1;
            $Damage = ($Damage < 0) ? $Damage * -1 : $Damage;
            if($CharacterToHit->_Defence >= $this->_Attack){
                $Damage = 1;
            }
            echo $this->getName() . " lance un snickers et inflige " . $Damage . " points de dégats à " . $CharacterToHit->getName() . " adispoutoa<br>";
        }
        $CharacterToHit->setHP($CharacterToHit->getHP() - $Damage);    
    }
}
