<?php
include("connect1.php");
session_start();
$user_check=$_SESSION['login_user'];
$ses_sql=mysql_query("select username from login where username='$user_check'");
$row=mysql_fetch_assoc($ses_sql);
$login_session=$row['username'];
if(!isset($login_session))
{
header('location:../login.php');
}
?>
