
<?php
session_start();
if(!isset($_SESSION["name"]))
{
    header("location:../loggin/login.html");

}
error_reporting(0);
$hostname="localhost"; //local server name default localhost
$username="root";  //mysql username default is root.
$password="";       //blank if no password is set for mysql.
$database="vis";  //database name which you created

$con=mysqli_connect($hostname, $username, $password, $database);
$s2=$_SESSION['id_r'];

if(! $con)
{
die('Connection Failed'.mysql_error());
}




$sql = "SELECT *from `registration` where id_r = '$s2'";  
$result = mysqli_query($con, $sql);  
$row = mysqli_fetch_array($result);  
$count = mysqli_num_rows($result); 
$name=$row ["name"]; 

$Phone_no=$row ["phonenumber"];
$email=$row["emailid"];
$password=$row["password"];








?>

<!DOCTYPE html>
<html>
    <head>
        <title>Home Page</title>
        <link rel="stylesheet"  type="text/css" href="homecustomer.cs">
        <style>
         *{
margin: 0px;
padding: 0px;
font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
}

header{
background-image:linear-gradient(rgba(185, 181, 181, 0.5),rgba(194, 191, 191, 0.5)), url("../images/bike5.jpg");
height: 100vh;
background-size: cover;
background-position: center;
padding: 0px;
margin-left: 20%;

}
body {
    background: rgb(169, 4, 4);

}
ul{
    float: right;
    list-style-type:none;
    padding:0px ;
    margin-top: 8px;
}
ul Li
{
display: inline-block;
}
ul Li a
{
    text-decoration: none;
    color:rgb(41, 3, 102);
    padding: 5px 10px;
    transition:0.6s ease ;
    margin-left:;
}


.main 
 {
     max-width: 1200px;
     margin: auto;


}
.title
{
position:absolute;
top: 18%;
bottom: 70%;
left: 4%;
}
.title
{
color: rgb(177, 7, 21);
font-size: 50px;
margin-left: 11%;
display:inline-flex;
margin-top: 5%;
}
.logo
{
margin-top: 10px;    
width: 100px;

}
.button
{
position:absolute;
top: 50%;
left:32%;
transform: translate(-50%,-50%);

}
.btn 
{
border: 1px solid ;
border-color: indigo;
padding: 5px 30px;
color: indigo;
text-decoration: none;
transition: 00.6s ease;
}

.btn:hover {

    background-color: rgb(34, 5, 80);
    color: rgb(222, 222, 223);

}
.btn1
{

color: indigo;
text-decoration: none;
transition: 00.6s ease;
}

.btn1:hover {

    background-color: rgb(87, 8, 191);
    color: rgb(222, 222, 223);

}
.v
{
    color: rgb(247, 241, 241);
    margin-top:0px;
    margin-right: 4px;
}  
.container {
    /* background: #fff; */
    border-radius: 10px;
    box-shadow: 0 14px 28px rgba(0, 0, 0, .2), 0 10px 10px rgba(0, 0, 0, .2);
    position: relative;
    overflow: hidden;
    width: 350px;
    max-width: 100%;
    /* min-height: 480px; */
    float:right;
    margin-top: 150px;
    margin-left: 400px;
    margin-right: 40px;
    opacity: 1;
    padding-left: 10px;
    height: 300px;
    

}

.form-container form {
    /* background: #fff; */
    display: flex;
    flex-direction: column;
    padding:  0 50px;
    height: 100%;
    justify-content: center;
    align-items: center;
    text-align: center;
}
.container h1
{
    color: #100101;
    margin-bottom: 5px;
    position:center;
    margin-left: 10px;
    margin-top: 10px;
    
    
   
}
.container h3
{
    color: #ae0505;
    margin-bottom: 5px;
    position:center;
    margin-left: 10px;
    margin-top: 10px;
    
    
    
   
}
.vdetails{
    width: 200px;
    margin-left: -220px;
    margin-top: 0px; ;

}




.input-box
{
    border-radius:0px;
    padding: 10px;
    margin: 10px 0;
    width: 180px;
    border: 0px solid rgb(17, 2, 2);
    outline:rgb(157, 3, 3);
    /* background-color:rgb(169, 4, 4);; */
    height:35px;
    margin-left: -10px;
    border-radius: 10px;
    margin-top: 10px;
    font-size: 17px;
    color:black;
    

    
}


.submit

{

padding: 5px;
color: rgb(237, 240, 241);
background-color: #ec1215;
border: 0px solid rgb(17, 2, 2);
width: 55%;
border-radius:0;
font-size: 15px;
cursor: pointer;
margin:10px 0;
opacity: 1;
margin-left: 13%;
height: 50px;
border-radius: 10px;

}
.submit:hover{
    background-attachment: #05a593;
    color: rgb(11, 2, 2);


}





</style>   
    </head>

    <body>
        <header>
            <div class = "main">
                <ul>
                    <Li><a href="../home page/" class="btn1">LOG OUT</a></Li>
                    <!-- <Li><a href="../add vehicle/Add Vehicle Details.html" class="btn1">TAKE POLICY</a></Li>
                     -->
                    <Li><a href="invoice.php" class="btn1">INVOICE</a></Li>
                    
                    <Li><a href="../customerhomepage/home pagecustomer.php" class="btn1">HOME</a></Li>
                    
                    </ul>

            </div>



           
<?php
echo'<h3> WELCOME TO V INSURANCE </H3>';
echo $_SESSION["name"]

  ?>    
  <div class="vdetails">
 
  
 <form action="update_customer_connection.php" method="POST">
   
 
 <input type="text" name="name" class="input-box"  value="<?php echo $name;?> "required autofocus readonly>
 
 <input type="text" name="Phone_update" class="input-box" placeholder="Phone NO"value="<?php echo $Phone_no;?>"required readonly>
 <input type="text" name="email" class="input-box" placeholder ="Email"value="<?php echo $email;?>"required readonly>
 
 <!-- <input type="text" name="password" class="input-box" placeholder="Password"value="<?php echo "Password :" .$password;?>"required>
 <input type="text" name="password2" class="input-box" placeholder="Conform password"value="<?php echo "Conform password :" .$password;?>"required> -->
 
    

</header>


 


  




         </body>
</html>

</html>
