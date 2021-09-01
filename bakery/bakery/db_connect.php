<?php

$dbserver="localhost";
$dbuser="root";
$password="Kelvinluiz2";
$dbname="auctiondatabase";

$link=mysqli_connect($dbserver,$dbuser,$password,$dbname);

if ($link) {
  echo "Connected successfully";
}
else{
	echo "Connection failed" .mysqli_connect_error();
}