<?php
session_start();
if(!isset($_SESSION["name"]))
{
    header("location:../loggin/login.html");
}
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




.input-box
{
    border-radius:0px;
    padding: 10px;
    margin: 10px 0;
    width: 85%;
    border: 0px solid rgb(17, 2, 2);
    outline:rgb(157, 3, 3);
    background-color: #fefeff;
    height:35px;
    margin-left: 5px;
    border-radius: 10px;
    margin-top: 15px;
    font-size: 17px;
    

    
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
                    <Li><a href="../login&registration/login&registration.html" class="btn1">LOG OUT</a></Li>
                    <!-- <Li><a href="../add vehicle/Add Vehicle Details.html" class="btn1">TAKE POLICY</a></Li>
                     -->
                    <!-- <Li><a href="../update_cutomer/update_customer.php" class="btn1">UPDATE PERSONAL INFORMATIONS</a></Li>
                     -->
                    <Li><a href="../profile/profile.php" class="btn1">PROFILE</a></Li>
                    
                    </ul>

            </div>

            <div class="title">

                

                <h1 class="v">V </h1><h1 class="ins">INSURANCE</h1>
            </div>
            <div class="container">
                <h1> <b></b> Bike Insurance </b>   </h1>
                <h3> Get Your Bike Insurance in Two Minutes</h3>
                <form  action="select_policy.php" method="post">
                    <div class="social-container">
                        <input type="text" name="Vehicle_No" class="input-box"maxlength="13" minlength="6" pattern="^[A-Z]{2}[0-9]{1,2}[A-Z]{1,2}[0-9]{1,4}$" placeholder="Vehicle Number EG:AP05BJ9353" required autofocus>

                     <button class="submit"> <b></b>INSURANCE NOW</b> </button>
                    </div>


                </form>





            </div>
<?php
echo'<h3> WELCOME TO V INSURANCE </H3>';
echo $_SESSION["name"]

  ?>          

</header>

         </body>
</html>

</html>