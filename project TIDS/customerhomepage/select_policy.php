
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
$no = $_POST['Vehicle_No'];
$_SESSION['rc']=$no;


// echo"<h4>Policy ID : $id1</H4>";
 
$sql = "SELECT *from `rc` where `Registered Number` = '$no'";  
$result = mysqli_query($con, $sql);  
$row = mysqli_fetch_array($result);  
$count = mysqli_num_rows($result); 

if($count=1){

$model =$row ["Maker's Classification:"];
$e_no=$row ["Engine Number"];
$c_no=$row["Chassis Number"];
$year=$row["Year of mntr"];
$company=$row["Maker's Name"];
// $sql_query ="INSERT INTO vehicledetailes (`Registration Nummber`,`Engine Number`,`Chassis Number`,`Previous Policy Number`,`Previous Policy Expiry Date`,`Registration Date`,`previos_insur`,`id_r`)
// VALUES ('$rc_no','$e_no','$c_no','$prv_pno','$prv_exdate',' $r_date','$prv_isur','$id_r')   ";

?>



<html>
    
<head>
   <Title>policiesy Details</Details></Title>
   <style>
    .h1{
      margin-left: 40px;
    }
    
   * {
  box-sizing: border-box;
}
.condainer{
  margin: 0 auto;
  padding: 0px 0 0;
  width: 73%;
  float:right;
  padding-left: 0%;
  /* align-items:inherit; */
  margin-left: 40px;
  background-color: rgb(246, 244, 245);
  margin-top: -450px;
  /* height: 90%; */
  margin-right: 10px;
  height: 200%;
  padding-top:10px;


}




/* Create three columns of equal width */
.columns {
  float:left;
  width: 20%;
  height: 900px;
  /* padding-top: 300px; */
  align-self: center;
  align-content:center ;
  /* align-items: center; */
  /* width: 18%; 
  height: 30%; */
  margin-top: 5px;
  margin-left: 5px;
  max-height :250px; 
  background-color: rgb(246, 245, 245);
  margin-bottom:150px;

  
 
}

/* Style the list */
.price {
  list-style-type: none;
  /* border: 1px solid rgb(221, 17, 17); */
  margin-left: 10px;
  padding: 0;
  -webkit-transition: 0.3s;
  transition: 0.3s;
  align-self:left;
  width: 200px;
  display: inline-block;
  /* height: 400px; */
  /* margin-top:10px; */
  height: auto;
  /* background-color:grey; */
 
 
}

/* Add shadows on hover */
.price:hover {
  box-shadow: 0 8px 12px 0 rgba(0,0,0,0.2)
}

/* Pricing header */
.price .header {
  background-color: rgb(99, 167, 231);
  color: white;
  font-size: 25px;
  height:100px;
  
}

/* List items */
.price li {
  border-bottom: 1px solid #eee;
  padding: 20px;
  text-align: center;
  margin-bottom: 10px;
  
}

/* Grey list item */
.price .grey1 {
  
  font-size: 20px;
}
.price .grey {
  background-color: #eee;
  font-size: 20px;
}

/* .gray{
  margin-bottom:15px;
} */

/* The "Sign Up" button */
.button {
  background-color: rgb(99, 167, 231);
  border: none;
  color: rgb(247, 242, 242);
  padding: 10px 25px;
  text-align: center;
  text-decoration: none;
  font-size: 20px;
  width: 100%;
  
}

/* Change the width of the three columns to 100%
(to stack horizontally on small screens) */
@media only screen and (max-width: 600px) {
  .columns {
    width: 100%;
  }
  /* .body
{
    /* background-color: rgb(247, 243, 243);
    /* background-image:url("design5.jpg"); */
    /*background-repeat: no-repeat;
    /* margin-top: 40px; */
   /* padding: 10;
    font-family: sans-serif;
    background-size:100% */ */

}

.Vdetails
{
    width: 240px;
    height: 450px;;
    box-shadow: 0 0 3px 0 rgba(10, 0, 0, 0.3);
    background-color: rgb(250, 248, 252);
    padding: 3px;
    margin-top: 60px;
    margin-left: 5px;
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
    border: 1px solid rgb(4, 22, 153);
    outline:rgb(211, 5, 5);
    margin-left: px;
    padding-left: 2px;
}
.Vdetails h5{


    margin-top: 2px;
    margin-bottom: 2px;
    margin-left: px;



}
.submit{
  
    
    padding-bottom: 10px;
    font-size: 18px;
    font-weight: bold;
    background-color: black;
    border: none;
    color: white;
   	width:60px;
    height: 30px;
    margin-left: 70%;
    border-radius: 10px;

}
</style>

</head>

<body>

 
<h1 class="h1"><b>SELECT YOUR POLICY </b></h1>
<div class="vdetails">
  <h1>Your Vehicle </h1>
  
  <!-- <form action="../update policy and user/update_item_conn.php" method="POST"> -->
  <h5>MODEL<h5>
  <input type="text" name="model" class="input-box" placeholder="Policy Id" value="<?php echo $model;?>" required autofocus disabled>
  <h5>registration Number<h5>
  <input type="text" name="r_no" class="input-box" placeholder="Company Name"value="<?php echo $no;?>" maxlength="15" required disabled>
  <h5>Engine Number<h5>
  <input type="text" name="enginno" class="input-box" placeholder="Policy_type"value="<?php echo $e_no;?>" maxlength="20" required disabled>
  <h5>Chassis Number<h5>
  <input type="text" name="ch_no" class="input-box" placeholder ="IDV Amount"value="<?php echo $c_no;?>" maxlength="10" required disabled >
  <h5>registration Year<h5>
  
  <input type="year" name="year" class="input-box" placeholder="Year of Duration"value="<?php echo $year;?>"  max="10" required disabled>
  <h5>Company<h5>
  <input type="text" name="company" class="input-box" placeholder="Premium Amount"value="<?php echo $company;?>" max="100000" required disabled>
  <!-- <input type="submit" value="UPDATE" class="submit"> -->
</div>

<?php
$sql = "SELECT * FROM `policy details`";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0)
 {  ?>
    <!-- <form action="policyconn.php" method="get"> -->
    
    <div class ="condainer">

    <!-- <td><b>Select Tenure</b></td>
      <td><input name="duration" type="number" rows="" placeholder="year" max="3" min="1" required autofocus  width="30px" /></td> -->
    <?php   

  while($row = mysqli_fetch_assoc($result)) 
  {
    if($row ["IDV"]>1)
    {
    ?>
   
    <!-- <div class="columns"> -->
      <div style="display:inline-block;">
    <ul class="price" >
    <li class="header"><?php echo $row ["company"];?></li>
    <li class="grey"><?php echo $row ["Policy_type"];?></li>
    <li class="grey"><?php echo "IDV : ".$row ["IDV"];?></li>
    <li class="grey"> <a href="policyconn.php?policy_id=<?php echo $row ["id"];?>"> <button class="button"><b><?php echo "PRICE &#x20b9  ".$row["premiumamount"];?></b></button></a> </li>
    
  </ul>
    </div>
<!-- </div> -->
  <!-- </form> -->




<?php
    }
    else{
      ?>
      <!-- <div class="columns"> -->
        <div style="display:inline-block;">
    <ul class="price"  >
    <li class="header"><?php echo $row ["company"];?></li>
    <li class="grey"><?php echo $row ["Policy_type"];?></li>
    
   
    <li class="grey"> <a href="policyconn.php?policy_id=<?php echo $row ["id"];?>"> <button class="button"><b><?php echo "PRICE &#x20b9  ".$row["premiumamount"];?></b></button></a> </li>
    
  </ul>
<!-- </div> -->

    </div>
<?php
    }
  }
  ?>
  </div>
   <?php 
}

  else
  {

    echo "<h1> No policy.</h1>"; 
  }
  

mysqli_close($con);
?> 
</body>

</body></html>

<?php
}
else 
    echo "No vehicle"
?>
