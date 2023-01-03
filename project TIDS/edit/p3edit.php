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

$id_r=$_SESSION['rc'];

//proposel1
 
$sql = "SELECT *from `poposel3` where `Registration Nummber` = '$id_r'
      ORDER BY `id_p3` DESC LIMIT 1";  
$result = mysqli_query($con, $sql);  
$row = mysqli_fetch_array($result);  
$count = mysqli_num_rows($result); 

if($count>=1){


      $rc=$row['Registration Nummber'];
      $ec=$row['Engine Number'];
      $cc=$row['Chassis Number'];

      $ppn=$row['Previous Policy Number'];
      $ppxd=$row['Previous Policy Expiry Date'];
      $rd=$row['Registration Date'];
      $pi=$row['previos_insur'];
      $current_year=date('Y');

    //    $ppxd=date_format($ppxd,"Y/m/d");
    // $newDate =$ppxd;
    //    $newDate = date("d-m-Y", time());
    //    echo $newDate;
}

?>

<html>
<head>

<title>proposel3</title>
<link rel="stylesheet" href="../proposal/style.css">
</head> 

<body>
 
  
  <div class="con">
    <h1>PROPOSEL STEP 3/3</h1>
    
  <table align="center" cellpadding = "10">
    <form action="p2edit_con.php" method="post">
    <tr>
      <td>Registration Nummber</td>
      <td><input name="rc_no" type="text"  value="<?php echo $rc;?>" required autofocus readonly/></td>
      
      <td>Engine Number</td>
      <td ><input name="e_no" type="text" value="<?php echo $ec;?>" required autofocus readonly/></td>
    </tr>
    <tr>
      <td>Chassis Number</td>
      <td colspan="4"><input class="email" name="c_no" type="text" size="64" rows="2" value="<?php echo $cc;?>" required autofocus readonly ></td>
    </tr>
    <tr>
      <td>Previous Insurer</td>
      <!-- <td colspan="4"><input type="text"  name="prv_isur" required autofocus/></td> -->
      <td><select   class="select" name="prv_isur" required autofocus>

      
      <option ><?php echo $pi;?></option> 
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
      <td><input name="prv_pno" type="text"value=" <?php echo $ppn;?>"  required autofocus/></td>
      <td>Previous Policy Expiry Date</td>
      <td><input name="prv_exdate" type="date"  min="<?php echo $current_year;?>-01-01" max="<?php echo $current_year;?>-12-31" required autofocus/></td>
    </tr>
    <tr>
      
      <td>Registration Date</td>
      <td><input name="r_date" type="date"   required autofocus> </td>
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
