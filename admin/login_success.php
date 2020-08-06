<?php
include("session.php");
?>

<?php
if($_SESSION["login_user"]=="VIVEK")
{
header("location:index.php");
}
else
{
header("location:../schooladmin/index.php");
}
?>
