<?php

/**
* 
*/

include_once "views/view_class.php";

class ControlClass 
{	
	public function __construct()
	{
		# code...
		$name=$_GET["control"]."Control";
		include $name.".php";
		$obj= new $name;
		$obj->$_GET["func"]();
	}	
}
?>