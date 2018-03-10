<?php
	$servername = "localhost";
	$username = "root";
	$password = "happypappy";
	$dbname = "shoes4days";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);

	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}

	if ($conn)
	{
		$uname = mysqli_real_escape_string($conn, $_POST['username']);
		$pass = mysqli_real_escape_string($conn, $_POST['password']);
		$pass = sha1($pass);
		$qry = "SELECT * FROM Employee WHERE username='$uname' AND password='$pass'";

		
		$result = mysqli_query($conn, $qry);
	    $count = mysqli_num_rows($result);

		if(!$qry)
		{
			die("Query Failed: ");
		}
		else
		{
			$row=mysqli_fetch_array($qry);
			if($count == 1)
			{
				session_start();
				$_SESSION["username"] = $uname;
				$_SESSION["loggedIn"] = TRUE;
				//mysqli_query($con, "UPDATE Users SET Logged_in=1 WHERE Username = '$uname'");
				if(!isset($_POST['username']) || !isset($_POST['password']))
				{
					print "Username or password is incorrect. Please try again";
				}
				else
				{
					header("Location:admin.php");
				}
				
			}
			else
			{
				header("Location:login.php");
				print "Username or password is incorrect. Please try again";
			}
		}
	}
	 else
	 {
	 	print "Database NOT Found";
	 }
	mysqli_close($con);

?>