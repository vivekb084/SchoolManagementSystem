<?php
include("header.php");
include("admin/connect1.php");
?>

	<div class="wrapper col0">
 	 <div id="topbar">
	  <div class="topbox last">
	  <h2> Search Result</h2>
		<form method="post" action="result.php">
		<fieldset>
		<label>
		School Name<select name="school_name" onchange="this.form.submit()" >
		<option>SELECT SCHOOL</option>
		 <?php 
		 $r=mysql_query("select * from school");
			while($rows=mysql_fetch_array($r))
		 {
		 ?>
		 <option>
		 <?php
		 echo $rows["schoolname"];
		 ?>
		 </option>
		
		 <?php
		 }?>
		 </select>
		</label>
		</fieldset>
		</form>
		</div>
		</div>
		</div>		
		
		
<?php
include("footer.php");
?>

