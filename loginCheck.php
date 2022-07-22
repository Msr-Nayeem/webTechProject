<?php


     $servername="localhost";
     $username="root";
     $password="";
     $dbname="sms";

     
if(isset($_POST["submit"]))
{
     $conn=new mysqli($servername,$username,$password,$dbname);
     $loginQ="SELECT * FROM admin WHERE Email='".$_POST["email"]."' AND Password='".$_POST["password"]."'";
     if($conn->connect_error){
          die("conn failed: ".$conn->connect_error);
     }
     else{

         $loginResult=$conn->query($loginQ);
         if($loginResult->num_rows>0){
           session_start();
           $_SESSION["uname"]=$_POST["uname"];
           header("location:homepage.php");
          }
          else{
               echo "Email or Password doesn't matched.!";
          }
     }
}


?>