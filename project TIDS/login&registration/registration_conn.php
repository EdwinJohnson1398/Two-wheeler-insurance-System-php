<?php
$servername="localhost";
$username="root";
$password="";
$database_name="vis";

$conn = mysqli_connect($servername,$username,$password,$database_name);
// Check connection
if (mysqli_connect_errno())
 {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
  }
  
      
      $name=$_POST['first_name'];
      $email1=$_POST['email'];
      $phoneno1=$_POST['phoneno'];
      $passwrd=$_POST['password'];
      
      

      $sql_query="INSERT INTO registration (`name`,phonenumber,emailid,`password`)
      VALUES ('$name','$phoneno1','$email1','$passwrd')";

      if (mysqli_query($conn, $sql_query))
      {
          echo "success fully Register";
         /* header('location:../home page/index.html');?>*/
          ?> <form align='center' action="login&registration.html" ><br><br>
   
            <button type="submit" value="Submit" clsss="btn"><b> BACK TO LOGIN </b></button></form><?php
      }
      else
      {
          echo "Error: " . $sql_query."<br>" . mysqli_error($conn);
         
      }
      mysqli_close($conn);
  ?>