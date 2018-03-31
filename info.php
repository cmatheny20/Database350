<!DOCTYPE html>
<html>
<head>
<?php include_once 'config.php'; ?>
<title>Info Page</title>
</head>
<body>
<h1>Check out information</h1>
<br>
<body>
<br>
<form action="/thanks.php" method="POST">
  First name:<br>
  <input type="text" name="firstname" placeholder="Enter First Name" required>
  <br>
  Last name:<br>
  <input type="text" name="lastname" placeholder="Enter Last Name" required>
  <br>
  Email:<br>
  <input type="email" name="email" placeholder="Enter Email" required>
  <br>
  Phone Number:<br>
  <input type="text" name="phone" placeholder="Enter Phone Number" required>
  <br>
  Credit Card #:<br>
  <input type="text" name="card" placeholder="Enter Credit Card #" required>
  <br>
  Confirm Credit Card #:<br>
  <input type="text" name="phone" placeholder="Confirm Credit Card #" required>
  <br>
  CVV:<br>
  <input type="text" name="phone" placeholder="Enter CVV" required>
  <br>
  Experiation date:<br>
  <input type="text" name="phone" placeholder="Enter Experiation date" required>
  <br>
  <button type="submit" name="submit">Submit</button>
</form> 
<br>

</body>
</html>
