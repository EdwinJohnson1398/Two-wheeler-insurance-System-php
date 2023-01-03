
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
 
$sql = "SELECT *from `proposel2` where `v__no` = '$id_r'
      ORDER BY `id_p2` DESC LIMIT 1";  
$result = mysqli_query($con, $sql);  
$row = mysqli_fetch_array($result);  
$count = mysqli_num_rows($result); 

if($count>=1){



      $fname=$row['n_name'];
      $relation=$row['relation'];
      $age=$row['age'];
      
}

?>

<html>
<head>

<title>proposel2</title>
<link rel="stylesheet" href="../proposal/style.css">
</head>



<body>
 
  
  <div class="con">
    
  <table align="center" cellpadding = "10">
    <h1>PROPOSEL STEP 2/3</h1>
    <form action="p3edit_conn.php" method="post"> 
    <tr>
      <td>Nominiee Name</td>
      <td><input name="name"  type="text" value="<?php echo $fname ?>" rows="" pattern="[a-zA-Z'-'\s]*" required autofocus/></td>
     
    </tr>
  
  
    <tr>
       <td> Relation Ship</td>
      <td> <select  name="Relation" class="select" required autofocus>
        <option selected disabled>SELECT</option> 
      <option>SON</option>
     
       <option>DAUGHTER</option>
       <option>WIFE</option>
       <option>HUSBAND</option>
       <option>FATHER</option>
       <option>MOTHER</option>
       <option>FRIEND</option>
       <option>RELATIVE</option>


      </select></td>
      <!-- <td>Mobile No</td>
      <td ><input name="" type="text" /></td> -->
    </tr> 
    <tr> 
      <td>Nominee Age</td>
      <td colspan="4"><input type="number" class="email" name="age" type="number"size="64" rows="2" min="18" value="<?php echo $age ?>" required></td>
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