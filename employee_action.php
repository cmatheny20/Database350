<?php 
	include_once 'config.php';

	$fname = mysqli_real_escape_string($db, $_POST['firstname']);
	$lname = mysqli_real_escape_string($db, $_POST['lastname']);
	$username = mysqli_real_escape_string($db, $_POST['username']);
	$password = mysqli_real_escape_string($db, $_POST['password']);
	$email = mysqli_real_escape_string($db, $_POST['email']);
	$phone = mysqli_real_escape_string($db, $_POST['phone']);
	$password = sha1($password);

	$sql = "INSERT INTO Employee (fname, lname, username, password, email, phone_number) VALUES (?, ?, ?, ?, ?, ?);";
	$stmt = mysqli_stmt_init($db);
	if (!mysqli_stmt_prepare($stmt, $sql))
	{
		echo "SQL error";
	}
	else 
	{
		mysqli_stmt_bind_param($stmt, "ssssss", $fname, $lname, $username, $password, $email, $phone);
		mysqli_stmt_execute($stmt);
	}

	header("Location: employees.php");
