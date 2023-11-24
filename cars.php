<?php

class Car{
    public $brand;
    private $mileage;
    static $describe;
    public function __construct($b, $m){
        $this->brand = $b;
        $this->mileage=$m;
    }

    public function __destruct(){
        echo $this->brand . " is dead at mileage " . $this->mileage . "<br>";
    }
    

    public function makeNoise(){
        echo "Beep, Beep!";
    }

    public function increaseMileage($x){
        $this->mileage += $x;
    }


}



?>
