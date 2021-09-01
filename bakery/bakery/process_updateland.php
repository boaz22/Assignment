<?php
session_start();

require_once("db_connect.php");

if(isset($_POST["SubmitImage"])){
    $land_id=$_POST["land_id"];
    $land_size=$_POST["land_size"];
    $land_price=$_POST["land_price"];
    $land_location=$_POST["land_location"];
    $land_image=$_FILES["land_image"];
   

    $original_file_name=$_FILES["land_image"]["name"];
    $file_tmp_location=$_FILES["land_image"]["tmp_name"];

    $file_path="images/".basename($original_file_name);

    /*if(move_uploaded_file($file_tmp_location, $file_path )){
        $sql= "INSERT INTO land(land_id,land_size,land_image,land_price,land_type) VALUES('','$land_size','$file_path','$land_price','$land_type')";*/

        if(move_uploaded_file($file_tmp_location, $file_path )){    
$update="UPDATE land SET land_size='$land_size',land_price='$land_price',land_location='$land_location',land_image='$file_path' WHERE land_id='$land_id'";

        if (mysqli_query($link,$update)){
            echo "Record Updated successfully";
                // Redirect to login page
               // header("location: view_menu.php");
                header("location: welcome.php");
        }
        else{
            echo "Record not inserted".$link->error;
        }
  
    }



if (isset($_POST['back'])){
	header("location:welcome.php");
}
}
?>