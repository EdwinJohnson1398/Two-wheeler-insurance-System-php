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



$sql = "SELECT * FROM `registration`";
$result = mysqli_query($con, $sql);

 ?>

</body>
</head>









<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
HTML CSS JSResult Skip Results Iframe
EDIT ON

h1{
  font-size: 30px;
  color: #fff;
  text-transform: uppercase;
  font-weight: 300;
  text-align: center;
  margin-bottom: 15px;
}
table{
  width:100%;
  table-layout: fixed;
}
.tbl-header{
  background-color: rgba(255,255,255,0.3);
 }
.tbl-content{
  height:600px;
  overflow-x:auto;
  margin-top: 0px;
  border: 1px solid rgba(255,255,255,0.3);
}
th{
  padding: 20px;
  text-align: left;
  font-weight: 500;
  font-size: 12px;
  color: rgb(12, 12, 12);
  text-transform: uppercase;
  padding-left:1px;
}
td{
  padding: 15px;
  text-align: left;
  vertical-align:middle;
  padding-left:1px;
  font-weight: 300;
  font-size: 12px;
  color: rgb(11, 10, 10);
  border-bottom: solid 1px rgba(255,255,255,0.1);
}


/* demo styles */

@import url(https://fonts.googleapis.com/css?family=Roboto:400,500,300,700);
body{
  background: -webkit-linear-gradient(left, #daedf1, #b1b7b8);
  background: linear-gradient(to right, #e2e4e4, #b1bdbe);
  font-family: 'Roboto', sans-serif;
}
section{
  margin: 50px;
}


/* follow me template */
.made-with-love {
  margin-top: 40px;
  padding: 10px;
  clear: left;
  text-align: center;
  font-size: 10px;
  font-family: arial;
  color: #fff;
}
.made-with-love i {
  font-style: normal;
  color: #F50057;
  font-size: 14px;
  position: relative;
  top: 2px;
}
.made-with-love a {
  color: #fff;
  text-decoration: none;
}
.made-with-love a:hover {
  text-decoration: underline;
}


/* for custom scrollbar for webkit browser*/

::-webkit-scrollbar {
    width: 6px;
} 
::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
} 
::-webkit-scrollbar-thumb {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
}
button{
  padding: 0.5rem 1.5rem;
  cursor: pointer;
  border-radius: 4px;
  background-color: #f1ebeb;
  color: rgb(246, 239, 239);
  border: 1px solid #e1d7dc;
  margin-top:2px;
  
}






    </style>

    <title>Document</title>
</head>
<body>
    <section>
        <!--for demo wrap-->
        <h1>All Registered Users</h1>
        <div class="tbl-header">
          <table cellpadding="0" cellspacing="0" border="0">
            <thead>
              <tr>
              <th>ID</th>
                <th>Name</th>
                <th>Phone No</th>
                <th>Email</th>
                <th>Password</th>
                
              </tr>
            </thead>
          </table>
        </div>
        <div class="tbl-content">
          <table cellpadding="0" cellspacing="0" border="0">
            <tbody>
              <?php

            if (mysqli_num_rows($result) > 0)

 {



  while($row = mysqli_fetch_assoc($result)) 

  {
   
    echo "
    <tr>
    <td>".$row["id_r"]."</td>
    <td>".$row ["name"]."</td>
    <td>".$row ["phonenumber"]."</td>

    <td>".$row ["emailid"]."</td>
    <td>".$row ["password"]."</td>
   
    
    

    
    </tr>";
    
  }
}
?>
             
            </tbody>
          </table>
        </div>
      </section>
      
      
      <!-- follow me template -->
      <div class="made-with-love">
       
      </div>
    
</body>
</html>