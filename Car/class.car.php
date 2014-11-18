<?php

include ('interface.car.php');

class Car implements CarInterface {

	private $numberofDoors;
	private $color;
	private $brand;
	private $model;

	public function __construct($numberofDoors, $color, $brand, $model){
	$this->numberofDoors = $numberofDoors;
	$this->color = $color;
	$this->brand = $brand;
	$this->model = $model;
	}

	public function getNumberofDoors()
		{
		return $this->numberofDoors;
		}
	public function setNumberofDoors($numberofDoors)
		{
		$this->numberofDoors=$numberofDoors;
		}

	public function getColor(){
		return $this->color;
		}
	public function setColor($color){
		$this->color=$color;
		}

	public function getBrand(){
		return $this->brand;
		}
	public function setBrand($brand){
		$this->brand=$brand;
		}

	public function getModel(){
		return $this->model;
		}
	public function setModel($model){
		$this->model=$model;
		}

	public function helloCar() {
		echo "Hello!!! This is me - your car: \n";
		echo "I have ".$this->numberofDoors." doors\n";
		echo "I am ".$this->color."\n";
		echo "My brand is ".$this->brand."\n";
		echo "My model is ".$this->model."\n";
	}
}

?>