<?php

class cat{
    public $age;
    public $name;
    private $color = "orange asf";

    public function get_color(){
        return $this->color;
    }

    public function set_age($set_age){
        $this->age = $set_age;
    }

    public function set_name($set_name){
        $this->name = $set_name;
    }
}

class bird{
    public $color;
    private $age;

    public function __construct($c, $a){
        $this->age = $a;
        $this->color = $c;
    }

    
    public function __destruct(){
        echo "we hella dead<br>";
    }

    public function fly(){
        return "fly awae " . $this->color. " bird";
    }
}

?>