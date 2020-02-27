<?php 
    class Visibility  
    {
        private $name = 'Md.Tarikul Islam';

        protected $city = 'Dhaka';
        public $mobile = 1911873186;

        private function showPrivateMethod()
        {
            $data = $this->name;
            return $data;
        }


        protected function showProtectedMethod()
        {
            $data = $this->city;
            return $data;
        }

        public function showVisibilityMethod()
        {
            
            $data = $this->showPrivateMethod().' and my city is '. $this->showProtectedMethod(). ' and mobile number is'.$this->mobile;
            return $data;
        }
    }
    