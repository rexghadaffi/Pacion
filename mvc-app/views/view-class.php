<?php

/**
* 
*/
class ClientViewClass
{
	public $arr=array();
	
	function show()
	{
		extract($this->arr);
<<<<<<< HEAD:mvc-app/views/view-class.php
		include_once "../views/".$_GET['control']."View.html";
=======
		include_once "../views/client/".$_GET['control'].".html";
>>>>>>> origin/master:mvc-app/views/view_class.php
	}

	function assign($name, $value)
	{
		$this->arr[$name]=$value;
	}

	public function __destruct()
	{		
		$this->show();
	}
}

?>