<?php

$servername = 'localhost';

/* MySQL account username */
$user = 'root';

/* MySQL account password */
$passwd = 'mysql';

/* DataBase */
$dbname = 'mydb';
// database connection code
$conn = mysqli_connect($servername, $user, $passwd, $dbname);
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
$txtUsername = $_POST['usernamey'];
$txtPassword = $_POST['passwordy'];

$sql = "SELECT Username, Password 
FROM user WHERE Username = '$txtUsername'";

if ($conn->query($sql) == TRUE) {
  header("Location:file:///C:/Program%20Files/Ampps/www/new.html");
} else {
  echo "Error finding Username and Password";
}

$conn->close();

?>