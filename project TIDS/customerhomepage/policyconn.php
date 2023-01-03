<?php
$hostname="localhost"; //local server name default localhost
$username="root";  //mysql username default is root.
$password="";       //blank if no password is set for mysql.
$database="vis";  //database name which you created
session_start();

$con=mysqli_connect($hostname, $username, $password, $database);


if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}

    $id_p = $_GET['policy_id'];
    $_SESSION["policyid"]=$id_p;
    // $_SESSION["id_r"]=$id1;



// echo $duration=$_GET['duration']
// sql to delete a record
// $sql = "DELETE FROM `policy details` WHERE id='$id1'";

// if (mysqli_query($con, $sql)) {
//     header('location:viewpolicy.php');
  
// } else {
//   echo "Error deleting record: " . mysqli_error($conn);
// }

// mysqli_close($con);
// ?>

<html>
    <head>
        <style>

            body{

                background-image:linear-gradient(rgba(185, 181, 181, 0.5),rgba(194, 191, 191, 0.5)), url(../images/Screenshot\ 2022-07-22\ 205529.png);
                background-size: cover;
                background-position: center;
                
        
        background-repeat: no-repeat;
                
            }

.Vdetails
{
    width: 300px;
    height: 400px;;
    box-shadow: 0 0 3px 0 rgba(10, 0, 0, 0.3);
    background-color: rgb(250, 248, 252);
    padding: 3px;
    margin-top: 60px;
    margin-left: 400px;
    margin-bottom: 5px;
    text-align: left; 
    /* border: 4px outset rgb(253, 154, 5); */
    opacity: 1;
    border-radius: 10px;
    background-color: rgb(255, 255, 255);
    

}  
.Vdetails h1
{
    color: #043ed3;
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
    border: 1px solid rgb(125, 119, 237);
    outline:rgb(211, 5, 5);
    margin-left: px;
    padding-left: 2px;
}
.Vdetails h5{


    margin-top: 2px;
    margin-bottom: 2px;
    margin-left: px;



}


select {
   -webkit-appearance:none;
   -moz-appearance:none;
   -ms-appearance:none;
   appearance:none;
   outline:0;
   box-shadow:none;
   border:0!important;
   background: #d0d1d9;
   background-image: none;
   flex: 1;
   padding: 0 .5em;
   color:#fff;
   cursor:pointer;
   font-size: 1em;
   font-family: 'Open Sans', sans-serif;
}
select::-ms-expand {
   display: none;
}
.select {
   position: relative;
   display: flex;
   width: 15em;
   height: 3em;
   line-height: 3;
   background: #4e6ae6;
   overflow: hidden;
   border-radius: .25em;
   margin-top: 30px;
   margin-left: 15px;
   margin-bottom: 20px;
   

}
.select::after {
   content: '\25BC';
   position: absolute;
   top: 0;
   right: 0;
   padding: 0 1em;
   background: #2b2e2e;
   cursor:pointer;
   pointer-events:none;
   transition:.25s all ease;
}
.select:hover::after {
   color: #23b499;
}
.submit{
    background-color: #043ed3;
    color: #fff;
    margin-left: 20px;
    width: 15em;
   height: 3em;
   border-radius: .25em;
}
</style>
   <!-- <link rel= "stylesheet" href="style.css"> -->
   <!-- <link rel= "stylesheet" href="price.css"> -->
   

</head>

<body>

 
<h1 class="h1"><b> </b></h1>
<div class="vdetails">
  <h1>How Many Year You Wish Take policy </h1>
  
  <form action="durationconn.php" method="POST">
  <select  name="duration" class="select" type="number" required autofocus>
     
       <option value="1"><b>1 YEAR</b></option>
       <option value="2">2 YEAR</option>
       <option value="3">3 YEAR</option>
      

      </select>
  
  <input type="submit" value="OK" class="submit">
</div>
</html>

