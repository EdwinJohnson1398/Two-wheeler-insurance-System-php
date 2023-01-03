<?php
session_start();
$hostname="localhost"; //local server name default localhost
$username="root";  //mysql username default is root.
$password="";       //blank if no password is set for mysql.
$database="vis";  //database name which you created

$con=mysqli_connect($hostname, $username, $password, $database);


if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}

      $id2 = $_POST['duration'];
      $_SESSION["duration"]=$id2;





     
             header('location:../proposal/proposel1.php');
          
       
        mysqli_close($con);