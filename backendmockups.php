<!DOCTYPE html>
<html>
<body>

<h2>Registration Form</h2>

<form action="backendmockups.php" method="post">
  <label for="username">Username:</label><br>
  <input type="text" id="username" name="username"><br>
  <label for="password">Password:</label><br>
  <input type="password" id="password" name="password"><br>
  <input type="checkbox" id="isAdmin" name="isAdmin" value="1">
  <label for="isAdmin"> Register as Admin</label><br>
  <input type="submit" value="Submit">
</form> 

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "site_e_commerce";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST["username"];
  $password = $_POST["password"];
 /* $isAdmin = $_POST["isAdmin"]; */

  $sql = "INSERT INTO Users (username, password)
  VALUES ('$username', '$password')";

  if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}

$conn->close();
?>


</body>
</html>