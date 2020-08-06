


<!--<link rel="stylesheet" href="layout/styles/layout.css" type="text/css" />
<script type="text/javascript" src="layout/scripts/jquery.min.js"></script>
<script type="text/javascript" src="layout/scripts/jquery.slidepanel.setup.js"></script>
<script type="text/javascript" src="layout/scripts/jquery.ui.min.js"></script>
<script type="text/javascript" src="layout/scripts/jquery.tabs.setup.js"></script>
<script type="text/javascript" src="layout/scripts/jquery.slidepanel.setup.js"></script>
-->

<?php

include("header1.php");
?>
 <div class="wrapper col0">
 	 <div id="topbar">
	  <div class="topbox last">
	  <h2>School Registeration</h2>
	  <form method="post" action="signup.php" enctype="multipart/form-data">
	 <fieldset>
	 <label for="username">
			Username<input type="text" name="username" value="" />
			</label>
			<label for="pass">
			Password<input type="password" name="pass" value="" />
			</label>
		  	 <label for="schoolname">
			School Name  <input type="text" name="schoolname" value=""  />
			</label>
			<label for="directorname">
			Director Name  <input type="text" name="directorname" value="" />
			</label><label for="contact">
			Contact  <input type="text" name="contact" value="" />
			</label>
			<label for="email">
			E-mail  <input type="text" name="email" value="" />
			</label>
			<label for="schooltype">
			School Type  <select name="schooltype">
			<option>Primary</option>
			<option>Middle</option>
			<option>Secondary</option>
			<option>sr. Secondary</option>
			</select>
			</label>
			<label for="board"><br />
			Board    <select name="board">
			<option>R.B.S.E.</option>
			<option>C.B.S.E.</option>
			</select>
			<br>
			<br>
			</label>
			
			<label for="photo">
			Photo<input type="file" name="photo" />
			</label>
			<p>
			<input type="submit" name="submit"  value="submit"/> 
			&nbsp;
			<input type="reset" name="reset"  value ="reset"/>
			</p>
	</fieldset>
		</form>
		</div>
</div>
</div>
