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
      
      $rc_no=$_POST['rc_no'];
      $e_no=$_POST['e_no'];
      $c_no=$_POST['c_no'];
      $prv_isur=$_POST['prv_isur'];

      $prv_pno=$_POST['prv_pno'];
      $prv_exdate=$_POST['prv_exdate'];
      
      $r_date=$_POST['r_date'];

      
      
    //   $email=$_POST['email'];
    //   $address=$_POST['address'];

    //   $dist=$_POST['dist'];
    //   $state=$_POST['state'];
    //   $pin=$_POST['pin'];
    //   $pin=$_POST['address'];

      

    $sql_query ="INSERT INTO poposel3 (`Registration Nummber`,`Engine Number`,`Chassis Number`,`Previous Policy Number`,`Previous Policy Expiry Date`,`Registration Date`,`previos_insur`,`id_r`)
    VALUES ('$rc_no','$e_no','$c_no','$prv_pno','$prv_exdate',' $r_date','$prv_isur','$id_r') ";

    //   $sql1="SELECT * FROM proposel1
    //   WHERE $_SESSION["id_r"]=id_r ";
    //   $result = mysqli_query($con, $sql1);
    //   $row = mysqli_fetch_assoc($result);
      

      if (mysqli_query($conn, $sql_query))

      {
        
         
         header('location:review.php');
      } 
      else
      {
          echo "Error: " . $sql_query."<br>" . mysqli_error($conn);
         
      }
      mysqli_close($conn);
  ?>