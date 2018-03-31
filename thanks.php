<!DOCTYPE html>
<?php include_once 'config.php'; 
 $sql = "DELETE FROM Cart";
  mysqli_query($db, $sql);
  ?>
<html>
<head>

<title>Thanks Page</title>
</head>
<body>
<h1>Thank you for your order</h1>
<br>
<body>
<br>
<form action="user.php">
  <button type='submit' name='Delete'>Return to home page</button>
</form>
</body>
</html>
