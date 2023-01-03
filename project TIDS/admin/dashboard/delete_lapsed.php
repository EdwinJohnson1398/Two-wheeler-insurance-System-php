<?php
$hostname="localhost"; //local server name default localhost
$username="root";  //mysql username default is root.
$password="";       //blank if no password is set for mysql.
$database="vis";  //database name which you created

$con=mysqli_connect($hostname, $username, $password, $database);


if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}
$id1 = $_GET['items_id'];
$date=date("Y-m-d");
// sql to delete a record
$sql = "DELETE FROM `finel` WHERE end_data<'$date'";

if (mysqli_query($con, $sql)) {
    header('location:policy_L.php');
  
} else {
  echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($con);
?>