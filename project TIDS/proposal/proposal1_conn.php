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
  
      $id_r=$_SESSION['rc'];
      
      $fname=$_POST['f_name'];
      $lname=$_POST['lname'];
      $m_no=$_POST['m_no'];
      $email=$_POST['email'];
      $address=$_POST['address'];

      $dist=$_POST['dist'];
      $state=$_POST['state'];
      $pin=$_POST['pin'];
    //   $pin=$_POST['address'];

      
      

      $sql_query="INSERT INTO proposel1 (`first_name`,`last_name`,`mobile_no`,`emai_adress`,`address`,`district`,`state`,`pin`,`v_no`)
      VALUES ('$fname','$lname','$m_no','$email','$address','$dist','$state',' $pin','$id_r')";

      if (mysqli_query($conn, $sql_query))

      {
        
        header('location:proposel2.html');
      } 
      else
      {
          echo "Error: " . $sql_query."<br>" . mysqli_error($conn);
         
      }
      mysqli_close($conn);
  ?>