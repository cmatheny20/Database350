<?php
session_start();

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

//if not logged in redirect to login page
if($_SESSION["loggedIn"] != TRUE)
{
 header("Location:login.php");
}
$uname = $_SESSION["username"];
$qry = mysqli_query($conn, "SELECT username FROM Employees WHERE username='$uname'");
$row = mysqli_fetch_array($qry);
?>

<p align="right">Welcome, <?php echo $uname?>! <a href="logout.php">Logout</a></p>

<html>
<title>W3.CSS</title>
<?php include_once 'config.php'; ?>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>

<!-- Sidebar -->
<div class="w3-sidebar w3-light-grey w3-bar-block" style="width:20%">
  <h3 class="w3-bar-item"><a href="admin.php" class="w3-bar-item w3-button">Menu</a></h3>
  <a href="customers.php" class="w3-bar-item w3-button">Customers</a>
  <a href="orders.php" class="w3-bar-item w3-button">Orders</a>
  <a href="shoes.php" class="w3-bar-item w3-button">Shoes</a>
  <a href="employees.php" class="w3-bar-item w3-button">Employees</a>
  <a href="reviews.php" class="w3-bar-item w3-button">Reviews</a>
  <a href="#" class="w3-bar-item w3-button">Database Management</a>
</div>

<!-- Page Content -->
<div style="margin-left:20%">

<div class="w3-container w3-teal">
  <h1>Death By Shoes</h1>
</div>
<div class="w3-container">
<h2>Database Management</h2>
<br>
<h3>Backup Database</h3>
<form action="backupdb.php" method="post">
  <button type='submit' name='backup'>Backup Database</button>
</form>
<br>
<h3>Mongo DB Status</h3>
<?php
   $old_path = getcwd();
   chdir('/var/www/html/');
   $bashit = shell_exec('./mongostatus.sh');
   chdir($old_path);
 

   echo $bashit;

?>
<h3>Mongo DB Log</h3>
<?php
   $old_path = getcwd();
   chdir('/var/www/html/');
   $bashit = shell_exec('./mongolog.sh');
   chdir($old_path);
 

   echo $bashit;

?>
<br>
<h3>MySQL DB Status</h3>
<?php
   $old_path = getcwd();
   chdir('/var/www/html/');
   $bashit = shell_exec('./mysqlstatus.sh');
   chdir($old_path);
 

   echo $bashit;

?>
<h3>MySQL DB Log</h3>
<?php
   $old_path = getcwd();
   chdir('/var/www/html/');
   $bashit = shell_exec('./mysqllog.sh');
   chdir($old_path);
 

   echo $bashit;

?>
<br>
<h3>ElasticSearch Status</h3>
<?php
   $old_path = getcwd();
   chdir('/var/www/html/');
   $bashit = shell_exec('./elasticsearchstatus.sh');
   chdir($old_path);
 

   echo $bashit;

?>
<h3>ElasticSearch Log</h3>
<?php
   $old_path = getcwd();
   chdir('/var/www/html/');
   $bashit = shell_exec('./elasticsearchlog.sh');
   chdir($old_path);
 

   echo $bashit;

?>
<br><br>
</div>
      
</body>
</html>