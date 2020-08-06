<?php
include("connect1.php");
?>
<?php
include("session.php");
?>
   <?php
  $i=mysql_query("select srno from school order by srno DESC LIMIT 1")  or die(mysql_error());
if (mysql_num_rows($i) >-1) {
   $s = mysql_fetch_row($i);
   $r=$s[0]+1;
   $sch=$r.date("d").date("m").date("y");
   }
$e="Active";

$result=mysql_query("insert into login(schoolid, username, pass, status) values('".addslashes($sch)."', '".addslashes($_POST['username'])."', '".addslashes($_POST['pass'])."', '".addslashes($e)."')") or die(mysql_error());

$query1=mysql_query("insert into  school(schoolname, directorname, contact, email, schooltype, board, schoolid, username, pass) values(
'".addslashes($_POST['schoolname'])."',
'".addslashes($_POST['directorname'])."',
'".addslashes($_POST['contact'])."',
'".addslashes($_POST['email'])."',
'".addslashes($_POST['schooltype'])."',
'".addslashes($_POST['board'])."',
'".$sch."',
'".addslashes($_POST['username'])."',
'".addslashes($_POST['pass'])."'
)") or die (mysql_error());

 
   $new_insert_id = mysql_insert_id();
		
		if ((($_FILES["photo"]["type"] == "image/jpg") || ($_FILES["photo"]["type"] == "image/gif") || ($_FILES["photo"]["type"] == "image/jpeg") || ($_FILES["photo"]["type"] == "image/pjpeg"))) {
			if (file_exists("photo/" . $new_insert_id.".jpg"))
				{
					echo $_FILES["photo"]["name"] . " already exists. ";
				}
				
				else
				{
					move_uploaded_file($_FILES["photo"]["tmp_name"], "photo/" .$new_insert_id.".jpg");
					
					
					$img_name = $new_insert_id.".jpg";
					
					mysql_query("update school set photo='".$img_name."'  where srno='".$new_insert_id."' ") or die(mysql_error());		
					}
				
			}
	


if(($query1))
 {
//	 echo "value inserted in the database.!!!";
echo"<script type='text/javascript'>window.alert('Form Submitted succesfully!!!')</script>";
$url="index.php";
echo"<script>self.location='".$url."';</script>";
 }	
else
{
echo"<script type='text/javascript'>window.alert('there is a problem to submitting value!!!')</script>";
}

?>
