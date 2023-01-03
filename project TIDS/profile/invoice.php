
<?php
session_start();
$hostname="localhost"; //local server name default localhost
$username="root";  //mysql username default is root.
$password="";       //blank if no password is set for mysql.
$database="vis";  //database name which you created
error_reporting(0);
$con=mysqli_connect($hostname, $username, $password, $database);

if(! $con)
{
die('Connection Failed'.mysql_error());
}
// $no = $_POST['Vehicle_No'];
$id_r=$_SESSION["id_r"];

//proposel1
 
// $sql = "SELECT *from `finel` where finel.id_r = '$id_r'";  
// $result = mysqli_query($con, $sql);  
// $row = mysqli_fetch_array($result);  
// $count = mysqli_num_rows($result);




//         while($count>0) {

//          $rc_no=$row['vehicle_no'];
      
      
//   $sql_1 = "SELECT *from `finel`,`proposel1` where finel.vehicle_no='$rc_no' 
//        and	proposel1.id_proposel1 =finel.id_p2";   
//        $result1 = mysqli_query($con, $sql_1);  
//        $row1 = mysqli_fetch_array($result1);  
//        $count1 = mysqli_num_rows($result1);
      
      
      
//        $fname=$row1['first_name'];
   
//       $m_no=$row1['mobile_no'];
//       $email=$row1['emai_adress'];
//       $address=$row1['address'];

//       $dist=$row1['district'];
//       $state=$row1['state'];
//       $pin=$row1['pin'];






// $sql_2 = "SELECT *from `finel`,`proposel2` where finel.id_r = proposel2.id_r and finel.vehicle_no='$id_r' 
//        and 	proposel2.id_p2= finel.id_p1";

// $result2 = mysqli_query($con, $sql_2);  
// $row2 = mysqli_fetch_array($result2);  
// $count2 = mysqli_num_rows($result2); 



//   $Nname=$row2['n_name'];
//   $relation=$row2['relation'];
//   $age=$row2['age'];

// //propose3
//    $sql3 = "SELECT *from finel,`poposel3`,proposel1 where finel.id_r = poposel3.id_r and finel.id_r='$rc_no'
//     and poposel3.id_p3 =finel.id_p3";
// $result3 = mysqli_query($con, $sql3);  
// $row3 = mysqli_fetch_array($result3);  
// $count3 = mysqli_num_rows($result3); 



//   $rc_no=$row3['Registration Nummber'];
//       $e_no=$row3['Engine Number'];
//       $c_no=$row3['Chassis Number'];
//       $prv_pno=$row3['Previous Policy Number'];
//       $prv_exdate=$row3['Previous Policy Expiry Date'];
//       // $prv_pno=$row3['Registration Date'];
//       $r_date=$row3['Registration Date'];
//       $prv_isur=$row3['previos_insur'];
      
//       $ex_date=$row3['end_data'];


//       $date1 = $prv_exdate;
//       $date2 = $ex_date;

// $diff = abs(strtotime($date2) - strtotime($date1));

// $years = floor($diff / (365*60*60*24));


// $id_r=$_SESSION["id_r"];

//  $sql_p = "SELECT *from `finel`,`policy details` where `policy details`.id =finel.id_pol and finel.vehicle_no='$rc_no' 
// ORDER BY id_finel DESC LIMIT 1 " ; 


// $result_p = mysqli_query($con, $sql_p);  
// $row_p = mysqli_fetch_array($result_p);  
// $count_p = mysqli_num_rows($result_p);
  

$sql1= "SELECT *from finel where id_r='$id_r'";
$result1=mysqli_query($con, $sql1);
           while ($row = mysqli_fetch_assoc($result1)) {

                $id_r= $row['id_p1'];
                $sql2= "SELECT *from proposel1 where id_proposel1=$id_r";
                $result2=mysqli_query($con, $sql2);
                while ($row2 = mysqli_fetch_assoc($result2)) {



                  $fname=$row2['first_name'];
   
       $m_no=$row2['mobile_no'];
      $email=$row2['emai_adress'];
      $address=$row2['address'];
      $dist=$row2['district'];
      $state=$row2['state'];
       $pin=$row2['pin'];

                              $Id_pol= $row['Id_pol'];
                              $sql3= "SELECT *from `policy details` where id=$Id_pol";
                              $result3=mysqli_query($con, $sql3);
                              while ($row3 = mysqli_fetch_assoc($result3)) {
              
                                $policy_no=$row3['policy_no'];
                                $type=$row3['Policy_type'];
                                $premiumamount=$row3['premiumamount'];
                                $company=$row3['company'];

                                $date1 = $row['start_date'] ;
                                $date2 = $row['end_data'];
                                $diff = abs(strtotime($date2) - strtotime($date1));
                                $years = floor($diff / (365*60*60*24));
                                $amount=$years*$premiumamount;

                                

                                      $id_p3= $row['id_p3'];
                                      $sql4= "SELECT *from `poposel3` where id_p3=$id_p3";
                                      $result4=mysqli_query($con, $sql4);
                                      while ($row4 = mysqli_fetch_assoc($result4)) {
                      
                                        // echo "<td>".$row4['n_name'] ."</td>";

        
            
          //  // echo "<td>".$row['Id_finel'] ."</td>";
          //  // echo "<td>".$row['id_r'] ."</td>";
          //  // echo "<td>".$row['Id_pol'] ."</td>";
          // //  echo "<td>".$row['id_p1'] ."</td>";
          //  // echo "<td>".$row['id_p2'] ."</td>";
          //  // echo "<td>".$row['id_p3'] ."</td>";
          //   echo "<td>".$row['start_date'] ."</td>";
          //   echo "<td>".$row['end_data'] ."</td>";
          //   echo "<tr>";

          $rc_no=$row4['Registration Nummber'];
      $e_no=$row4['Engine Number'];
      $c_no=$row4['Chassis Number'];
      $prv_pno=$row4['Previous Policy Number'];
            $prv_exdate=$row4['Previous Policy Expiry Date'];
        // $prv_pno=$row3['Registration Date'];
       $r_date=$row4['Registration Date'];
      $prv_isur=$row4['previos_insur'];
      
       $ex_date=$row['end_data'];



      }
    }
    }
    }       

    $sql = "SELECT *from `rc` where `Registered Number` = '$rc_no'";  
$result = mysqli_query($con, $sql);  
$row = mysqli_fetch_array($result);  
$count = mysqli_num_rows($result); 



$model =$row ["Maker's Classification:"];
$e_no=$row ["Engine Number"];
$c_no=$row["Chassis Number"];
$year=$row["Year of mntr"];
$company=$row["Maker's Name"];
          
?>

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
  
  
  .contianer{

    height:150%;
    width:800px;
    border-color: black;
    border-width: 11px;
    margin-left: 400px;
    background-color: rgb(255, 255, 255);
    border: solid;
    


  }
  .table2{
    margin-left: 0px;
    float: right;
    margin-top: 30px;
  }


  .table3{
    margin-top: 260px;
    
  }
  span{
      align-items: center;
      align-self: center;
       align-content: center;
        margin-left: 23%; 
    

  }


    </style>
    <title>Document</title>
</head>
<body>
    <div class="contianer">
    <div class="table1">
    <table align="left" cellpadding = "6" cell boarder="1 | 0" >

        <h3><?php echo $company; ?></h3>
        <h3 ><span>Certificate of Insurance cum Policy Schedule </span> </h3>
        <h3><span>Motor Insurance - Two Wheeler Comprehensive Policy</span></h3><br>


        <h3>Personal Details </h3>
       
        <tr>
          <td>First Name :</td>
          <td><?php echo  $fname; ?></td>
          
        

</tr> 
        <tr>
           <td>Mobile No :</td>
          <td> <?php echo  $m_no ?>
          </td>
          
        </tr> 
        <tr> 
          <td> Email Address</td>
          <td><?php echo  $email ?></td>
        </tr>
         <tr>
          <td>Address</td>
          <td ><?php echo  $address ?></td>
        </tr>
        <tr>
          <td>District</td>
          <td><?php echo  $dist; ?></td>
          
        </tr>
        <tr>
           <td>State</td>
          <td><?php echo  $state; ?></td> 
          <tr>
          <td>Pin</td>
          <td><?php echo  $pin; ?></td>
       </tr></table></div><br>

       <div class="table2" >
        <h3>Policy Details</h3>
        <h6>______________________________________________________________</h6>
        <table cellpadding = "6">
        <tr>
           <td>Policy No :</td>
           <td> <?php echo $policy_no ?></td>
          
          
        </tr>
        <tr>
        <td> Policy issued date :</td>
        <td><?php echo  $prv_exdate; ?></td>
        
        </tr>
        <tr>
            <td> Policy expairy date</td>
            <td><?php echo  $ex_date ?></td>
            
            </tr>
            <tr>
                <td> Policy type :</td>
                <td><?php echo $type ?></td>
                
                </tr>
                <tr>
                    <td> Policy Premium  :</td>
                    <td><?php echo  $amount ?></td>
                    
                    </tr>
            </table>
        </div>
            <div class="table3" >
                <h3>Vehicle Details</h3>
                <h6>______________________________________________________________</h6>
                <table cellpadding = "6">
                <tr>
                   <td>Registration no :</td>
                   <td><?php echo  $rc_no; ?></td>
                  
                  
                </tr>
                <tr>
                <td> company :</td>
                <td><?php echo  $company; ?></td>
                
                </tr>
                <tr>
                    <td> model</td>
                    <td><?php echo  $model; ?></td>
                    
                    </tr>
                    <tr>
                        <td> Engine Number</td>
                        <td><?php echo $e_no ?></td>
                        
                        </tr>
                        <tr>
                            <td>Chassis Number </td>
                            <td><?php echo  $c_no ?></td>
                            
                            </tr>
                            
                            </table>
                  </div>

                            <!-- <h3>Premium Breakups</h3>
                            <h6>______________________________________________________________</h6> -->
                            <table>
                            <tr>
                               <td></td>
                               <td></td>
                              </tr>
                            </table>
                       
                  
                </div>




<?php

?>

<form align='center' action="../customerhomepage/home pagecustomer.php" ><br><br>
       <button type="submit" value="Submit" clsss="btn"><b> TO GO HOME PAGE</b></button>
</body>
</html>
