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
  <a href="#" class="w3-bar-item w3-button">Employees</a>
  <a href="reviews.php" class="w3-bar-item w3-button">Reviews</a>
  <a href="dbManage.php" class="w3-bar-item w3-button">Database Management</a>
</div>
<!-- Page Content -->
<div style="margin-left:20%">

<div class="w3-container w3-teal">
  <h1>Death By Shoes</h1>
</div>
<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>

<div class="w3-container">
<h2>EMPLOYEES</h2>
<br>
<br>
<table>
  <tr>
    <th>Employee ID</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Username</th>
    <th>Email</th>
    <th>Phone Number</th>
  </tr>
<?php  
  $sql = "SELECT * FROM Employee;";
  $result = mysqli_query($db, $sql);
  $check = mysqli_num_rows($result);

  if($check > 0)
  {
    while($row = mysqli_fetch_assoc($result))
    {
      echo "<tr>";
      echo "<td>" . $row['empID'] . "</td>";
      echo "<td>" . $row['fname'] . "</td>";
      echo "<td>" . $row['lname'] . "</td>";
      echo "<td>" . $row['username'] . "</td>";
      echo "<td>" . $row['email'] . "</td>";
      echo "<td>" . $row['phone_number'] . "</td>";
      echo "<tr>";
    }
  }
?>
</table>
<br>
<br>

<h3>Add an Employee</h3>
<form action="/employee_action.php" method="POST">
  First name:<br>
  <input type="text" name="firstname" placeholder="Enter First Name">
  <br>
  Last name:<br>
  <input type="text" name="lastname" placeholder="Enter Last Name">
  <br>
  Username:<br>
  <input type="text" name="username" placeholder="Enter Last Name">
  <br>
  Password:<br>
  <input type="password" name="password" placeholder="Enter Last Name">
  <br>
  Email:<br>
  <input type="email" name="email" placeholder="Enter Email">
  <br>
  Phone Number:<br>
  <input type="text" name="phone" placeholder="Enter Phone Number">
  <br>
  <br>
  <input type="submit" value="Submit">
</form> 
</div>

</div>
      
</body>
</html>