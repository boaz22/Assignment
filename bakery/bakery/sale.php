<?php

$first_name = "Njeru";
$second_name = "Boaz";

echo "My first name is".$first_name." and second name is ".$second_name;
echo  " <br>";

function add_numbers(int $x,int $y){
	return $x + $y;
}

//index array
$fruits = array('apple','banana','orange','watermelon');

echo "<pre>";
print_r($fruits);
echo "</pre>";

$cars=['benz','toyota','bmw','volvo'];
echo "<pre>";
print_r($cars);
echo "</pre>";

//Associative array
$land= array('Matumbo mix'=>'ugali mix','cereals'=>'rice','meat'=>'beef');
echo "<pre>";
print_r($land);
echo "</pre>";

echo add_numbers(30,20);

require_once("db_connect.php");

if (!isset($_SESSION['email']) || !isset($_SESSION['id'])) {
	$_SESSION['msg'] = "You must Log In First to Purchase Land!";
	//header('location: welcome2.php');
	exit();
}

if (!isset($_REQUEST['id'])) {
	$_SESSION['msg'] = "Invalid land id! Please try again!";
	//header('location: welcome2.php');
	exit();
}

if (isset($_POST['sale'])) {

    $land_id = $_REQUEST['land_id'];

    $email = $_SESSION['email'];
    
    $user_id = $_SESSION['id'];
    
    $sale_id = "RSTGF" . strval(mt_rand(100000, 999999));
    
    
    
    
    $query = "INSERT INTO sale(sale_id,user_id,land_id) VALUES('$sale_id','$user_id','$land_id')";

if (mysqli_query($link,$query)){
	echo "Record Added successfully";
        // Redirect to login page
        $_SESSION['msg'] = 'Sale and purchase is Successful! Your sale ID is : '.$sale_id;
		header("location: welcome2.php");
}
else{
	echo "Record not inserted".$link->error;
}


}
?>