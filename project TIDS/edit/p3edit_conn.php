<?php

$servername="localhost";
$username="root";
$password="";
$database_name="vis";
session_start();
$conn = mysqli_connect($servername,$username,$password,$database_name);
// Check connection
if (mysqli_connect_errno())
 {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
  }
  
      $id_r=$_SESSION["id_r"];
      
      $name=$_POST['name'];
      $realation=$_POST['Relation'];
      $age=$_POST['age'];
      
    //   $pin=$_POST['address'];

      
      

      $sql_query="update `proposel2` set 	n_name='$name',age='$age',relation='$realation'
      where v__no= '$id_r' ORDER BY `id_p2` DESC LIMIT 1";
      
      

      if (mysqli_query($conn, $sql_query))

      {
        
        header('location:../proposal/review.php');
      } 
      else
      {
          echo "Error: " . $sql_query."<br>" . mysqli_error($conn);
         
      }
      mysqli_close($conn);
  ?>