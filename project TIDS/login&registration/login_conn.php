
<?php
$hostname="localhost"; //local server name default localhost
$username="root";  //mysql username default is root.
$password="";       //blank if no password is set for mysql.
$database="vis";  //database name which you created

session_start();
error_reporting(0);

$con=mysqli_connect($hostname, $username, $password, $database);

if(! $con)
{
die('Connection Failed'.mysql_error());
}
if($_SERVER["REQUEST_METHOD"]=="POST")
{



$email = $_POST['email'];
$password = $_POST['password'];

$sql1 = "SELECT *from admin  where `user_name` = '$email' and `password` = '$password'";  
$result1 = mysqli_query($con, $sql1);  
$row1 = mysqli_fetch_array($result1);  
$count1 = mysqli_num_rows($result1);







if($count1 == 1)
{
    header("Location:../admin/dashboard/index.php");

}
else {
    $sql = "SELECT *from registration where emailid = '$email' and `password` = '$password'";  
    $result = mysqli_query($con, $sql);  
    $row = mysqli_fetch_array($result);  
    $count = mysqli_num_rows($result);
    



         $name =$row ["name"];
         ;
   if($count == 1){ 
    
    $_SESSION['name']=$name; 
    $id1=$row["id_r"];
    $_SESSION["id_r"]=$id1;
    
    header("Location:../customerhomepage/home pagecustomer.php");

}
    
else{  

    echo  $email;
    echo $password;
    echo "<h1> Login failed. Invalid username or password.</h1>";  
   
}
}
mysqli_close($con);
}
?>
