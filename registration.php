<?php
include ("header.html");
include "regCheck.php"
?>

<html>
<center>
<body>
    <fieldset>
    <legend> Register Your Admin</legend> 
    
<form action="" method="post" enctype="multipart/form-data" autocomplete="off">
<table>
<tr>
<td> Name : </td>
<td> <input type="text" name="name" required oninvalid="this.setCustomValidity('Input Your Name')" oninput="this.setCustomValidity('')" placeholder="Enter Full Name"> </td>
<td> <?php echo $nameerr ?> </td>
</tr>
<tr>
<td> Email : </td>
<td> <input type = "text" name= "email" placeholder="Enter Email" required  oninvalid="this.setCustomValidity('Input Your Email')" oninput="this.setCustomValidity('')"> </td>
<td> <?php echo $emailerr ?> </td>
</tr>

<tr>
<tr>
<td> Password : </td>
<td> <input type = "password" name= "password" required  placeholder="Enter Password" oninvalid="this.setCustomValidity('Input Password')" oninput="this.setCustomValidity('')"> </td>
<td> <?php echo $cp ?> </td>
</tr>
<tr>
<td> Confirm Password : </td>
<td> <input type = "password" name= "confirmpassword" required oninvalid="this.setCustomValidity('Re-input Password')" oninput="this.setCustomValidity('')" placeholder="Re-enter password"> </td>
<td> <?php echo $chp ?> </td>
</tr>
<td> Gender: </td>
<td> 
<input type="radio" name="gender" value="Male" required oninvalid="this.setCustomValidity('Select Any One Option')" oninput="this.setCustomValidity('')">Male
<input type="radio" name="gender" value="Female" >female  
</td>
<td> <?php echo $gr ?> </td>
</tr>
<tr>
<td> Date of Birth </td>
<td> <input type="date" name="dateofbirth" required oninvalid="this.setCustomValidity('Select Your Birthday')" oninput="this.setCustomValidity('')">  </td>
<td> <?php echo $brday ?> </td>
</tr>
<tr>
<td> <input type="submit" value="Submit" name="submit">
<input type="reset" value="Clear Form" > </td>
<td><ul style=" list-style-type: none;">
    <li><a href="login.php">Back to login</a></li>
    </ul>
</td>
</tr>
</fieldset>
</table>
</body>
</center>
</html>

<?php
include ("footer.html");
?>
