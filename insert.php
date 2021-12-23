<?php
include 'config.php';
//php://input it allows us to read the data from the request  body function extra: stripslashes()
$data = file_get_contents("php://input");
//json_decode decodes our json string to array or php object and true returns us associative array
$mydata = json_decode($data, true);
$id= $mydata['id'];
$name= $mydata['name'];

// var_dump($sql);
$email= $mydata['email'];
// var_dump($email);
$password= $mydata['password'];
//insert data only
// if(!empty($name) && !empty($email) && !empty($password)) {
// 	$sql= "INSERT INTO student(name,email,password) VALUES('".$name."' ,'".$email."' ,'".$password."' )";
// 	$sql_fetch= "SELECT* from student where email='".$email."'";
// 	$result=$connection->query($sql_fetch);
//         if($result->num_rows > 0) {
//             echo "Email already exists";
//             die();
//         }
// 	if (mysqli_query($connection, $sql)) {
// 		echo "Record Saved Successfuylly";
// 	}

// elseif ($name==null||$email==null||$password==null) {
// 	echo "Fill all fields";
// }
// }

//insert and update both in one query
if(!empty($name) && !empty($email) && !empty($password)) {
	$sql= "INSERT INTO student(id,name,email,password) VALUES('".$id."' ,'".$name."' ,'".$email."' ,'".$password."' ) ON DUPLICATE KEY UPDATE name='$name', email='$email', password='$password' ";
	$sql_fetch= "SELECT* from student where email='".$email."'";
	$sql_id= "SELECT* from student where id='".$id."'";
	$result=$connection->query($sql_fetch);
	$resid=$connection->query($sql_id)
		if($resid->num_rows > 0){
   

		}
        if($result->num_rows > 0) {
            echo "Email already exists";
            die();
        }
	if (mysqli_query($connection, $sql)) {
		echo "Successfuylly";
	}

elseif ($name==null||$email==null||$password==null) {
	echo "Fill all fields";
}
}

?>