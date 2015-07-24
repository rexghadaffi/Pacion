<?php

/**
* 
*/

include_once "views/view-class.php";

class clientClass
{
	
	public function __construct()
	{
		# code...
		$name=$_GET["control"]."Control";
		include $name.".php";
		$obj= new $name;
		$obj->$_GET["action"]();
	}
}

?>