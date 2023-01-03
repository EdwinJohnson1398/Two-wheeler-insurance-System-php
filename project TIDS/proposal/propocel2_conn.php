
<?php


$servername="localhost";
$username="root";
$password="";
$database_name="vis";
session_start();
$conn = mysqli_connect($servername,$username,$password,$database_name);
// Check connection
if (mysqli_connect_errno())
 {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
  }
  






      
      $id_r=$_SESSION['rc'];
      
      $Nname=$_POST['name'];
      $relation=$_POST['Relation'];
      $age=$_POST['age'];
      
    //   $email=$_POST['email'];
    //   $address=$_POST['address'];

    //   $dist=$_POST['dist'];
    //   $state=$_POST['state'];
    //   $pin=$_POST['pin'];
    //   $pin=$_POST['address'];

      
        //  $sql1="SELECT * FROM proposel1  WHERE id_r = '$id_r'";
        //  $result = mysqli_query($conn, $sql1);
        //  $row = mysqli_fetch_assoc($result);
        //  $id_p1=$row['id_proposel1'];

         $sql_query ="INSERT INTO `proposel2` (`n_name`,`relation`,`age`,`id_p1`,`v__no`)
         VALUES ('$Nname','$relation','$age','$id_p1',' $id_r')";

    //   $sql1="SELECT * FROM proposel1
    //   WHERE $_SESSION["id_r"]=id_r ";
    //   $result = mysqli_query($con, $sql1);
    //   $row = mysqli_fetch_assoc($result);
      

      if (mysqli_query($conn, $sql_query) )

      {

         
        header('location:proposal3.php');
      } 
      else
      {
          echo "Error: " . $sql_query."<br>" . mysqli_error($conn);
         
      }
      mysqli_close($conn);
  ?>