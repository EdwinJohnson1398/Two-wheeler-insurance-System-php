
<?php
session_start();
$hostname="localhost"; //local server name default localhost
$username="root";  //mysql username default is root.
$password="";       //blank if no password is set for mysql.
$database="vis";  //database name which you created

$con=mysqli_connect($hostname, $username, $password, $database);

if(! $con)
{
die('Connection Failed'.mysql_error());
}
// $no = $_POST['Vehicle_No'];


// echo"<h4>Policy ID : $id1</H4>";

$id_r=$_SESSION["rc"];

//proposel1
 
$sql = "SELECT *from `proposel1` where `v_no` = '$id_r'
      ORDER BY `id_proposel1` DESC LIMIT 1";  
$result = mysqli_query($con, $sql);  
$row = mysqli_fetch_array($result);  
$count = mysqli_num_rows($result); 





      $fname=$row['first_name'];
      $lname=$row['last_name'];
      $m_no=$row['mobile_no'];
      $email=$row['emai_adress'];
      $address=$row['address'];

      $dist=$row['district'];
      $state=$row['state'];
      $pin=$row['pin'];



//proposel2


     $sql_2 = "SELECT * from `proposel2` ORDER BY `id_p2` DESC LIMIT 1";
    $result2 = mysqli_query($con, $sql_2);  
    $row2 = mysqli_fetch_array($result2);   
    $count2 = mysqli_num_rows($result2); 



      $Nname=$row2['n_name'];
      $relation=$row2['relation'];
      $age=$row2['age'];

//propose3
   $sql3 = "SELECT *from `poposel3` where `Registration Nummber` = '$id_r'
    ORDER BY `id_p3` DESC LIMIT 1";
  $result3 = mysqli_query($con, $sql3);  
  $row3 = mysqli_fetch_array($result3);  
  $count3 = mysqli_num_rows($result3); 



if($count3>=1){
  $rc_no=$row3['Registration Nummber'];
      $e_no=$row3['Engine Number'];
      $c_no=$row3['Chassis Number'];
      $prv_pno=$row3['Previous Policy Number'];
      $prv_exdate=$row3['Previous Policy Expiry Date'];
      // $prv_pno=$row3['Registration Date'];
      $r_date=$row3['Registration Date'];
      $prv_isur=$row3['previos_insur'];
}

$id_r=$_SESSION["policyid"];

$sql_p = "SELECT *from `policy details` where `id` ='$id_r' ";  
$result_p = mysqli_query($con, $sql_p);  
$row_p = mysqli_fetch_array($result_p);  
$count_p = mysqli_num_rows($result_p);





?>













<html>
<head>

<title>REVIEW FORM</title>
<link rel="stylesheet" href="REVIEW.css">
<style>
body{ background:#ffffff;}
.con{
  width: 600px;
  background:#130f1a;
  margin:0 auto;
  padding-top:10px;
  padding-bottom:1px;
  margin-top: 40px;
  /* height: 700px; */
}

h2{
    
  font-family: Arial, Helvetica, sans-serif; 
  font-size: 25px;         
  font-style: normal; 
  font-weight: bold; 
  color:#050000;
  text-align: center; 
  margin-top:5px;
  width: 50%;
  float: left;
  margin-left: 20px;
  
}

table{
  font-family: Calibri; 
  color:#111010; 
  font-size: 11pt; 
  font-style: normal;
  font-weight: bold;
  background-color: #ffffff; 
  border-collapse: collapse; 
  border-radius:1px;
  box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.075);
  width: 70%;
  height: 10%;
  float: left;
  padding: 3px;
}

.submit{
    
    padding-bottom: 10px;
    font-size: 18px;
    font-weight: bold;
    background-color: #f1f3f8;
    border: none;
    color: white;
   	width:60px;
    height: 30px;
    margin-left: 70%;
    border-radius: 10px;

}
input{
  border-left: 0mm;
  border-top: 0px;
  border-right:0px ;
  width: 202px;
  height:40px ;
  padding-left: 5px;
  /* padding: auto; */
  margin-bottom: 1px;

}
h5{
  margin-top:3px;
  color: #041330;
}
.select{
  width: 200px;
  height: 40px;




}
.Vdetails
{
    width: 240px;
    height: 400px;;
    box-shadow: 0 0 3px 0 rgba(10, 0, 0, 0.3);
    background-color: rgb(250, 248, 252);
    padding: 3px;
    margin-top: 60px;
    margin-left:75%;
    margin-bottom: 5px;
    text-align: left; 
    /* border: 4px outset rgb(253, 154, 5); */
    opacity: 1;
    border-radius: 10px;
    background-color: rgb(250, 248, 252);
    margin-top: 30px;
    

}  
.Vdetails h1
{
    color: #010204;
    margin-bottom: 6px;
    margin-left: 10px;
    margin-top: 1px;
    
   
}




.input-box
{
    border-radius:2px;
    padding: 10px;
    /* margin: 10px 0; */
    width: 98%;
    border: 1px solid rgb(8, 8, 14);
    outline:rgb(211, 5, 5);
    margin-left: px;
    padding-left: 2px;
}
.Vdetails h5{


    margin-top: 2px;
    margin-bottom: 2px;
    margin-left: px;

}
.btn {
  border-radius: 10px;
  border: 1px solid #ff4b2b;
  background: #ff445c;
  color: #fff;
  font-size: 12px;
  font-weight: bold;
  padding: 12px 45px;
  letter-spacing: 1px;
  text-transform: uppercase;
  transition: transform 80ms ease-in;
  margin-left:110px;
  margin-top:40px;
}
</style>






</head>





<body>
 
  
  
    <h2>SUMMARY</h2>
    
  <table align="center" cellpadding = "10">
    <form action="#" method="post">
    <tr>
      <td>First Name</td>
      <td><input disabled name="" type="text" rows="" placeholder="Vehicle owner's"  value="<?php echo $fname; ?>"/></td>
      
   
    </tr> 
    <tr> 
      
      <td>Mobile No</td>
      <td ><input name="" type="text"  disabled value="<?php echo $m_no; ?>" /></td>
   
      <td>Email Address</td>
      <td colspan="4"><input class="email" name="email" type="text"  disabled value="<?php echo $email; ?>"></td>
    </tr>
    <tr>
      <td>Address</td>
      <td colspan="4"><textarea name="" cols="24" rows="3" width= "60%" disabled value><?php echo $address; ?>"</textarea></input></td>
    </tr>
    <tr>
      <td>District</td>
      <td><input name="" type="text"  disabled value="<?php echo $dist; ?>"/></td>
      <td>State</td>
      <td><input name="" type="text"disabled value="<?php echo $state; ?>" /></td>
    </tr>
    <tr>
      
      <td>Pin</td>
      <td><input name="" type="text" disabled value="<?php echo $pin; ?>"/></td>
    </tr>
   
    
    <td colspan="4"><button type="submit" value="Submit" class="submit"  > <h5> <a href="../edit/proposel1_edit.php ">EDIT </a></h5></button></td>
   
    </form>
    
  </table>
 </div>
 
    
    <table align="center" cellpadding = "10">
      <h2>Nominee DETAILS</h2>
      <form action="#" method="post"> 
      <tr>
        <td>Nominiee Name</td>
        <td><input name="" type="text" rows="" placeholder="Vehicle owner's" disabled value="<?php echo $Nname; ?>"/></td>
        
        <td>Relation Ship</td>

        <td><input name="" type="text" rows="" name=" Relation" placeholder="Vehicle owner's" disabled value="<?php echo $relation; ?>"/></td>
        
      </tr>  
      <tr> 
        <td>Nominee Age</td>
        <td colspan="4"><input class="email" name="email" type="number"size="64" rows="2" min="18" disabled value="<?php echo $age; ?>"></td>
      </tr>
      
    
      
      <tr>
         <td></td>
        
        
      </tr> 
      <td colspan="4"><button type="submit" value="Submit" class="submit"  > <h5> <a href="../edit/proposel2_edit.php ">EDIT </a></h5></button></td>
      </form>
      
    </table>
   
    
    
  <table align="center" cellpadding = "10">
    
    <form action="proposel2.html" method="post">
        <h2>Vehicle Details</h2>
    <tr>
      <td>Registration Nummber</td>
      <td><input name="" type="text"  disabled value="<?php echo $rc_no; ?>"/></td>
      
      </select></td> 
      <td>Engine Number</td>
      <td ><input name="" type="text" disabled value="<?php echo $e_no; ?>" /></td>
    </tr>
    <tr>
      <td>Chassis Number</td>
      <td colspan="4"><input class="email" name="email" type="text"  disabled value="<?php echo $c_no; ?>"></td>
    </tr>
    <tr>
      <td>Previous Insurer</td>
      <td colspan="4"><input name=""  disabled value="<?php echo $prv_isur; ?>"></input></td>
    </tr>
    <tr>
      <td>Previous Policy Number</td>
      <td><input name="" type="text" disabled value="<?php echo $prv_pno; ?>" /></td>
      <td>Previous Policy Expiry Date</td>
      <td><input name="" type="date" disabled value="<?php echo $prv_exdate; ?>"/></td>
    </tr>
    <tr>
     
      <td>Registration Date</td>
      <td><input name="" type="date"  disabled value="<?php echo $r_date; ?>"/></td>
    </tr>
    
    <tr>
      <td></td>

      
      
    </tr>
    <td colspan="4"><button type="submit" value="Submit" class="submit"> <h5><a href="../edit/p3edit.php ">EDIT </a></h5></button></td>
    </form>
    
  </table>
 </div>

 <div class="vdetails">
    <h1>Policy details </h1>
    
    <form action="../update policy and user/update_item_conn.php" method="POST">
    <h5>Policy Number<h5>
    <input type="text" name="model" class="input-box" disabled placeholder="Policy Id" value="<?php echo $row_p['policy_no'] ;?>" required autofocus>
    <h5>Company<h5>
    <input type="text" name="r_no" class="input-box"disabled  placeholder="Company Name"value="<?php echo $row_p['company'];?>" maxlength="15" required >
    <h5>Policy Type<h5>
    <input type="text" name="enginno" class="input-box"disabled  placeholder="Policy_type"value="<?php echo $row_p['Policy_type'];?>" maxlength="20" required >
    <h5>IDV<h5>
    <input type="text" name="ch_no" class="input-box"disabled  placeholder ="IDV Amount"value="<?php echo $row_p['IDV'];?>" maxlength="10" required >
    <h5>Total premium amount<h5>
    
    <input type="year" name="year" class="input-box" disabled placeholder="Year of Duration"value="<?php echo $_SESSION["duration"]*$row_p['premiumamount'];?>"  max="10" required>
    <h5>Tennure Year<h5>
    <input type="text" name="company" class="input-box" disabled value="<?php echo $_SESSION["duration"];?>"  required>
    
  </div>

  <div >

   <button  value="SUBMIT" class="btn"><a href="review_conn.php"> PAY SECURE<a/> </button>

  </div>
</body></head>

