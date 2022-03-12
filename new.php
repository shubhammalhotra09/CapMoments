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


$txtName = $_POST['NameText'];
$txtUsername = $_POST['usernamenew'];
$txtPassword = $_POST['passwordnew'];

$sql = "UPDATE user SET Username ='$txtUsername',Password ='$txtPassword'
WHERE Name = '$txtName'";


if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();

?>