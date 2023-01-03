<?php
error_reporting(0);
$hostname="localhost"; //local server name default localhost
$username="root";  //mysql username default is root.
$password="";       //blank if no password is set for mysql.
$database="vis";  //database name which you created

$con=mysqli_connect($hostname, $username, $password, $database);


if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}
      
      $policy_id=$_POST['id'];
      
      $company1=$_POST['company'];
      $policy_no=$_POST['p_no'];
      
      
      $idv1=$_POST['IDV'];
      $p_type=$_POST['p_type'];
      // $duration=$_POST['duration'];
      $amount=$_POST['amount'];
      echo $policy_no;


$s="select * from `policy details` where id = '$policy_id'";
$result = mysqli_query($con,$s);
$num=mysqli_num_rows($result);
if($num==0){
    die("Item Not Exists");
}

     $query=mysqli_query($con,"SELECT * FROM `policy details`");

      $reg="update `policy details` set company='$company1', Policy_type='$p_type', IDV='$idv1',
      premiumamount='$amount',policy_no='$policy_no' where id='$policy_id'";

    if (mysqli_query($con, $reg)) {
        
       echo  "<h1>Record updated successfully</h1>";
        
            header('location:viewpolicy.php');
      } 
      else {
      echo "Error deleting record: " . mysqli_error($conn);
      
       }
?>