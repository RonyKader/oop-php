<?php 

class ParentClassData
{
    private $name = 'Md.Tarikul Islam';
    protected $city = 'Dhaka';
    public $mobile = 1911873186;
}



class ChildClassData extends ParentClassData 
{
    public function ChildMethodShow() 
    {
        $data = 'My name is '. $this->city;
        return $data;
    }
}
