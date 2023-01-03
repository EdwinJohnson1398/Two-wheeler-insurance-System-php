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

$name =$row ["Name of Regd. Owner"];
$address=$row["Permanent Address"];

}


?>
<html>
<head>

<title>propose1</title>
<link rel="stylesheet" href="style.css">
</head>

<body>
 
  
  <div class="con">
    <h1>PROPOSEL STEP 1/3</h1>
    
  <table align="center" cellpadding = "10">
    <form action="proposal1_conn.php" method="post">
    <tr>
      <td>Name</td>
      <td><input name="f_name" type="text" rows="" placeholder="Vehicle owner's" value="<?php echo $name; ?>" required autofocus readonly /></td>
      <td>Mobile No</td>
      <td ><input name="m_no" type="tel" required autofocus/></td>
    </tr>
    <tr>
      <td>Email Address</td>
      <td colspan="4"><input class="email" name="email" type="email" size="64" rows="2" v></td>
    </tr>
    <tr>
      <td>Address</td>
      <td colspan="5"><textarea name="address" cols="58" rows="3" "  pattern="[a-zA-Z'-'\s]*" required autofocus><?php echo $address; ?></textarea></td>
    </tr>
    <tr>
      <td>District</td>
      <td><input name="dist" type="text"  pattern="[A-Z'-'\s]*" required autofocus /></td>
      <td>State</td>
      <td><input name="state" type="text" pattern="[A-Z'-'\s]*"required autofocus   /></td>
    </tr>
    <tr>
      <!-- <td>Cuntry</td>
      <td><input name="" type="text" /></td> -->
      <td>Pin</td>
      <td><input name="pin" type="text" required autofocus /></td>
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
