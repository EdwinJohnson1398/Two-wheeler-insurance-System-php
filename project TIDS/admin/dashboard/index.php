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
$sql = "SELECT * FROM `policy details`";
$result = mysqli_query($con, $sql);
$count_p=mysqli_num_rows($result);

$sql_r = "SELECT * FROM `registration`";
$result_r = mysqli_query($con, $sql_r);
$count_r=mysqli_num_rows($result_r);

$date_today=date("Y-m-d");

$sql_e = "SELECT * FROM finel where end_data>'$date_today'";
$result_e = mysqli_query($con, $sql_e);
$count_e=mysqli_num_rows($result_e);





?>
<!Doctype HTML>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="#" type="text/css"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    body{
	margin:0px;
	padding: 0px;
	background-color:#edf6f6;
	/* overflow: hidden; */
	font-family: system-ui;
  background-size: cover;
    background-position: center;
       
  background: -webkit-linear-gradient(left, #25c481, #25b7c4);
  background: linear-gradient(to right, #25c481, #25b7c4);
  font-family: 'Roboto', sans-serif;

}
.clearfix{
	clear: both;
}
.logo{
	margin: 0px;
	margin-left: 28px;
    font-weight: bold;
    color:#272c4a;
    margin-bottom: 30px;
}
.logo span{
	color: #f7403b;
}
.sidenav {
  height: 100%;
  width: 300px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #f7f6f6;
  overflow: hidden;
  transition: 0.5s;
  padding-top: 30px;
}
.sidenav a {
  padding: 15px 8px 15px 32px;
  text-decoration: none;
  font-size: 20px;
  color: #0e0505;
  display: block;
  transition: 0.3s;
}
.sidenav a:hover {
  color: #f1f1f1;
  background-color: #310e49;
}

#main {
  transition: margin-left .5s;
  padding: 16px;
  margin-left: 300px;
}
.head{
	padding:20px;
}
.col-div-6{
	width: 50%;
	float: left;
}
.profile{
	display: inline-block;
	float: right;
	width: 160px;
}
.pro-img{
	float: left;
	width: 40px;
	margin-top: 5px;
}
.profile p{
	color: rgb(26, 2, 2);
	font-weight: 500;
	margin-left: 55px;
	margin-top: 10px;
	font-size: 13.5px;
}
.profile p span{
	font-weight: 400;
    font-size: 12px;
    display: block;
    color: #0c0101;
}
.col-div-3{
	width: 25%;
	float: left;
}
.box{
	width: 85%;
	height: 100px;
	background-color: #310e49;
	margin-left: 10px;
	padding:10px;
}
.box p{
	 font-size: 35px;
    color: white;
    font-weight: bold;
    line-height: 30px;
    padding-left: 10px;
    margin-top: 20px;
    display: inline-block;
}
.box p span{
	font-size: 20px;
	font-weight: 400;
	color: #f4f0f0;
}
.box-icon{
	font-size: 40px!important;
    float: right;
    margin-top: 35px!important;
    color: #ece9e9;
    padding-right: 10px;
}
.col-div-8{
	/* width: 70%; */
	float: left;
  margin-top: 30px;
}
.col-div-4{
	width: 30%;
	float: left;
}
/* .content-box{
	padding: 20px;
} */
.content-box p{
	margin: 0px;
    font-size: 20px;
    color: #070808;
}
.content-box p span{
	float: right;
    /* background-color: #ddd; */
    padding: 3px 10px;
    font-size: 15px;
}
.box-8, .box-4{
	width: 1080px;

  
	 
	
}
.nav2{
	display: none;
}

.box-8{
	margin-left: 10px;
}
/* table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
  overflow-x:auto;
  
}
td, th {
  text-align: left;
  padding:10px;
  color: rgb(57, 52, 52);
  border-bottom: 1px solid #81818140;
  padding-left: 0px;
} */
table{
  width:100%;
  table-layout: fixed;
  overflow-x:auto;
  text-align: left;

}
.tbl-header{
  background-color: rgba(255,255,255,0.3);
  
 }

.tbl-content{
  height:300px;
  overflow-x:auto;
  margin-top: 0px;
  border: 1px solid rgba(255,255,255,0.3);
  padding-left:0px;
  
}
th{
  text-align: left;
  padding: 20px;
  text-align: left;
  font-weight: 500;
  font-size: 12px;
  color: black;
  text-transform: uppercase;
  padding-left:1px;
  text-align: left;
  width:30px;
}
td{
  text-align: left;
  padding: 15px;
  text-align: left;
  vertical-align:middle;
  padding-left:8px;
  font-weight: 300;
  font-size: 11px;
  color: black;
  border-bottom: solid 1px rgba(255,255,255,0.1);
}



  </style>
</head> 


<body>
	
	<div id="mySidenav" class="sidenav">
	<p class="logo"><span>V</span>-INSURANCE</p>
  <a href="#" class="icon-a"><i class="fa fa-dashboard icons"></i> &nbsp;&nbsp;Dashboard</a>
  <a href=""class="icon-a"><i class="fa fa-users icons"></i> &nbsp;&nbsp;Customers</a>
  <a href="../viewpolicy/viewpolicy.php"class="icon-a"><i class="fa fa-list icons"></i> &nbsp;&nbsp;Policy Related</a>
  <a href="../Addpolicy/addpolicy.php"class="icon-a"><i class="fa fa-shopping-bag icons"></i> &nbsp;&nbsp;Add Policy</a>
  <a href="#"class="icon-a"><i class="fa fa-tasks icons"></i> &nbsp;&nbsp;Vehicle</a>
  <!-- <a href="#"class="icon-a"><i class="fa fa-user icons"></i> &nbsp;&nbsp;Accounts</a>
  <a href="#"class="icon-a"><i class="fa fa-list-alt icons"></i> &nbsp;&nbsp;Tasks</a> -->

</div>
<div id="main">

	<div class="head">
		<div class="col-div-6">
<span style="font-size:30px;cursor:pointer; color: rgb(13, 5, 5);" class="nav"  >&#9776; Dashboard</span>
<span style="font-size:30px;cursor:pointer; color: rgb(22, 4, 4);" class="nav2"  >&#9776; Dashboard</span>
</div>
	
	<div class="col-div-6">
	<div class="profile">

		<!-- <img src="images/user.png" class="pro-img" /> -->
		<!-- <p>EDWIN JOHNSON <span></span></p> -->
	</div>
</div>
	<div class="clearfix"></div>
</div>

	<div class="clearfix"></div>
	<br/>
	
	<div class="col-div-3">
  <a href="../viewpolicy/viewpolicy.php"><div class="box">
			<p><?php echo $count_p?><br/><span>POLICIES</span></p>
			<i class="fa fa-book box-icon"></i>
		</div></a>
	</div>
  <div class="col-div-3">
  <a href="registeredcustomer.php"><div class="box">
			<p><?php echo $count_r?><br/><span>REGISTERED USERS</span></p>
			<!-- <i class="fa fa-users box-icon"></i> -->
		</div></a>
	</div>
	
  <div class="col-div-3">
  <a href="policy_L.php"><div class="box">
			<p><?php echo $count_e?><br/><span>LAPSED POLICIES</span></p>
			<!-- <i class="fa fa-users box-icon"></i> -->
		</div></a>
	</div>
  
  
  
  
  
  
  <br/><br/>
	
	<br/><br/>
	 <div class="col-div-8">
		<div class="box-8">
		<div class="content-box">

			<p>BUYIED CUSTOMERS<span></span></p>
			<br/>
      <div class="tbl-header">
			<table cellpadding="0" cellspacing="0" border="0">
 <tr>
    <th>Name</th>
    <th>Email</th>
    <th>Phone_no</th>
    <th>RC_no</th>
    <th>POLICY_NO</th>
    <th>Amount</th>
    <th>Nominie Name</th> 
    <th>Start Date</th>
    <th>End date</th>
    <th></th> 
    
  </tr>
</table>
</div>

<div class="tbl-content">
<table cellpadding="0" cellspacing="0" border="0">
  <!--
<//?php
/*
   if (mysqli_num_rows($result) > 0)
{

   while($row = mysqli_fetch_assoc($result)) 

{

      $ex_date=$row['end_data'];
      $r_date=$row['Registration Date'];
      $date1 = $prv_exdate;
      $date2 = $ex_date;
      $diff = abs(strtotime($date2) - strtotime($date1));
      $years = floor($diff / (365*60*60*24));
      $amount=$years*$row['premiumamount'];
    }
  }
      ?>*/-->

		</div>
	</div>
	</div> 


		
	<div class="clearfix"></div>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>

  $(".nav").click(function(){
    $("#mySidenav").css('width','70px');
    $("#main").css('margin-left','70px');
    $(".logo").css('visibility', 'hidden');
    $(".logo span").css('visibility', 'visible');
     $(".logo span").css('margin-left', '-10px');
     $(".icon-a").css('visibility', 'hidden');
     $(".icons").css('visibility', 'visible');
     $(".icons").css('margin-left', '-8px');
      $(".nav").css('display','none');
      $(".nav2").css('display','block');
  });

$(".nav2").click(function(){
    $("#mySidenav").css('width','300px');
    $("#main").css('margin-left','300px');
    $(".logo").css('visibility', 'visible');
     $(".icon-a").css('visibility', 'visible');
     $(".icons").css('visibility', 'visible');
     $(".nav").css('display','block');
      $(".nav2").css('display','none');
 });

</script>


</body>


</html>

<?php


$sql1= "SELECT *from finel";
$result1=mysqli_query($con, $sql1);
           while ($row = mysqli_fetch_assoc($result1)) {

                $id_r= $row['id_r'];
                $sql2= "SELECT *from registration where id_r=$id_r";
                $result2=mysqli_query($con, $sql2);
                while ($row2 = mysqli_fetch_assoc($result2)) {

                  echo "<tr>";
                  echo "<td>".$row2['name'] ."</td>";
                   echo "<td>".$row2['emailid'] ."</td>";
                   echo "<td>".$row2['phonenumber'] ."</td>";

                   echo "<td>".$row['vehicle_no'] ."</td>";

                              $Id_pol= $row['Id_pol'];
                              $sql3= "SELECT *from `policy details` where id=$Id_pol";
                              $result3=mysqli_query($con, $sql3);
                              while ($row3 = mysqli_fetch_assoc($result3)) {
              
                                echo "<td>".$row3['policy_no'] ."</td>";
                                $premiumamount=$row3['premiumamount'];

                                $date1 = $row['start_date'] ;
                                $date2 = $row['end_data'];
                                $diff = abs(strtotime($date2) - strtotime($date1));
                                $years = floor($diff / (365*60*60*24));
                                $amount=$years*$premiumamount;

                                echo "<td>".$amount ."</td>";

                                      $id_p2= $row['id_p2'];
                                      $sql4= "SELECT *from `proposel2` where id_p2=$id_p2";
                                      $result4=mysqli_query($con, $sql4);
                                      while ($row4 = mysqli_fetch_assoc($result4)) {
                      
                                        echo "<td>".$row4['n_name'] ."</td>";

        
            
           // echo "<td>".$row['Id_finel'] ."</td>";
           // echo "<td>".$row['id_r'] ."</td>";
           // echo "<td>".$row['Id_pol'] ."</td>";
          //  echo "<td>".$row['id_p1'] ."</td>";
           // echo "<td>".$row['id_p2'] ."</td>";
           // echo "<td>".$row['id_p3'] ."</td>";
            echo "<td>".$row['start_date'] ."</td>";
            echo "<td>".$row['end_data'] ."</td>";
            echo "<tr>";
           }
          }
        }
          }
?>