 <?php
 error_reporting(E_ALL^E_DEPRECATED);

$dbname="educationphp";
$hostname="localhost";
$username="root";
$password="";

$db = mysql_connect($hostname,$username,$password) or die ("Can not connect to $hostname.");
mysql_select_db($dbname,$db);

?>