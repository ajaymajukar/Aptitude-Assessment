<?php
include "class.php";
extract($_POST);
if(isset($login))
{
	$select="select email,password from register where email='$e' and password='$p'";
	if($obj->login($select))
	{
		$_SESSION['email']=$e;
		$obj->url("../admin/index.php");
	}
	else
	{
		$obj->url("index.php?err=error");
	}
}

?>