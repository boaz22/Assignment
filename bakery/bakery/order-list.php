<?php

session_start();

require_once("db_connect.php");

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: welcome2.php");
    exit;
}

if (!isset($_REQUEST['id'])) {
	$_SESSION['msg'] = "Invalid land item! Please try again!";
	header('location: welcome2.php');
	exit();
}


if (isset($_POST['sale'])) {

$user_name = $_SESSION['username'];

$land_size=$_SESSION["land_size"];

$sale_id = "RSTGF" . strval(mt_rand(100000, 999999));





$sql = "INSERT INTO sale(sale_id,land_id,user_id) VALUES(?,?,?,?)";

$query  = $link->prepare($sql);

if ($query->execute([$sale_id, $land_id, $user_id])) {

	$_SESSION['msg'] = 'sale Placed! Your sale ID is : '.$sale_id;

	//header('location: welcome2.php');
	
} else {

	$_SESSION['msg'] = 'There were some problem in the server! Please try again after some time!';

	//header('location: welcome2.php');

}
}
// SELECT sale.sale_id,`user`.username,land.land_size,land.land_price 
// FROM ((sale
//        INNER JOIN `user` ON sale.user_id = `user`.id)
//       INNER JOIN land ON sale.land_id = land.land_id)