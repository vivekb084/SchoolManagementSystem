<?php
include("header1.php");
include ("connect1.php");
if($_GET["mod"])
{
$result=mysql_query("select * from school where srno='".$_GET["mod"]."'") or die(mysql_error());
while($rows=mysql_fetch_array($result)){
?>

 <div class="wrapper col0">
 	 <div id="topbar">
	  <div class="topbox last">
	  <h2>School Registeration</h2>
	  <form method="post" >
	 <fieldset>
	 <label for="schoolname">
			School Name  <input type="text" name="schoolname" value="<?php echo $rows["schoolname"]; ?>"  />
			</label>
			<label for="directorname">
			Director Name  <input type="text" name="directorname" value="<?php echo $rows["directorname"]; ?>" />
			</label><label for="contact">
			Contact  <input type="text" name="contact" value="<?php echo $rows["contact"]; ?>" />
			</label>
			<label for="email">
			E-mail  <input type="text" name="email" value="<?php echo $rows["email"]; ?>" />
			</label>
			<?php
			$r=$rows["schooltype"];
			if($r=="Primary")
			{
			?>
			<label for="schooltype">
			School Type  <select name="schooltype">
			<option>Primary</option>
			<option>Middle</option>
			<option>Secondary</option>
			<option>sr. Secondary</option>
			</select>
			</label>
			<?php 
			}
			
			else if($r=="Middle")
			{
			?>
			<label for="schooltype">
			School Type  <select name="schooltype" >
			<option>Middle</option>
			<option>Primary</option>
			<option>Secondary</option>
			<option>sr. Secondary</option>
			</select>
			</label>
			<?php 
			}
			
			 else if($r=="Secondary")
			{
			?>
			<label for="schooltype">
			School Type  <select name="schooltype" >
			<option>Secondary</option>
			<option>Primary</option>
			<option>Middle</option>
			<option>sr. Secondary</option>
			</select>
			</label>
			<?php 
			}
			else
			{
			?>
			<label for="schooltype">
			School Type  <select name="schooltype" >
			<option>sr. Secondary</option>
			<option>Primary</option>
			<option>Middle</option>
			<option>Secondary</option>
			</select>
			</label>
			<?php 
			}
			?>
			
			<?php
			$s= $rows["board"];
			if($s=="R.B.S.E.")
			{
			?>
			
			<label for="board">
			Board    <select name="board" >
			<option>R.B.S.E.</option>
			<option>C.B.S.E.</option>
			</select>
			<br>
			<br>
			</label>
			<?PHP 
			}
			?>
			
			<?php
			$s= $rows["board"];
			if($s=="C.B.S.E.")
			{
			?>
			
			<label for="board">
			Board    <select name="board" >
			<option>C.B.S.E.</option>
			<option>R.B.S.E.</option>
			</select>
			<br>
			<br>
			</label>
			<?PHP 
			}
			?>
			<label for="photo">
			Photo<input type="file" name="photo" value="<?php echo $rows["photo"]; ?>" />
			</label>
			<p>
			<input type="submit" name="submit"  value="Update"/> 
			&nbsp;
			<input type="reset" name="reset"  value ="reset"/>
			</p>
	</fieldset>
		</form>
		</div>
</div>
</div>
<?php

  if($_POST["submit"])
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

}}
?>
