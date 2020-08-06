<?php
include("connect1.php");
?>
<?php
include("header1.php");
?>


<div id=ab>
<a href ="registeration.php"><input type="button" name="add" value="Add" /></a>
<form method="post">Enter School Name <input type="text" name="sch_srch" /> <input type="submit" name="Search" value="Search" /></form>
</div>


<?php
if(isset($_POST["Search"]))
{
$a=$_POST['sch_srch'];
if("$a"!=NULL)
{
$result=mysql_query("select * from school where schoolname='".$_POST["sch_srch"]."'") or die(mysql_error());
}
else
{
$result=mysql_query("select * from school") or die(mysql_error());
}
}
else
{
$result=mysql_query("select * from school") or die(mysql_error());
}
?>

<table>
<tr>
<td width="4%">Srno</td>
<td width="20%">School Name</td>
<td width="10%">Director name</td>
<td width="10%">Contact</td>
<td width="10%">Email</td>
<td width="10%">School Type</td>
<td width="8%">Board</td>
<td width="8%">Photo</td>
<td width="10%">Option</td>
<td width="6%"><input type="button" name="bulkdelete" value=" Bulk Delete" /></td>

</tr>

<?php

while($rows=mysql_fetch_array($result)){
?>
<tr>
<td width="4%"><?php echo $rows["srno"]; ?></td>
<td width="20%"><?php echo $rows["schoolname"]; ?></td>
<td width="10%"><?php echo $rows["directorname"]; ?></td>
<td width="10%"><?php echo $rows["contact"]; ?></td>
<td width="10%"><?php echo $rows["email"]; ?></td>
<td width="10%"><?php echo $rows["schooltype"]; ?></td>
<td width="8%"><?php echo $rows["board"]; ?></td>
<td width="8%"><?php echo $rows["photo"]; ?></td>
<td width="10%"><span style="background:#CCCCCC; padding:3px 10px; text-decoration:none;"><a style=" color:#000000;" href="update.php?mod=<?php echo($rows["srno"])?>">Edit</a></span>
<span style="background:#CCCCCC; padding:3px 10px; text-decoration:none;"><a  style=" color:#000000;"href="?del=<?php echo ($rows["srno"]) ?>">Delete</a>
<td width="6%"><input type="checkbox" name="checkbox[]" value=<?php echo ($rows["srno"])?>/>
<br>
<br>
</td>
</tr>
<?php
}
?>
</table>


<?php

  if(isset($_POST["submit"]))
  {
  
$upd=mysql_query("update  school set schoolname='".$_POST['schoolname']."',
directorname='".$_POST['directorname']."',
contact='".$_POST['contact']."',
email='".$_POST['email']."',
schooltype='".$_POST['schooltype']."',
photo='".$_POST['photo']."',
board='".$_POST['board']."' where srno='".$_GET["mod"]."'") or die(mysql_error());
			
if($upd)
{
echo "<script type='text/javascript'>window.alert('Data Updated succesfully!!!')</script>";
$url="index.php";
echo"<script>self.location='".$url."';</script>";
 }	
else
{
echo"<script type='text/javascript'>window.alert('there is a problem to submitting value!!!')</script>";
}

}

?>

<?php
if(isset($_GET["del"]))
{
$del_que=mysql_query("delete  from school where srno='".$_GET["del"]."'") or die(mysql_error());

if($del_que)
{
echo"<script type='text/javascript'>window.alert('Record Deleted Succesfully!!!')</script>";
$url="index.php"; 
echo"<script>self.location='".$url."';</script>";
}
else
{
echo"<script type='text/javascript'>window.alert('There is a problem to deleting this record!!!')</script>";
}
}
?>


<?php

if(isset($_POST["bulkdelete"]))
{
$i=mysql_query("select srno from school order by srno DESC LIMIT 1") ;
$s = mysql_fetch_row($i);
   $count=$s[0];
for($k=0;$k<$count;$k++)
{
$dels=$checkbox[$k];
$q=mysql_query("delete  from school where srno='$dels'");

}
if($q)
{
echo"<script type='text/javascript'>window.alert('Records Deleted Succesfully!!!')</script>";
$url="index.php"; 
echo"<script>self.location='".$url."';</script>";
}
else
{
echo"<script type='text/javascript'>window.alert('There is a problem to deleting  records!!!')</script>";
}
}

?>
