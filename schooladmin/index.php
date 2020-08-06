<?php
include("header1.php");
include("../admin/connect1.php");
?>
<table>
<tr>
<td width="18%">Srno</td>
<td width="18%">Board</td>
<td width="18%">Exam Type</td>
<td width="18%">Class</td>
<td width="18%">Option</td>
<td width="10%"><input type="button" name="bulkdelete" value=" Bulk Delete" /></td>
<?php
$a=1;
$r=mysql_query("select *,COUNT(*)  from result GROUP By schoolid,examtype,class")or die(mysql_error());
while($rows=mysql_fetch_array($r)){
$c=$rows["examtype"];
$d=$rows["class"];
?>
</tr>
<tr>
<td width="18%"><?php echo $a; ?></td>
<td width="18%"><?php echo $rows["board"]; ?></td>
<td width="18%"><a href="fetchresult.php?schid=<?php echo $rows["schoolid"];?> & exmtp=<?php echo $rows["examtype"]; ?> & cls=<?php echo $rows["class"]; ?>" target="_blank"><?php echo $rows["examtype"]; ?></a></td>
<td width="18%"><a href="fetchresult.php"><?php echo $rows["class"]; ?></a></td>
<td><span style="background:#CCCCCC; padding:3px 10px; text-decoration:none;"><a  style=" color:#000000;"href="?del=<?php echo ($rows["schoolid"]) ?>">Delete</a></span>
</td>
<td width="10%"><input type="checkbox" name="bulk"  /></td></tr>
<?php
$a++;
}
?>
</table>
<?php
if(isset($_GET["del"]))
{
/*$q=mysql_query("select srno from result order by DESC LIMIT 1") or die(mysql_error());
$p=mysql_fetch_row($q);
for($i=0;$i<$p[0];$i++)
{*/
$del_que=mysql_query("delete  from result where examtype='$c' and schoolid='".$_GET["del"]."' and class='$d' ") or die(mysql_error());
/*}*/
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

