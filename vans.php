<?php 
	include_once 'config.php';

	$name = mysqli_real_escape_string($db, "Vans");
	$price = mysqli_real_escape_string($db, 18);
	$size = mysqli_real_escape_string($db, $_POST['size']);



	$sql = "INSERT INTO Cart (name, price, size) VALUES (?, ?, ?);";
	$stmt = mysqli_stmt_init($db);
	if (!mysqli_stmt_prepare($stmt, $sql))
	{
		echo "SQL error";
	}
	else 
	{
		mysqli_stmt_bind_param($stmt, "sds", $name, $price, $size);
		mysqli_stmt_execute($stmt);
	}

	header("Location: user.php");
	?>