<?php

class GameBallArena {

    protected $Fighters = [];

    public function __construct($Fighters) {
        $this->setFighters($Fighters);
    }

    public function beginFight(){
        $round = 1; 
        echo "----- Il y a " . sizeof($this->Fighters) . " combattants -----<br><br>";
        do {
            $countFighters = sizeof($this->Fighters)-1;
            $random_1 = mt_rand(0, $countFighters);
            $random_2 = mt_rand(0, $countFighters);
            
            if($random_1 != $random_2){
                echo "<br><br>Nous sommes au tour " . $round . "<br><br>";
                try{                    
                    $this->Fighters[$random_1]->Hit($this->Fighters[$random_2]);
                    $this->Fighters[$random_2]->Description();
                }
                catch(Exception $e) {
                    if($e->getMessage() == "RIP") {
                        $this->updateFighters($random_2);
                    }
                }
                $round++;
            }
        }
        while(sizeof($this->getFighters()) > 1);

        echo $this->Fighters[0]->getName() . " a gagné<br>";
    }

    public function updateFighters($index) {
        echo $this->Fighters[$index]->getName() . " est mort ! Terrible !!!<br>";
        
        unset($this->Fighters[$index]);
        $this->setFighters(array_values($this->Fighters));
    }
    
    public function getFighters() {
        return $this->Fighters;
    }
    
    public function setFighters($Fighters) {
      $this->Fighters = $Fighters;
    }
}