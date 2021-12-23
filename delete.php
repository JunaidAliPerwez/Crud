<?php
include 'config.php';
$data = file_get_contents("php://input");
//json_decode decodes our json string to array or php object and true returns us associative array
$mydata = json_decode($data, true);
$id= $mydata['id'];

//deleting data 
if(!empty($id)) {
	$sql= "DELETE FROM student WHERE id=".$id;

	if(mysqli_query($connection, $sql))
	// if($connection->query($sql) == TRUE)
	{
		// echo "Student record deleted";
		echo 1;
	}
	else
	{
		echo 0;
	}
}
?>