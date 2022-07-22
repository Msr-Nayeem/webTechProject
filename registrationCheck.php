<?php
$name=$uname=$gr=$emailerr=$cp=$nameerr=$unameerr="";


if(isset($_POST["submit"]))
{

    $name= $_REQUEST['name']; 

    if(empty($name) || strlen($name)<3)
    {
        $nameerr= "Minimum 3 Characters";
        
    }
    else
    {
        $nameerr= "Name = ".$name;

    }
     
    $uname= $_REQUEST['uname'];
    if(empty($uname) || strlen($uname)<6)
    {
        $unameerr= "Minimum 5 Characters";
     
    }
    else
    {
        $unameerr= "User name = ".$uname;
    } 
    if(isset($_POST["gender"]))
    {
        $gr= "Gender =".$_POST["gender"] ;
    }
    else{
        $gr= "select gender ";
    } 
    $email= $_REQUEST['email'];

        if(empty($email) || !preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$email))
        {
            $emailerr= "enter valid email";

        }
        else
        {
            $emailerr= "Email Address = ".$email;
        }

        $password= $_REQUEST['password']; 
        $confirmpassword=$_REQUEST['confirmpassword'];
    
            if(empty($password) || strlen($password)<6)
            {
                $cp=  "The Password Field Must Be At Least 5 Characters";
            }
            else if($password != $confirmpassword)
            {
                $cp= "Does not Match";
            }
            else
            {
                $cp= "Password is valid";
            }

 
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="sms";
    $g=$_POST["gender"];

    $conn=new mysqli($servername,$username,$password,$dbname);
    $regQ="INSERT INTO `admin` (`Name`, `Email`, `Username`, `Password`, `Gender`, `date of birth`) VALUES ('".$_POST["name"]."', '".$_POST["email"]."', '".$_POST["uname"]."', '".$_POST["password"]."', '".$g."', '".$_POST["dateofbirth"]."')";

    if($conn->connect_error){
    die("conn failed: ".$conn->connect_error);
    }
    else{
          $regResult=$conn->query($regQ);
          if($regResult){
           echo "Successfully Registered";
         }
        else{
          echo "Same Username, please change it..!<br>";
      } 
    }
}


?>
 
    