<?php
class viewrecordControl extends ViewClass
{
	function listall()
	{
		include_once "../data-access/mysql-db.php";
		$obj=new DataAccessLayer;
		$this->assign("cont", $obj->select("tblclientuser"));		
	}
}
?>