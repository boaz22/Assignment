<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
    <link rel="stylesheet" type="text/css" >
    <style>
        body{
            background-color: plum;
        }
        form{
            margin: 150px;
            padding: 40px;
            background-color: white;
        }
    </style>
</head>
<body>
	<form action="process_register.php" method="post" enctype="multipart/form-data">

		<h1>DELETE LAND</h1>
		<label for="id">LAND Id</label><br>
		<input type="text" name="land_id" id="land_id" placeholder="land id"><br><br>

		<input type="submit" name="delete_land" value="DELETE Land"><br>
	
	</form>

</body>

</html>