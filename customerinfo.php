<!DOCTYPE html>
<html>
<head>
<?php include_once 'config.php'; ?>
<title>Cart Page</title>
</head>
<body>
<h1>Your order</h1>
<br>
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
git
tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
<table>
  <tr>
    <th>Shoe</th>
    <th>Price</th>
    <th>Size</th>
  </tr>
<?php  
  $sql = "SELECT * FROM Cart;";
  $result = mysqli_query($db, $sql);
  $check = mysqli_num_rows($result);

  if($check > 0)
  {
    while($row = mysqli_fetch_assoc($result))
    {
      echo "<tr>";
      echo "<td>" . $row['name'] . "</td>";
      echo "<td>" . $row['price'] . "</td>";
      echo "<td>" . $row['size'] . "</td>";
      echo "<tr>";
      $result1 = $result1 + $row['price'];
    }
  }
?>
</table>
<br>
<p>Total Cost: <?php echo $result1?></p>
<br>
<form action="info.php">
  <button type='submit' name='Delete'>Check Out</button>
</form>

</body>
</html>
