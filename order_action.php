<?php 
	include_once 'config.php';

	$orderID = mysqli_real_escape_string($db, $_POST['orderID']);

	$sql = "DELETE FROM Orders WHERE orderID = ?;";
	$stmt = mysqli_stmt_init($db);
	if (!mysqli_stmt_prepare($stmt, $sql))
	{
		echo "SQL error";
	}
	else 
	{
		mysqli_stmt_bind_param($stmt, "i", $orderID);
		mysqli_stmt_execute($stmt);
	}

	header("Location: orders.php");