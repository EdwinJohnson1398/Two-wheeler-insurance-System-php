<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <style>

*{
  margin:0;
}
body{
  width: 100%;
  height:100%;
  font-family: sans-serif;
  background-color: #dfdfdf;
}
.overlay_container{
  width: 100%;
  height:100%;
  background: rgba(0, 0, 0, 0.5);
  visibility: hidden;
  opacity: 0;
  position: fixed;
  transition-duration:300ms;
}
.notification{
  visibility: hidden;
  opacity: 0;
  position: fixed;
  z-index:2; 
  left: 40%;
  top: 30%;
  z-index:1; 
}
.cont{
  padding:30px;
  background:#fff;
  border-radius: 5px;
}
button{
  padding: 0.5rem 1.5rem;
  cursor: pointer;
  border-radius: 4px;
  background-color: #800040;
  color: white;
  border: 1px solid #800040;
  margin: 0 1rem;
}
.container{
  padding-top:100px;
  float: left;
}
.box{   
  margin-left:100px;
  border-radius: 5px;
  padding: 40px;
  background: #fff;
  box-shadow: 0 1px 4px rgb(0 0 0 / 20%);
  width: 300px;
  height: 100%;
}
h1,h3{
  padding: 10px 0;
}
h4{
  padding: 30px;
}
h5{
  padding: 10px;
}



    </style>
</head>
<body>
<style>
        body {
          background-image: url('bg.jpg');
          background-size: 130%;
        }
        </style>
        <div class="topnav">
  <a href="mainhome.php"><button>Home</button></a>
  <a href="bookvehicle.php"><button>Book Vehicle</button></a>
  <a href="mybooking.php"><button>My Bookings</button></a>
  <a href="myaccount.php"><button>Account</button></a>
</div>
    
<?php
session_start();
$hostname="localhost"; //local server name default localhost
$username="root";  //mysql username default is root.
$password="";       //blank if no password is set for mysql.
$database="etravelagency";  //database name which you created

$con=mysqli_connect($hostname, $username, $password, $database);

if(! $con)
{
die('Connection Failed'.mysqli_error($con));
}



$sql = "SELECT * FROM `city`";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0)
 {

  while($row = mysqli_fetch_assoc($result)) 
  {
   

         <div class="overlay_container" id="overlay">
        </div>
           <div class="notification" id="note">
            <div class="cont">
            <h4> Are You Sure You Want to proceed? </h4>
             <button id="AddTask">Submit</button>
             <button id="cancel">Cancel</button>
             </div>
              </div>
  
              <div class="container">
                 <div class="box">
                  <h1><?php echo $row ["name"];?></h1>
                   <!-- <h3> Add New Task </h3> -->
                   <button id="add">CLICK</button>
                   <h5 id="NewTask"><h5>
                  </div>
                 </div>



    
<?php
  }
}
  else
  {

    echo "<h1> No city.</h1>"; 
  }
  

mysqli_close($con);
?>

<script>

var add=document.getElementById('add');
var overlay=document.getElementById('overlay');
var note=document.getElementById('note');
add.addEventListener("click",()=>{
    overlay.style.visibility="visible";
    overlay.style.opacity="1";

    note.style.visibility="visible";
    note.style.opacity="1";
});


overlay.addEventListener("click",()=>{
    overlay.style.visibility="hidden";
    overlay.style.opacity="0";

    note.style.visibility="hidden";
    note.style.opacity="0";
});

var cancel=document.getElementById('cancel');
cancel.addEventListener("click",()=>{
  overlay.click();
});

var AddTask=document.getElementById('AddTask');
var NewTask=document.getElementById('NewTask');
AddTask.addEventListener("click",()=>{
    NewTask.innerHTML=NewTask.innerHTML+`New Task Added <br/>`;
});



</script>

</body>
</html>