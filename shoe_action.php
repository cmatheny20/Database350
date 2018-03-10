<?php 
	include_once 'config.php';

	$name = mysqli_real_escape_string($db, $_POST['shoename']);
	$brand = mysqli_real_escape_string($db, $_POST['brand']);
	$cost = mysqli_real_escape_string($db, $_POST['cost']);
	$size = mysqli_real_escape_string($db, $_POST['size']);
	$style = mysqli_real_escape_string($db, $_POST['style']);
	$color = mysqli_real_escape_string($db, $_POST['color']);
	

	$sql = "INSERT INTO Shoe (name, brand, cost, size, style, color) VALUES (?, ?, ?, ?, ?, ?);";
	$stmt = mysqli_stmt_init($db);
	if (!mysqli_stmt_prepare($stmt, $sql))
	{
		echo "SQL error";
	}
	else 
	{
		mysqli_stmt_bind_param($stmt, "ssdsss", $name, $brand, $cost, $size, $style, $color);
		mysqli_stmt_execute($stmt);
	}

	header("Location: shoes.php");