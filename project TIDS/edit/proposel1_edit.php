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

if($count>=1){



      $fname=$row['first_name'];
      $lname=$row['last_name'];
      $m_no=$row['mobile_no'];
      $email=$row['emai_adress'];
      $address=$row['address'];

      $dist=$row['district'];
      $state=$row['state'];
      $pin=$row['pin'];
}

?>


<html>
    <head><tittle>


    <tittle>
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

h1{
    
  font-family: Arial, Helvetica, sans-serif; 
  font-size: 25px;         
  font-style: normal; 
  font-weight: bold; 
  color:#fefefe;
  text-align: center; 
  margin-top:5px;
  
}

table{
  font-family: Calibri; 
  color:#111010; 
  font-size: 11pt; 
  font-style: normal;
  font-weight: bold;
  background-color: #FFFFFF; 
  border-collapse: collapse; 
  border-radius:1px;
  box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.075);
  width: 100%;

}

.submit{
    
    padding-bottom: 10px;
    font-size: 18px;
    font-weight: bold;
    background-color: #041330;
    border: none;
    color: white;
   	width:400px;
    height: 50px;

}
input{
  border-left: 0mm;
  border-top: 0px;
  border-right:0px ;
  width: 200px;
  height:40px ;
  padding-left: 5px;
  padding: auto;

}
h3{
  margin-bottom:4px;
}
.select{
  width: 200px;
  height: 40px;




}






</style>
</head>
<body>
<div class="con">
  <h1>PROPOSEL STEP 1/3</h1>
  
<table align="center" cellpadding = "10">
  <form action="proposal1_eddit_conn.php" method="post">
  <tr>
    <td> Name</td>
    <td><input name="f_name" type="text" rows="" placeholder="Vehicle owner's" value="<?php echo $fname; ?>" required autofocus readonly /></td>
    <td>Mobile No</td>
    <td ><input name="m_no" type="tel" value="<?php echo $m_no; ?>" required autofocus/></td>
  </tr>

  <tr>
    <td>Email Address</td>
    
    <td colspan="4"><input class="email" name="email" type="email" size="64" rows="2" value="<?php echo $email; ?>"></td>
  </tr>
  <tr>
  <td>Address</td>
      <td colspan="5"><textarea name="address" cols="58" rows="3" "  pattern="[a-zA-Z'-'\s]*" required autofocus><?php echo $address; ?></textarea></td>
  </tr>
  <tr>
    <td>District</td>
    <td><input name="dist" type="text" required autofocus value="<?php echo $dist; ?>" /></td>
    <td>State</td>
    <td><input name="state" type="text"required autofocus value="<?php echo $state; ?>"/></td>
  </tr>
  <tr>
    <!-- <td>Cuntry</td>
    <td><input name="" type="text" /></td> -->
    <td>Pin</td>
    <td><input name="pin" type="text" required autofocus value="<?php echo $pin; ?>" /></td>
  </tr>
  
  <tr>
    <td></td>

    <td colspan="4"><button type="submit" value="Submit" class="submit" required autofocus> <h3>SUBMIT</h3></button></td>
    
  </tr>
  </form>
  
</table>
</div>
</body>
</html>


