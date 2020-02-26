<?php 

class BattleShip  
{
    public $name;
    public $power;
    public $store;


    public function ship()
    {
        $data =  sprintf("Name: %s Power %d capacity %d",$name,$power,$store);
        return $data;
    }
}


$ship = new BattleShip();

$ship->name = 'BD one';
$ship->power = 22;
$ship->store = 55;
echo $ship->ship();
