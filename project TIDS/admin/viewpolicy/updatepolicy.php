
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
$id1 = $_GET['items_id'];


echo"<h4>Policy ID : $id1</H4>";

$sql = "SELECT *from `policy details` where id = '$id1'";  
$result = mysqli_query($con, $sql);  
$row = mysqli_fetch_array($result);  
$count = mysqli_num_rows($result);  

// <td>".$row["id"]."</td>
// <td>".$row ["company"]."</td>
// <td>".$row ["policy_no"]."</td>

// <td>".$row ["Policy_type"]."</td>
// <td>".$row ["IDV"]."</td>

// <td>".$row ["duration"]."</td>
// <td>".$row ["premiumamount"]."</td>




?>



























<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        @import url('https://fonts.googleapis.com/css?family=PT+Sans');

body{
  background: #fff;
  font-family: 'PT Sans', sans-serif;
}
h2{
  padding-top: 1.5rem;
}
a{
  color: #333;
}
a:hover{
  color: #da5767;
  text-decoration: none;
}
.card{
  border: 0.40rem solid #f8f9fa;
  top: 10%;
}
.form-control{
  background-color: #f8f9fa;
  padding: 20px;
  padding: 25px 15px;
  margin-bottom: 1.3rem;
  height: 12px;
}

.form-control:focus {

    color: #000000;
    background-color: #ffffff;
    border: 3px solid #da5767;
    outline: 0;
    box-shadow: none;

}

.btn{
  padding: 0.6rem 1.2rem;
  background: #da5767;
  border: 2px solid #da5767;
}
.btn-primary:hover {

    
    background-color: #df8c96;
    border-color: #df8c96;
  transition: .3s;

}
    </style>
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
        <div class="col-md-5">
         <div class="card">
           <h2 class="card-title text-center">UPDATE</h2>
            <div class="card-body py-md-4">
             <form action="updatepolicy_conn.php" method="post">
             <div class="form-group">
                  
                  <input type="text" class="form-control" name="id" placeholder="id" value="<?php echo $row ["id"]?> "requerd>
             </div>
                <div class="form-group">

                   <input type="text" class="form-control" name="company" placeholder="company" value="<?php echo $row ["company"]?> "requerd>
              </div>
              <div class="form-group">
                   <input type="text" class="form-control" name="p_no" placeholder="policy_no" value="<?php echo $row ["policy_no"] ?> "requerd >
                                  </div>
                                  
                                
         <div class="form-group">
           <input type="text" class="form-control" name="p_type"  placeholder="Password"value="<?php echo $row ["Policy_type"] ?> "requerd>
         </div>
         <div class="form-group">
            <input type="text" class="form-control" name="IDV" placeholder="idv"value="<?php echo$row ["IDV"] ?> "requerd>
         </div>
         <!-- <div class="form-group">
            <input type="text" class="form-control" name="duration" placeholder="duration" value="<?php echo $row ["duration"] ?> "requerd>
         </div> -->
         <div class="form-group">
            <input type="text" class="form-control" name="amount" placeholder="premiumamount"value="<?php echo $row ["premiumamount"] ?> "requerd>
         </div>
         <div class="d-flex flex-row align-items-center justify-content-between">
           
                                      <button class="btn btn-primary">UPDATE</button>
                </div>
             </form>
           </div>
        </div>
      </div>
      </div>
      </div>
</body>
</html>