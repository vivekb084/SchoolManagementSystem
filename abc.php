<?php
include("header.php");
include("admin/connect1.php");
?>

	<div class="wrapper col0">
 	 <div id="topbar">
	  <div class="topbox last">
	  <h2> Search Result</h2>
		<form method="post" >
		<fieldset>
		<label>
		School Name<select name="schoolname1"  >
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
		 
	
		 <input type="submit" name="submit" style="visibility:hidden" />
		
		</label>
		</fieldset>
		</form>
		

		<?php 
		
	if($_POST["submit"])
	{
	?>
		<form method="post">
		<fieldset>
		 </label>
		 <br />
		 <br />
		 <BR />
		 <label>
		 Exam Type<select name="exam_type">
			<option>I UNIT</option>
			<option>II UNIT</option>
			<option>III UNIT</option>
			<option>HALF YEARLY</option>
			<option>ANNUAL</option>
			</select>
			</label>
			<br />
			<br />
			<br />
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
			?>
			</select>
			<br />
			<br br />
			Roll no.<input type="text" name="roll" />
			<br />
			<br />
			<BR />
			
			<p><input type="submit" value="Search" name="search" />
			
			</p>
			<p>
			
			<input type="reset" value="Reset" name="reset" />
			</p>
			</label>
			</fieldset>	
		</form>
		</div>
		</div>
		</div>
		
		
	
		 <?php
		 }
		 include("footer.php");
		 ?>
		 
