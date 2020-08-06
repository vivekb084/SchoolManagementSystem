
<?php
include("header.php");
?>

<body>

  <div id="topbar">
      <div class="topbox">
        <h2>School Login Here</h2>
        <form method="post" action="admin/login_check.php">
          <fieldset>
            <legend>School Login Form</legend>
            <label for="schoolname">Username:
              <input type="text" name="schoolname" id="schoolname" value="" />
            </label>
            <label for="schoolpass">Password:
              <input type="password" name="schoolpass" id="schoolpass" value="" />
            </label>
            
            <p>
              <input type="submit" name="schoollogin" id="schoollogin" value="Login" />
              &nbsp;
              <input type="reset" name="schoolreset" id="schoolreset" value="Reset" />
            </p>
          </fieldset>
        </form>
		</div>
	  </div>
	 
	  </body>

<?php
include("footer.php")
?>
  
