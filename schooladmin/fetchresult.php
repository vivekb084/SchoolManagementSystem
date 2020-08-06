<?php
include("header1.php");
include("../admin/connect1.php");

?>
<table>
<tr>
<td width="4%">Srno</td>
<td width="8%">Roll No.</td>
<td width="14%">Student Name</td>
<td width="14%">Father name</td>
<td width="10%">English</td>
<td width="10%">Hindi</td>
<td width="10%">Maths</td>
<td width="10%">Sanskrit</td>
<td width="10%">Science</td>
<td width="10%">Social Studies</td>
</tr>
<?php
$r=mysql_query("select * from result where schoolid='".$_GET["schid"]."' and class='".$_GET["cls"]."' and examtype='".$_GET["exmtp"]."'")or die(mysql_error());
$i=1;
while($rows=mysql_fetch_array($r))
{
?>
<tr>
<td width="4%"><?php echo $i; ?></td>
<td width="8%"><?php echo $rows["roll"]; ?></td>
<td width="14%"><?php echo $rows["studentname"]; ?></td>
<td width="14%"><?php echo $rows["fathername"]; ?></td>
<td width="10%"><?php echo $rows["english"]; ?></td>
<td width="10%"><?php echo $rows["hindi"]; ?></td>
<td width="10%"><?php echo $rows["maths"]; ?></td>
<td width="8%"><?php echo $rows["sanskrit"]; ?></td>
<td width="8%"><?php echo $rows["science"]; ?></td>
<td width="8%"><?php echo $rows["socialstudies"]; ?></td>
</tr>
<?php
$i++;

}
?>
</table>