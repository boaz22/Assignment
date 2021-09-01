<?php
session_start();

require_once("db_connect.php");

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}

if (isset($_POST['delete_land'])){

    // $user_name = $_SESSION['user'];

   $land_id = $_SESSION['land_id'];
	
	$sql="DELETE FROM land WHERE land_id = '$land_id'";
	
	if (mysqli_query($link,$sql)){
		echo "Record Deleted successfully";
	}
	else{
		echo "Record not deleted".$link->error;
	}
}

?>