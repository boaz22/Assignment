<?php
require_once("db_connect.php");
if(isset($_POST["package"]))
{
	  $User_Name=$_POST["username"];
	  $First_Name=$_POST["firstname"];
	  $Second_Name=$_POST["secondname"];
    $Contact=$_POST["Contact"];
    $Adress=$_POST["Adress"];
    $password=$_POST["pwd"];
    $description=$_POST["role"];
   // $user_type=$_POST["user"]

    $sql="INSERT INTO users_(User_Name,First_Name,Second_Name,Contact,Adress,password,description) VALUES ('$User_Name','$First_Name','$Second_Name','$Contact','$Adress','$password','$description')";

  if (mysqli_query($conn,$sql))
  {
     echo "<h1>Record added successfully</h1>";
   }
  else
  {
    echo "Record Not Inserted " .mysqli_error($conn);
   }

  
}
?>