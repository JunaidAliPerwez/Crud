<?php
include 'config.php';
//this code will be executed when you click on edit
$data = file_get_contents("php://input");
$mydata = json_decode($data, true);
$id= $mydata['id'];
// var_dump($_POST);
//query to retreive the id
$sql="SELECT* FROM student WHERE id=".$id;
 $result= mysqli_query($connection, $sql);
 $row = mysqli_fetch_assoc($result);
 //return json format to data as response to ajax call
 echo json_encode($row);
?>