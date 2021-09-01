<?php

require_once("db_connect.php");

if(isset($_POST["SubmitImage"])){
    $land_size=$_POST["land_size"];
    $land_price=$_POST["land_price"];
    $land_location=$_POST["land_location"];
    $land_image=$_FILES["land_image"];
   

    $original_file_name=$_FILES["land_image"]["name"];
    $file_tmp_location=$_FILES["land_image"]["tmp_name"];

    $file_path="images/".basename($original_file_name);

    if(move_uploaded_file($file_tmp_location, $file_path )){
        $sql= "INSERT INTO land(land_id,land_size,land_image,land_price,land_location) VALUES('','$land_size','$file_path','$land_price','$land_location')";

        if (mysqli_query($link,$sql)){
            echo "Record Added successfully";
                // Redirect to login page
               // header("location: view_menu.php");
                header("location: welcome.php");
        }
        else{
            echo "Record not inserted".$link->error;
        }
  
    }

}

?>