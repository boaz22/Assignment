<?php

require_once("db_connect.php");

echo "<pre>";
print_r($_POST);
echo "</pre>";

if (isset($_POST['register'])) {

	$choice=$_POST['choice'];
	$firstname=$_POST["firstname"];
	$secondname=$_POST["secondname"];
	$email=$_POST["email"];
	$username=$_POST["username"];
	$password=$_POST["password"];

$query="INSERT INTO users(first_name,second_name,email,username,`password`,choice)VALUES('$firstname','$secondname','$email','$username','$password','$choice')";

if (mysqli_query($link,$query)){
	echo "Record Added successfully";
		// Redirect to login page
		header("location: login.php");
}
else{
	echo "Record not inserted".$link->error;
}


}

if (isset($_POST['delete'])){

$id=$_POST['id'];
$sql="DELETE FROM user WHERE id = '$id'";

if (mysqli_query($link,$sql)){
	echo "Record Deleted successfully";
}
else{
	echo "Record not deleted".$link->error;
}

if (isset($_POST['delete_land'])){

	$land_id=$_POST['land_id'];
	$sq="DELETE FROM land WHERE land_id = '$land_id'";
	
	if (mysqli_query($link,$sq)){
		echo "Record Deleted successfully";
	}
	else{
		echo "Record not deleted".$link->error;
	}
}

if(isset($_POST['back'])){
	header("location:login.php");
}
}	
?>