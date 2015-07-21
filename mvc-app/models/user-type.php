<?php
class UserType
{
	// Properties
	private $id;
	private $typeName;
	
	// Setters 
	public function SetID($typeid)
	{
		//Parser goes here..
		$this->id = $typeid;
	}
	public function SetTypeName($type_name)
	{
		$this->typeName = $type_name;
	}
	// Getters
	public function GetID()
	{
		return $this->id;
	}
	
	public function GetTypeName()
	{
		return $this->typeName;
	}
}


?>