<?php 
include("config.php");
include("admin_function.php");

if(isset($_POST["q"])&&$_POST["q"]!="")
{
	$key=$_POST["q"];
	 $sql="SELECT * FROM request_blood WHERE NAME LIKE '%".$key."%' OR BLOOD LIKE '%".$key."%' OR HOSP LIKE '%".$key."%' OR CITY LIKE '%".$key."%' OR RDATE LIKE '%".$key."%'";
	load_patient($sql,$con);
	
}
else if($_POST["q"]=="")
{
	$sql="Select * from request_blood";
				load_patient($sql,$con);
}

?>


