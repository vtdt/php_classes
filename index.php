<?php

include "cars.php";
include "cats.php";

$car1 = new Car("miata", 0);
$car2 = new Car("BMW",0);

$car2->increaseMileage(240);




// $mycat1 = new cat;
// $mycat2 = new cat;
// $mycat3 = new cat;
// $mycat1->set_age(10);
// $mycat1->set_name("tangerine");
// $mycat2->set_age(1);
// $mycat2->set_name("cupcake");
// $mycat3->set_age(16);
// $mycat3->set_name("crackhead");

// $mycats = [];
// for($i = 0; $i <33; $i++){
//     array_push($mycats, new bird("ikea", 10));
// }

// foreach($mycats as $cat){
//     echo $cat->fly() . "<br >";
// }


// var_dump($mycats);


/*

class haloo{
    private static $begin = "halo";
    public static $end = "worl";

    public static function cout(){
        echo self::$begin . " " . self::$end;
    }

}

haloo::cout();

// echo "<h1>HI</h1>";


$json = @json_decode(file_get_contents('https://jsonplaceholder.typicode.com/todos'));
$decode = json_decode(json_encode($json), true);

foreach($decode as $data){
    // echo "userid\t: ".    $data["userId"]. "<br>";
    // echo "id\t: ".    $data["id"]. "<br>";
    echo "<h3>title\t: ".    $data["title"]. "</h3>";
    echo "<p>done\t: ".    ($data["completed"]?"yes":"no") . "</p>";
}


$associatedarray = ["cat" => ["color" => "beige", "breed"=>"caracal"], "dog" => "cupcake"];

var_dump(array_keys($associatedarray));

echo $associatedarray["cat"]["color"] . "<br>";




for($i = 0; $i <= 100; $i++){
    if(($i%3==0 || $i%5==0) && $i%15!=0){
        echo $i . "<br>";
    }
}
echo "response: 400";

*/
?>