<?php
require_once "GameBallHit.php";
require_once "GameBallCharacter.php";
Class Warrior extends Character implements GameBallHit{
    
    final function __construct($Name,$HP, $Attack,$Defence,$Agility,$Crit){
        parent::__construct($Name,$HP, $Attack,$Defence,$Agility,$Crit);
    }
    public function Hit($CharacterToHit){
    
        $Crit = mt_rand(1,100);
        if ($Crit <= $this->_Agility) {
            $Damage = $this->_Attack ;
            $Damage = ($Damage < 0) ? $Damage * -1 : $Damage;
            echo $this->getName() . " inflige FRAPPE DU COLOSSE de " . $Damage . " dégats à " . $CharacterToHit->getName() . "<br>" ;
                
        }
        else {
            $Damage = $this->_Attack - $CharacterToHit->_Defence;
            $Damage = ($Damage < 0) ? $Damage * -1 : $Damage;
            echo $this->getName() . " frappe avec son épee à deux mains et inflige " . $Damage . " points de dégats à " . $CharacterToHit->getName() . '<br>';
        }
        $CharacterToHit->setHP($CharacterToHit->getHP() - $Damage);
    }
}