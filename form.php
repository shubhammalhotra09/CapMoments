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

// get the post records
$txtName = $_POST['NameText'];
$txtEmail = $_POST['emailaddresstext'];
$txtPhone = $_POST['number'];
$txtUsername = $_POST['usernametext'];
$txtPassword = $_POST['passwordtext'];

$sql = "INSERT INTO user (Name,Email, Phone, Username,Password)
VALUES ('$txtName', '$txtEmail', '$txtPhone','$txtUsername', '$txtPassword')";
if (mysqli_query($conn, $sql)) {
  $last_id = mysqli_insert_id($conn);
  header("Location:file:///C:/Program%20Files/Ampps/www/new.html");
} else {
  echo "Error: Username Already exist" ;
 }
 
 
?>