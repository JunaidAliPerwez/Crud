<?php
include 'config.php';
 $sql='SELECT* FROM student';
 $result=mysqli_query($connection, $sql);
 if ($result->num_rows > 0) {
 	$data = array();
 	while ($row = mysqli_fetch_assoc($result)) {
 		$data[] = $row;
 }
}
echo json_encode($data);
// return json format data as response in ajax
?>