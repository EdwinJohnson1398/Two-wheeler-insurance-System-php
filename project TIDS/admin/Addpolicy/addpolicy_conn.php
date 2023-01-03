<?php

$servername="localhost";
$username="root";
$password="";
$database_name="vis";

$conn = mysqli_connect($servername,$username,$password,$database_name);
// Check connection
if (mysqli_connect_errno())
 {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
  }
  

      $company1=$_POST['company'];
      $policy_no=$_POST['policy_no'];
      
      
      $idv1=$_POST['idv'];
      
      $dec=$_POST['policy_type'];
    //   $duration=$_POST['duration'];
      $amount=$_POST['premiumamount'];
      
      

      $sql_query="INSERT INTO `policy details`(`company`,`IDV`,`Policy_type`,`premiumamount`,`policy_no`)
      VALUES ('$company1','$idv1','$dec','$amount','$policy_no')";
      

      if (mysqli_query($conn, $sql_query))
      {
          echo "success";
          header("Location:addpolicy.php");
      }
      else
      {
          echo "Error: " . $sql_query."<br>" . mysqli_error($conn);
         
      }
      mysqli_close($conn);
    
  ?>