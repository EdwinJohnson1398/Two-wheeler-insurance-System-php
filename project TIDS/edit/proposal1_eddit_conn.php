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
  
      $id_r=$_SESSION["rc"];
      
      $fname=$_POST['f_name'];
      $lname=$_POST['lname'];
      $m_no=$_POST['m_no'];
      $email=$_POST['email'];
      $address=$_POST['address'];

      $dist=$_POST['dist'];
      $state=$_POST['state'];
      $pin=$_POST['pin'];
    //   $pin=$_POST['address'];

      
      

      $sql_query="update `proposel1` set first_name='$fname',last_name='$lname',mobile_no='$m_no',emai_adress='$email',address='$address',district='$dist',state='$state',pin='$pin'
      where v_no= '$id_r'ORDER BY `id_proposel1` DESC LIMIT 1";
      
      

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