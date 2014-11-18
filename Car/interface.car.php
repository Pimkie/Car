<?php

interface CarInterface{
	public function getNumberofDoors();
	public function setNumberofDoors($numberofDoors);

	public function getColor();
	public function setColor($color);

	public function getBrand();
	public function setBrand($brand);

	public function getModel();
	public function setModel($model);

	public function helloCar();//printing all values of parameters
}

?>