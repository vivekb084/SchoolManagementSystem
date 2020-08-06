<?php
include("header1.php");
include("../admin/connect1.php");
?>


 <div class="wrapper col0">
 	 <div id="topbar">
	  <div class="topbox last">
<h2> Upload Result</h2>
<form method="post" enctype="multipart/form-data">
<fieldset>
<label>
<?php
$q=mysql_query("select * from school where username='$user_check'");
$rows=mysql_fetch_assoc($q);
{
?>
<?php echo $rows["schoolname"]; ?><br>
</label>
<input type="hidden" value="<?php echo $rows["schoolid"]; ?>" name="schoolid" />
<input type="hidden" value="<?php echo $rows["board"]; ?>" name="board1" />
<label> <?php echo $rows["board"]; ?></label>

<label>
Exam Type  <select name="examtype">
			<option>I Unit</option>
			<option>II unit</option>
			<option>III unit</option>
			<option>Half Yearly</option>
			<option>Annual</option>
			</select>
</label>
<label>
				Class  <select name="class"><br>
				<?php if( $rows["schooltype"]=="Primary")
				{for($i=1;$i<6;$i++)
				{?>
			<option><?php echo $i?>
			</option>
			<?php
			}}
			 else if( $rows["schooltype"] =="Middle")
				{for($i=1;$i<9;$i++)
				{
				?>
			<option><?php echo $i?>
			</option>
			<?php
			}}
			 else if( $rows["schooltype"]=="Secondary")
				{for($i=1;$i<11;$i++)
				{?>
			<option><?php echo $i?>
			</option>
			<?php
			}}
			 else
				{for($i=1;$i<13;$i++)
				{?>
			<option><?php echo $i?>
			</option>
			<?php
			}}
}
			?>		</select>
</label>
Upload File<input type="file" name="results" value=""><br><br><br><br>
</label>
<p>
<input type="submit" name="submit" value="Submit">


<input type="reset" name="reset" value="Reset">
</p>
</fieldset>
</form>
</div>
</div>
</div>
<?php
if (isset($_POST['submit'])) {



if ($_FILES["results"]["size"] > 0) {
    //get the csv file 
	
	
    $file = $_FILES["results"]["tmp_name"]; 
    $handle = fopen($file, "r");
    $i = 0;
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        if ($i > 0) {
		$r=mysql_query("insert into result(schoolid,board,examtype,class,studentname,roll,fathername,hindi,english,maths,sanskrit,socialstudies,science)values('".$_POST["schoolid"]."','".$_POST["board1"]."','".$_POST["examtype"]."','".$_POST["class"]."','$data[0]','$data[1]','$data[2]','$data[3]','$data[4]','$data[5]','$data[6]','$data[7]','$data[8]')") or die (mysql_error());
        }
        $i++;
    }
    fclose($handle);
}

if($r)
{
 echo"<script type='text/javascript'>window.alert('Result Uploaded Successfully')</script>";
$url="index.php";
echo"<script>self.location='".$url."';</script>";
}

else
{
echo"<script type='text/javascript'>window.alert('Problem in Uploading Result')</script>";
$url="resultupload.php";
echo"<script>self.location='".$url."';</script>";
}
}
	?>
	