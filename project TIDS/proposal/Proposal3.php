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
$no = $_SESSION['rc'];


// echo"<h4>Policy ID : $id1</H4>";
 
$sql = "SELECT *from `rc` where `Registered Number` = '$no'";  
$result = mysqli_query($con, $sql);  
$row = mysqli_fetch_array($result);  
$count = mysqli_num_rows($result); 

if($count=1){

$model =$row ["Maker's Classification:"];
$e_no=$row ["Engine Number"];
$c_no=$row["Chassis Number"];
$year=$row["Year of mntr"];
$company=$row["Maker's Name"];
$current_year=date('Y');
}


?>



<html>
<head>

<title>proposel3</title>
<link rel="stylesheet" href="style.css">
</head>

<body>
 
  
  <div class="con">
    <h1>PROPOSEL STEP 3/3</h1>
    
  <table align="center" cellpadding = "10">
    <form action="proposel3_conn.php" method="post">
    <tr>
      <td>Registration Nummber</td>
      <td><input name="rc_no" type="text"  value="<?php echo $no;?>" required autofocus readonly/></td>
      
      <td>Engine Number</td>
      <td ><input name="e_no" type="text" value="<?php echo $e_no;?>" required autofocus readonly/></td>
    </tr>
    <tr>
      <td>Chassis Number</td>
      <td colspan="4"><input class="email" name="c_no" type="text" size="64" rows="2" value="<?php echo $c_no;?>" required autofocus readonly ></td>
    </tr>
    <tr>
      <td>Previous Insurer</td>
      <!-- <td colspan="4"><input type="text"  name="prv_isur" required autofocus/></td> -->
      <td><select   class="select" name="prv_isur" required autofocus>

      
      <option selected disabled>SELECT</option> 
       <option>Acko Genaral</option>
       <option>Bajaj Allianz</option>
       <option>Bharathi Axa</option>
       <option>HDFC ERGO</option>
       <option>ICIC Lombard</option>
       <option>New INDIA</option>
       <option>Oriental</option>
       <option>Cholamandalam</option>
       <option>Kotak</option>
       <option>SBI</option>
       <option>Relience</option>
       <option>Tata AIG</option>
       <option>Royal Sundaram</option>
       <option>United Insurance</option>

       <option>Magma HDI</option>

       <option>OTHERS</option>


      </select></td>
    </tr>
    <tr>
      <td>Previous Policy Number</td>
      <td><input name="prv_pno" type="text"   required autofocus/></td>
      <td>Previous Policy Expiry Date</td>
      <td><input name="prv_exdate" type="date"  min="<?php echo $current_year;?>-01-01" max="<?php echo $current_year;?>-12-31" required autofocus/></td>
    </tr>
    <tr>
      
      <td>Registration Date</td>
      <td><input name="r_date" type="date" name="r_date" required autofocus  min="<?php echo $year;?>-01-01" max="<?php echo $year;?>-12-31"> </td>
    </tr>
    
    <tr>
      <td></td>

      <td colspan="4"><button type="submit" value="Submit" class="submit"> <h3>SUBMIT</h3></button></td>
      
    </tr>
    </form>
    
  </table>
 </div>
</body>
</html>
