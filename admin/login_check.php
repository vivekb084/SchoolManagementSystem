<?php
include("connect1.php");

session_start();

		if($_POST["schoollogin"])
{
$myusername=$_POST['schoolname']; 
$mypassword=$_POST['schoolpass']; 

// To protect MySQL injection (more detail about MySQL injection)
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string($mypassword);
$sql="SELECT * FROM login WHERE username='$myusername' and pass='$mypassword'";
$result=mysql_query($sql);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){

// Register $myusername, $mypassword and redirect to file "login_success.php"
$_SESSION["login_user"]=$myusername;
$_SESSION["login_pass"]=$mypassword; 
header("location:login_success.php");
}

else {
echo"<script type='text/javascript'>window.alert('Wrong Username Or Password')</script>";
$url="../login.php";
echo"<script>self.location='".$url."';</script>";
}
}
?>
      