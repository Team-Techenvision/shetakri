<?php
	include '../../include/master.inc';
	

	if( $_POST["deletethis_id"] && $_POST["table_name"] ) {
		$objDB = new Database(); 
		$id = $_POST['deletethis_id'];
		$tablename = $_POST['table_name'];
		$sql = "DELETE FROM $tablename WHERE id = '$id'";
		//$results = $objDB->resultSet(); 

		if ( $objDB->query($sql) ) {
			echo "Record deleted successfully";
		} else {
			echo "Error deleting record. ";
		} 
	}
?>


