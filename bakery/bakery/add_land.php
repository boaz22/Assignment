<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>land</title>
        <style>
            *{
        margin: 0;
        padding: 0;
    }
.menu{
    box-shadow: 0 0 9px 0 rgba(0, 0, 0, 0.3);
    margin:100px ;
    padding: 20px;
    margin-left: 300px;
}
body{
    background-image: url("highland.jpg");
    background-size: cover;
    font: 22px sans-serif; 
	text-align: center;
}
.sidebar{
    position: fixed;
    width: 300px;
    top:0;
    left: 0;
    bottom: 0;
    background-color: brown;
    padding-top: 50px;
}
.sidebar h1{
    display: block;
    text-decoration: none;
    color: white;
    padding: 10px 20px;
    letter-spacing: 2px;
    font-family: "Rubik";
}
.sidebar a{
    display: block;
    text-decoration: none;
    color: white;
    padding: 10px 20px;
    letter-spacing: 2px;
    font-family: "Rubik";
}
.sidebar a:hover{
    margin-left: 20px;
    transition: 0.4s;
    color: rebeccapurple;
}
        </style>
    </head>
    <body>
    <div class="sidebar">
        <h1>REAL ESTATE AUCTION SITE</h1>
        <ul>
                <ul>
                    <li><a href="welcome.php" class="menu-items">Main</a></li>
                    <li><a href="edituser.php" class="menu-items">Update user</a></li>
                    <li><a href="delete.php" class="menu-items">Delete user</a></li>
                    <li><a href="menu-list.php" class="menu-items">Menu</a></li>
                    <li><a href="add_land.php" class="menu-items">Add Land</a></li>
                    <li><a href="update_land.php" class="menu-items">Update Land</a></li>
                    <li><a href="users.php" class="menu-items">Users</a></li>
                    <li><a href="view_sale.php" class="menu-items">sale</a></li>
                </ul>
            </li>
        </ul>
    </div>

        <form action="process_land.php" method="post" enctype="multipart/form-data">
            <div class="menu">
                <h1>Add Land</h1><br>
            <label for="">Land Size</label>
            <input type="text" name="Land Size" id="Land Size" class="form-control"><br><br>

            <label for="">Land Price</label>
            <input type="text" name="land_price" id="land_price"><br><br>

            <label for="">Land Location</label>
            <input type="text" name="land_location" id="land_location"><br><br>

            <label for="">Upload Image</label>
            <input type="file" name="land_image" id="land_image"><br><br>

            <input type="submit" class="btn btn-primary" name="SubmitImage" value="Add land">
            </div>
        </form>
    </body>
</html>