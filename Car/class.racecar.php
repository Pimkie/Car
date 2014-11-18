<?php

include ('interface.racecarinterface.php');
include ('class.engine.php');
include ('class.car.php');

class RaceCar extends Car implements RaceCarInterface
{

private $vMax;
private $acceleration;
public static $raceEngine; 

public function __construct($vMax, $acceleration){
	$vMax = $vMax+50;
	$this->vMax = $vMax;
	$acceleration = $acceleration*2;
	$this->acceleration = $acceleration;
}

public function getVMax(){
	return $this->vMax;
}
public function getAcceleration(){
	return $this->acceleration;
}
}

//$raceEngine = new Engine(150);
RaceCar::$raceEngine = new Engine(150);
$race = new RaceCar(150,150);
echo $race->getVMax()." ".$race->getAcceleration()." ".$raceEngine->getHP()."\n";

?>