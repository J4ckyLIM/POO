<?php

Class Character implements GameBallHit {
    protected $_Name;
    protected $_HP;
    protected $_Attack;
    protected $_Defence;
    protected $_Agility;
    protected $_Crit;

    public function __construct($Name,$HP, $Attack,$Defence,$Agility,$Crit){
        $this->setName($Name);
        $this->setHP($HP);
        $this->setAttack($Attack);
        $this->setDefence($Defence);
        $this->setAgility($Agility);
        $this->setCrit($Crit);
    }
    public function getName(){
        return $this->_Name;
    }
    public function getHP() {
        return $this->_HP;
    }
    public function getAttack() {
        return $this->_Attack;
    }
    public function getDefense() {
        return $this->_Defence;
    }
    public function getAgility() {
        return $this->_Agility;
    }
    public function getCrit() {
        return $this->_Crit;
    }
    public function setName($Name) {
        if ($Name == '') 
        {
            echo "On entre pas sans papiers !";
        }
        $this->_Name = $Name;
    }
    public function setHP($HP) {
        if( $HP <= 0) 
        {
            throw new Exception("RIP");
            return;
        }
        $this->_HP = $HP;
        }
    public function setAttack($Attack) {
        if( $Attack <= 0) 
        {
            throw new Exception("Rien dans les bras ..!");
            return;
        }
        $this->_Attack = $Attack;
    }
    public function setDefence($Defence) {
        if( $Defence <= 0) 
        {
            throw new Exception("Faut savoir encaisser ... Terrible !");
            return;
        }
        $this->_Defence = $Defence;
    }
    public function setAgility($Agility) {
        if( $Agility <= 0) 
        {
            throw new Exception("Fallait faire des étirements !");
            return;
        }
        $this->_Agility = $Agility;
    }
    public function setCrit($Crit) {
        if( $Crit <= 0) 
        {
            throw new Exception("Pas de chance");
            return;
        }
        $this->_Crit = $Crit;
    }
    public function Description(){
        echo $this->_Name . "<br>";
        echo $this->_HP . " Point de vie <br>"; 
        echo $this->_Attack . " Point d'attaque <br>";
        echo $this->_Defence . " Point de defense <br>";
        echo $this->_Agility . " Point d'agilité <br>";
        echo $this->_Crit . " Point de crit <br><br>";
    }

    public function Hit($CharacterToHit){
        $Crit = mt_rand(1,100);
        if ($Crit <= $this->_Agility) {
            $Damage = ($this->_Attack * 2 ) - $CharacterToHit->_Defence;
            $Damage = ($Damage < 0) ? $Damage * -1 : $Damage;
            echo $this->getName() . " inflige un coup critique de " . $Damage ." dégats à " . $CharacterToHit->getName() . "<br>" ;
            
        }
        else {
            $Damage = $this->_Attack - $CharacterToHit->_Defence;
            $Damage = ($Damage < 0) ? $Damage * -1 : $Damage;
            echo $this->getName() . " a infligé " . $Damage . " points de dégats à " . $CharacterToHit->getName() . '<br>';
        }
        $CharacterToHit->setHP($CharacterToHit->getHP() - $Damage);
    }

}

?>