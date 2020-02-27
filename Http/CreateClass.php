<?php 

class CreateClass  
{
    public $name;
    public $power;
    public $store;
    public $location;

    public function __construct($location) 
    {
        $this->location = $location;
    }

    public function ship()
    {
        $data =  sprintf("Name: %s Power %d capacity %d Location is %s",$this->name,$this->power,$this->store, $this->location);
        echo $data;
    }
}


// function bdShip($ship2) {
//     $ship2->name = 'SunOne';
//     $ship2->power = 122;
//     $ship2->store = 535;
//     $ship2->ship();
//     $ship2->ship();
// }






// $ship = new BattleShip('World');

// $ship->name = 'BD one';
// $ship->power = 22;
// $ship->store = 55;
// $ship->ship();

// echo '<hr>';

// $ship2 = new BattleShip('Sun');

// bdShip($ship2);