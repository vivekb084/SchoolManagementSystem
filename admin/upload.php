<?php
include("header1.php");
include("connect1.php");
?>
 <div class="wrapper col0">
 	 <div id="topbar">
	  <div class="topbox last">
<h2> Upload Result</h2>
<form method="post">
<fieldset>
<label>
School Name   <input type="text" name="schoolname" value=""><br>
</label>
<label>
Board      <select name="board">
			<option>C.B.S.E</option>
			<option>R.B.S.E</option>
			</select>
			</label><label>
Exam Type  <select name="examtype">
			<option>I Unit</option>
			<option>II unit</option>
			<option>III unit</option>
			<option>Half Yearly</option>
			<option>Annual</option>
			</select></label>
			<?php
			echo $'".addslashes($_POST['schoolname'])."';
			
			
			if($r=="Primary")
			{
			?>
				<label>
Class  <select name="class"><br>
			<option>1</option>
			<option>2</option>
			<option>3</option>
			<option>4</option>
			<option>5</option>
			</select></label>
			<?php
			}
			else if($r=="Middele")
			{
			?>
			
			
			<label>
Class  <select name="class"><br>
			<option>1</option>
			<option>2</option>
			<option>3</option>
			<option>4</option>
			<option>5</option>
			<option>6</option>
			<option>7</option>
			<option>8</option>
			</select></label>
			<label>
			
			<?php
			}
			else if($r=="Secondary")
			{
			?>
			
						<label>
Class  <select name="class"><br>
			<option>1</option>
			<option>2</option>
			<option>3</option>
			<option>4</option>
			<option>5</option>
			<option>6</option>
			<option>7</option>
			<option>8</option>
			<option>9</option>
			<option>10</option>
			</select></label>
			<label>
			<?php
			}else
			{
			?>
						<label>
Class  <select name="class"><br>
			<option>1</option>
			<option>2</option>
			<option>3</option>
			<option>4</option>
			<option>5</option>
			<option>6</option>
			<option>7</option>
			<option>8</option>
			<option>9</option>
			<option>10</option>
			<option>11</option>
			<option>12</option>
			</select></label>
			<label>
			
			<?php
			}
			?>
Upload File<input type="file" name="result" value=""><br><br><br><br>
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
if($_POST["submit"])
{
if ($_FILES["file"]["size"] > 0) {
    //get the csv file 
	
	
    $file = $_FILES["file"]["tmp_name"]; 
    $handle = fopen($file, "r");
    $i = 0;
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        if ($i > 0) {
$import = "INSERT into result(srno,schoolid,board) values('$data[0]','$data[1]','$data[2]')";
            $connect->query($import);
        }
        $i++;
    }
    fclose($handle);
	}}
	?>