<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--
Template Name: Educational
Author: <a href="http://www.os-templates.com/">OS Templates</a>
Author URI: http://www.os-templates.com/
Licence: Free to use under our free template licence terms
Licence URI: http://www.os-templates.com/template-terms
-->
<?php
error_reporting(E_ALL^E_DEPRECATED);

include("session.php");

?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Educational</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="layout/styles/layout.css" type="text/css" />
<link rel="stylesheet" href="layout/styles/styles.css" type="text/css" />
<script type="text/javascript" src="layout/scripts/jquery.min.js"></script>
<script type="text/javascript" src="layout/scripts/jquery.slidepanel.setup.js"></script>
<script type="text/javascript" src="layout/scripts/jquery.ui.min.js"></script>
<script type="text/javascript" src="layout/scripts/jquery.tabs.setup.js"></script>
</head>



<body>
<div class="wrapper col1">
  <div id="header">
    <div id="logo">
      <h1 align="center"><a href="index.php"> Welcome to Admin Page</a></h1>
    </div>
    <br class="clear" />
  </div>
</div>

<div class="wrapper col2">
  <div id="topnav">
<div id='cssmenu'>
<ul>
   <li><a href='index.php'><span>School Info</span></a></li>
   <li class='active has-sub'><a href='#'><span>Results</span></a>
      <ul>
         <li class='has-sub'><a href='upload.php'><span>Upload</span></a>
         </li>
         <li class='has-sub'><a href='#'><span>Delete</span></a>
         </li>
      </ul>
   </li>
   <li><a href='#'><span>Enquiry</span></a></li>
<li><a href="logout.php"><span>Logout</span></a></li>
</ul>
</div>
  </div>
</div>
