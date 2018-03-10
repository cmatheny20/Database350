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
  <a href="#" class="w3-bar-item w3-button">Orders</a>
  <a href="shoes.php" class="w3-bar-item w3-button">Shoes</a>
  <a href="employees.php" class="w3-bar-item w3-button">Employees</a>
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
<h2>ORDERS</h2>
<br>
<table>
  <tr>
    <th>Order ID</th>
    <th>Customer ID</th>
    <th>Cost</th>
    <th>Date Ordered</th>
    <th>Date Shipped</th>
  </tr>
<?php  
  $sql = "SELECT * FROM Orders;";
  $result = mysqli_query($db, $sql);
  $check = mysqli_num_rows($result);

  if($check > 0)
  {
    while($row = mysqli_fetch_assoc($result))
    {
      echo "<tr>";
      echo "<td>" . $row['orderID'] . "</td>";
      echo "<td>" . $row['customerID'] . "</td>";
      echo "<td>" . $row['cost'] . "</td>";
      echo "<td>" . $row['date_ordered'] . "</td>";
      echo "<td>" . $row['date_shipped'] . "</td>";
      echo "<tr>";
    }
  }
?>
</table>
<br>
<br>

<h3>Delete an Order</h3>
<form action="/order_action.php" method="post">
  Order ID<br>
  <input type="text" name="orderID" placeholder="Enter OrderID">
  <br>
  <br><br>
  <input type="submit" value="Submit">
</form> 
</div>

</div>
      
</body>
</html>