<?php
include("header.html");
include("loginCheck.php");
?>

<html>
<center>
<body>
<fieldset>
    <legend>Admin Login</Legend>
   
    
<form action="" method="post" enctype="multipart/form-data">
    
<table>
<tr>
<td> Email : </td>
<td> <input type = "text" name= "email" autocomplete="off" placeholder="Enter Email" required oninvalid="this.setCustomValidity('Enter Your Email')" oninput="this.setCustomValidity('')"><br> </td> 
</tr>
<tr>
<td> Password : </td>
<td> <input type = "password" name= "password" placeholder="Enter Password" required oninvalid="this.setCustomValidity('Enter your Password')" oninput="this.setCustomValidity('')"> <br> </td> 
</tr>
<tr>
<td> <input type="checkbox" value="rememberme" id="rememberme"> <label for="rememberme">Remember me </td>
<tr>
<td> <input type="submit" value="Submit" name="submit"> 
</td>
</tr>
<td> Not registered yet? <a href="registration.php"> Register </a> </td> </tr>
<tr> <td> <br> <br> <br> <br> </td> </tr>
</table>
</fieldset>
</body>
</center>
</html>
<?php
    include("footer.html");
?>
