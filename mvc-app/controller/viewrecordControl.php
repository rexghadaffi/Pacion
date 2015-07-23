<?php
class viewrecordControl extends ViewClass
{

	function listall()
	{
		include_once "../data-access/user_type.php";
		$obj=new DataAccessLayer;
		$this->assign("cont", $obj->select("tblcompanyuser"));		
	}

}
?>