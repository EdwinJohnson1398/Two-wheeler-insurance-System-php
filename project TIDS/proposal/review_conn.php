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
  $id_r1=$_SESSION["id_r"];
  


  $sql = "SELECT *from `proposel1` where `v_no` = '$id_r'
      ORDER BY `id_proposel1` DESC LIMIT 1";  
$result = mysqli_query($conn, $sql);  
$row = mysqli_fetch_array($result);  
$count = mysqli_num_rows($result); 

if($count>=1){


      $id_p1=$row['id_proposel1'];
      $fname=$row['first_name'];
      $lname=$row['last_name'];
      $m_no=$row['mobile_no'];
      $email=$row['emai_adress'];
      $address=$row['address'];

      $dist=$row['district'];
      $state=$row['state'];
      $pin=$row['pin'];
}


//proposel2


$sql_2 = "SELECT *from `proposel2` 
       ORDER BY 	`id_p2` DESC LIMIT 1";
$result2 = mysqli_query($conn, $sql_2);  
$row2 = mysqli_fetch_array($result2);  
$count2 = mysqli_num_rows($result2); 

if($count2>=1){
    $id_p2=$row2['id_p2'];
  $Nname=$row2['n_name'];
  $relation=$row2['relation'];
  $age=$row2['age'];
}
//propose3
   $sql3 = "SELECT *from `poposel3` where `Registration Nummber` = '$id_r'
    ORDER BY `id_p3` DESC LIMIT 1";
$result3 = mysqli_query($conn, $sql3);  
$row3 = mysqli_fetch_array($result3);  
$count3 = mysqli_num_rows($result3); 


if($count3>=1){

    $id_p3=$row3['id_p3'];
  $rc_no=$row3['Registration Nummber'];
      $e_no=$row3['Engine Number'];
      $c_no=$row3['Chassis Number'];
      $prv_pno=$row3['Previous Policy Number'];
      $prv_exdate=$row3['Previous Policy Expiry Date'];
      // $prv_pno=$row3['Registration Date'];
      $r_date=$row3['Registration Date'];
      $prv_isur=$row3['previos_insur'];
}

$id_pl=$_SESSION["policyid"];

$sql_p = "SELECT *from `policy details` where `id` ='$id_pl' ";  
$result_p = mysqli_query($conn, $sql_p);  
$row_p = mysqli_fetch_array($result_p);  
$count_p = mysqli_num_rows($result_p);


$f1=$_SESSION["duration"];
$d=date("y+$f1");


$date1=date('Y-m-d', strtotime(+ $f1.'year', strtotime($prv_exdate)) );
  
$sql_p1 = "SELECT *from `finel` where `vehicle_no` ='$rc_no' and end_data>'$prv_exdate'";  
$result_p1 = mysqli_query($conn, $sql_p1);  
$row_p = mysqli_fetch_array($result_p1);  
$count_p = mysqli_num_rows($result_p1);

 

       if($count_p<1){


      $sql_query="INSERT INTO `finel`(`id_r`,`id_pol`,`id_p1`,`id_p2`,`id_p3`,`start_date`,`end_data`,`vehicle_no`)
      VALUES ('$id_r1','$id_pl',' $id_p1',' $id_p2',' $id_p3','$prv_exdate','$date1','$rc_no')";
      

      if (mysqli_query($conn, $sql_query))
      {
          echo "<h1>successfully registered<h1>";
          echo "you can download invoice from your profile";

          
          // echo "$prv_exdate\n";
          // echo"$date1\n";
          


        //   header("Location:addpolicy.php");
      }
      else
      {
          echo "Error:";

          
         
      }
    }else
    {
        echo "Your Vehicle have  already a policy ";

        
       
    }

      mysqli_close($conn);
    
  ?>
  <html>
    <body>
    <form align='center' action="../customerhomepage/home pagecustomer.php" ><br><br>
       <button type="submit" value="Submit" clsss="btn"><b> TO GO HOME PAGE</b></button>
    </body>
  </html>