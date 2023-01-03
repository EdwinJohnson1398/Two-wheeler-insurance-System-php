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
      
  $rc_no=$_POST['rc_no'];
  $e_no=$_POST['e_no'];
  $c_no=$_POST['c_no'];
  $prv_isur=$_POST['prv_isur'];

  $prv_pno=$_POST['prv_pno'];
  $prv_exdate=$_POST['prv_exdate'];
  
  $r_date=$_POST['r_date'];
      
    //   $pin=$_POST['address'];

      
      

      $sql_query="update `poposel3` set `Registration Nummber`='$rc_no',`Engine Number`='$e_no',`Chassis Number`='$c_no',`Previous Policy Number`='$prv_pno',`Previous Policy Expiry Date`='$prv_exdate',`Registration Date`='$r_date',`previos_insur`= '$prv_isur'
      where `Registration Nummber`= '$id_r' ORDER BY `id_p3` DESC LIMIT 1";
      
      

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