<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Update Land</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
	<style type="text/css">
		 body{ font: 14px sans-serif;
            background-image: url("images/splash3.jpg");
            background-size: contain;
		 }
		 .update_land{ 
            width: 350px; padding: 20px; 
            width: 400px;
  	        background-color: #ffffff;
  	        box-shadow: 0 0 9px 0 rgba(0, 0, 0, 0.3);
  	        margin: 100px auto;
        }
	</style>
</head>
<body>
	<div class="update_land">
		<form action="process_updateland.php" method="post" enctype="multipart/form-data">

		<h1>Change land</h1>

        <label for="">Land id</label>
            <input type="text" name="land_id" id="land_id" class="form-control"><br><br>

		    <label for="">Land Size</label>
            <input type="text" name="land_size" id="land_size" class="form-control"><br><br>

            <label for="">Land Price</label>
            <input type="text" name="land_price" id="land_price"><br><br>

            <label for="">Land Location</label>
            <input type="text" name="land_location" id="land_location"><br><br>

            <label for="">Upload Image</label>
            <input type="file" name="land_image" id="land_image" value="land_image"><br><br>

            <input type="submit" class="btn btn-primary" name="SubmitImage" value="Update land">
		<input type="submit" name="back" value="BACK" class="btn btn-primary"><br>
	
		</form>
	</div>
</body>

</html>

