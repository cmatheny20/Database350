<?php
include 'config.php';
//If the database is found, then this inserts values from the form.html
//into the database, otherwise it prints "Database NOT Found
if ($db)
{
 session_start();
 $uname = $_SESSION["username"];
 $qry = mysqli_query($db, "SELECT * FROM Employees WHERE username='$uname'");
 if ($_SESSION["loggedIn"] == TRUE)
 {
 $_SESSION["loggedIn"] == FALSE;
 session_unset();
 session_destroy();
 header("Location:login.php");
 }
}
else
{
 print "Database NOT Found";
}
mysqli_close($db);
?>