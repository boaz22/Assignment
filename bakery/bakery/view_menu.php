<?php

require_once("db_connect.php");

echo "<pre>";
print_r($_POST);
echo "</pre>";
?>

<!DOCTYPE html>
<html>
<head>
	<title>Menu</title>
	<style type="text/css">

		table{
			
			bsale-collapse: collapse;
			width: 30%;
			font-family: monospace;
			background-color: grey;
			text-align: left;
		}
		th{
			background-color: #588c7e;
			color: white;
			
		}
		tr:nth-child(even){
			background-color: #f2f2f2;
		}
		.omg{
			box-sizing: bsale-box;

		}
		

	</style>
</head>
<body>
	<div class="omg">
	<a><?php session_start(); echo htmlspecialchars($_SESSION["username"]); ?>
		<a href="welcome.php">Home</a>
	    <table>
		    <h1>DATA ON USERS</h1>
		        <tr>
			        <th>Land_id</th>
			        <th>land_size</th>
			        <th>land_image</th>
					<th>land_price</th>
					<th>land_location</th>
		        </tr>


            <?php
            $sql = "SELECT land_id, land_size,land_image,land_price,land_location FROM land";

            $result = mysqli_query($link, $sql);

            if(! $result ) {
            die("Could not get data: ".mysqli_error($link));
            }
   
             while($row = mysqli_fetch_assoc($result)) {
            echo "
      		<tr>
      			<td>".$row["land_id"]. "</td>
      			<td>" .$row["land_size"]. "</td>
                  <td>".$row["land_image"] . "</td>
				  <td>".$row["land_price"] . "</td> 
				  <td>".$row["land_location"] . "</td> 
      		</tr>" ;
             }
   
            echo "Fetched data successfully\n";
   
            ?>
		</table>
    </div>

    <div class="time">
        <p>Strathmore View</p>
		<img src="<?php echo $row["land_image"]; mysqli_close($link);?>" alt="land should be displayed here" height="100" width="100">
		
		
    </div>
	</body>
</html>