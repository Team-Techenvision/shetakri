<?php 

function GetNameById($id,$tableName)
{
	$objDB = new Database();	
	if ($tableName==STATE) {
		$sqlGetName = "SELECT * FROM $tableName WHERE stateid = '$id' ";
		$objDB->query($sqlGetName);
		$names = $objDB->single();
		echo $names["statename"];
	} else {
		$sqlGetName = "SELECT * FROM $tableName WHERE districtid = '$id' ";
		$objDB->query($sqlGetName);
		$names = $objDB->single();
		echo $names["districtname"];
	}	
}




?>