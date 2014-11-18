<?php
//include all files with classes definitions
include ('class.car.php');

$myCar = new Car("5", "grey", "Ford", "Focus");
introduceCar($myCar);

function introduceCar(Car $c){
		echo "Hello!!! This is me - your car: \n";
		echo "I have ".$c->getNumberofDoors()." doors\n";
		echo "I am ".$c->getColor()."\n";
		echo "My brand is ".$c->getBrand()."\n";
		echo "My model is ".$c->getModel()."\n";
}

?>