<?php 
	include_once 'config.php';

	$fname = mysqli_real_escape_string($db, $_POST['firstname']);
	$lname = mysqli_real_escape_string($db, $_POST['lastname']);
	$email = mysqli_real_escape_string($db, $_POST['email']);
	$phone = mysqli_real_escape_string($db, $_POST['phone']);


	$sql = "INSERT INTO Customer (fname, lname, email, phone_number) VALUES (?, ?, ?, ?);";
	$stmt = mysqli_stmt_init($db);
	if (!mysqli_stmt_prepare($stmt, $sql))
	{
		echo "SQL error";
	}
	else 
	{
		mysqli_stmt_bind_param($stmt, "ssss", $fname, $lname, $email, $phone);
		mysqli_stmt_execute($stmt);
	}

	header("Location: customers.php");