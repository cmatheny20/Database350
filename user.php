<!DOCTYPE html>
<?php include_once 'config.php';?>
<html>
<head>
<title>User Page</title>
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>

<h1>Products</h1> 
<p>View your cart here: <a href="customerinfo.php"><span class="glyphicon glyphicon-shopping-cart"></span></a></p>
<br>
<p>Currently there are 
<?php
 $sql3 = "SELECT * FROM countcart";
  $result3=mysqli_fetch_array(mysqli_query($db, $sql3));
  echo $result3[0];
  ?>
 items in your cart.</p>
 <br>

 <p>Currently there are 
<?php
 $sql = "CALL `cartdetails`('Nike')";
  $result=mysqli_fetch_array(mysqli_query($db, $sql));
  echo $result[0];
  ?>
 Nikes in your cart.</p>
 <br>


<figure>
  <img src="nikeshoe.jpg" width="304" height="228">
</figure>
<form action="nike.php" method="POST">
	Nike Shoe<br>
	Price: $20<br>
	Size: <select name="size">
    	<option value="9">9</option>
    	<option value="10">10</option>
    	<option value="11">11</option>
    	<option value="12">12</option>
  	</select><br>
	<button type='submit' >Buy Nike</button>
</form>
<br>
<figure>
  <img src="vansshoe.jpg"  width="304" height="300">
</figure>
<form action="vans.php" method="POST">
	Vans Shoe<br>
	Price: $18<br>
	Size: <select name="size">
    	<option value="9">9</option>
    	<option value="10">10</option>
    	<option value="11">11</option>
    	<option value="12">12</option>
  	</select><br>
	<button type='submit' >Buy Vans</button>
</form>
<br>
<figure>
  <img src="adidasshoe.jpg" width="304" height="250">

</figure>
<form action="adidas.php" method="POST">
	Adidas Shoe<br>
	Price: $15<br>
	Size: <select name="size">
    	<option value="9">9</option>
    	<option value="10">10</option>
    	<option value="11">11</option>
    	<option value="12">12</option>
  	</select><br>
	<button type='submit' >Buy Adidas</button>
</form>

</body>
</html>
