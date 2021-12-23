<?php
$server="localhost";
$username="root";
$password="";
$database="jqajax";
$connection= new mysqli($server,$username,$password,$database);
if(!$connection) {
	die("CONNECTION WAS NOT MADE");
}
 // else{
 // 	echo "CONNECTION WAS MADE";
 // }
?>