<?php

include ('interface.engineinterface.php');

class Engine implements EngineInterface
{

private $HP;

public function __construct($HP){
	$HP=$HP+5;
	$this->HP = $HP;
}

public function getHP()
{
return $this->HP;
}

}
?>