<?php
$name=$gr=$emailerr=$cp=$nameerr=$unameerr=$brday=$chp="";
 $nflag=false;
 $eflag=false;
 $pflag=false;

 
if(isset($_POST["submit"]))
{

    $name= $_REQUEST['name']; 

    if(empty($name) || strlen($name)<7)
    {
        $nameerr= "Minimum 6 Characters";
        $nflag=false;
        
    }
    else
    {
        $nflag=true;

    }
      
    $email= $_REQUEST['email'];

        if(empty($email) || !preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$email))
        {
            $emailerr= "enter valid email";
            $eflag=false;

        }
        else
        {
            $eflag=true;
        }

    $password= $_REQUEST['password']; 
    $confirmpassword=$_REQUEST['confirmpassword'];
    
     if(empty($password) || strlen($password)<6){
            $cp=  "At Least 5 Characters";
               $pflag=false;
    }
    else if($password != $confirmpassword){
           $chp= "Does not Match";
            $pflag=false;
    }
   else{
           $pflag=true;
    }
    if($nflag=true && $eflag==true  && $pflag==true){

        $servername="localhost";
        $username="root";
        $password="";
        $dbname="sms";
        $g=$_POST["gender"];

       $conn=new mysqli($servername,$username,$password,$dbname);
       $regQ="INSERT INTO `admin` (`Name`, `Email`, `Password`, `Gender`, `date of birth`) VALUES ('".$_POST["name"]."', '".$_POST["email"]."', '".$_POST["password"]."', '".$g."', '".$_POST["dateofbirth"]."')";

       if($conn->connect_error){
        die("conn failed: ".$conn->connect_error);
        }
        else{
              $regResult=$conn->query($regQ);
              if($regResult){
                echo "Successfully Registered";
              }
              else{
                   echo "Same Email, please change it..!<br>";
              } 


        }
}}

?>
  