<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and ospen the template in the editor.
 */

class Bus {

    public $currentspeed = 0;
    public $armed = false;
    public $exploded = false;

    /*
     * setSpeed() - A function that takes a single argument, which is the speed of the bus. 
     * If this speed is higher than 50mph and the bomb has not previously been armed, this function should arm it
     */
        
    function setSpeed($speed) {
        if ($speed > 50 && $this->armed != true) {
            $this->armed = true;
        }
        $this->currentspeed = $speed;
    }

    //getSpeed() - A function that returns the current speed of the bus.
    function getSpeed() {        
        return $this->currentspeed;
    }
    
    function isArmed(){
        if($this->armed == true){
            return "Bomb is armed";
        } else{
            return "Bomb is not armed";
        }
        
    }
            
    function trigger() {
        $this->exploded = true;
            return "BOOM";
    }
        
    
    
    function exploded(){
        if($this->armed == true && $this->currentspeed <= 50)
        {$this->exploded = true;
            return "BOOM";
        }
    }

}
