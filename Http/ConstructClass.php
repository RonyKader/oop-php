<?php 

Class ConstructClass {
    
    private $maxPrice;
    private $minPrice;

    public function __construct($maxPrice,$minPrice)
    {
        $this->maxPrice = $maxPrice;
        $this->minPrice = $minPrice;
    }


    public function getCalculation()
    {
        $data = $this->maxPrice + $this->minPrice;
        return $data;
    }
}