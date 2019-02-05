<?php

class GameBallArena {

    protected $Fighters = [];

    public function __construct($Fighters){
        $this->setFighters($Fighters);
    }

    public function beginFight(){
        $round = 1; 
        echo "----- Il y a " . sizeof($this->Fighters) . '-----<br><br>';
        do {
            $countFighters = sizeof($this->Fighters)-1;
            $random_1 = mt_rand(0, $countFighters);
            $random_2 = mt_rand(0, $countFighters);
            
            if($random_1 != $random_2){
                try{
                    echo "Nous sommes au tour " . $round . "<br><br>";
                    $this->Fighters[$random_1]->Hit($this->Fighters[$random_2]);
                    $round++;
                    $this->Fighters[$random_2]->Description();
                }catch(Exception $e){
                    if($e->getMessage() == "RIP"){
                        $this->updateFighters($random_2);

                     //   echo '<br><br>dddd : ' . sizeof($this->Fighters) . '<br>';
    
                    //    echo '<br><br>' . $countFighters . '<br><br>';
                    }
                   
                    //echo $e->getMessage();
                }
            }
        }while(sizeof($this->getFighters()) > 1);

        echo $Fighters[$random_1] . "à gagner ";
    }

    public function updateFighters($index){
        unset($this->Fighters[$index]);
        $this->setFighters(array_values($this->Fighters));
        echo Fighters[$index] . " est mort ! Terrible !!!";
    }
    
    public function getFighters(){
        return $this->Fighters;
    }
    public function setFighters($Fighters){
      $this->Fighters = $Fighters;
    }
}