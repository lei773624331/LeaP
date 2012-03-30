<?php
mysql_connect('localhost','root','');
mysql_select_db('diary');

//mysql_connect('a.db.shared.orchestra.io','user_8afecbb7','guzHa-iCcR7%kU');
//mysql_select_db('db_8afecbb7');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US" xml:lang="en">
  <head>
    <!--
    Created by Artisteer v3.0.0.35414
    Base template (without user's data) checked by http://validator.w3.org : "This page is valid XHTML 1.0 Transitional"
    -->
    <meta http-equiv="Content-Type" content="text/html; charset=ISO-7781" />
    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE8" />
    <title>I'm Lea</title>
    <link rel="stylesheet" href="./style.css" type="text/css" media="screen" />
    <!--[if IE 6]><link rel="stylesheet" href="./style.ie6.css" type="text/css" media="screen" /><![endif]-->
    <!--[if IE 7]><link rel="stylesheet" href="./style.ie7.css" type="text/css" media="screen" /><![endif]-->
    <link rel="shortcut icon" href="./favicon.ico" type="image/x-icon" />
    <script type="text/javascript" src="./jquery.js"></script>
    <script type="text/javascript" src="./script.js"></script>
  </head>

  <body>
    <div id="main">
  <div class="sheet">
    <div class="sheet-cc"></div>
    <div class="sheet-body">
      <div class="header">
        <div class="header-center">
          <div class="header-jpeg"></div>
        </div>
        <div class="logo">  
          <h1 id="name-text" class="logo-name"><a href="./index.php">Zhang Lei</a></h1>
          <h2 id="slogan-text" class="logo-text">do it or not do it there is no try</h2>
        </div>
      </div>
      <div class="nav">
        <div class="nav-l"></div>
        <div class="nav-r"></div>
        <ul class="menu">
          <li><a href="./me.php" <!--class="active"--><span class="l"> </span><span class="r"> </span><span class="t">About ME</span></a></li>
          <li><a href="./blog.php"><span class="l"> </span><span class="r"> </span><span class="t">BLOG</span></a></li>
          <li><a href="./cv.php"><span class="l"> </span><span class="r"> </span><span class="t">CV</span></a></li>
          <li>
        <form action="profil.php" method="POST">
Name: <input type="text" name="fname" />
<input type="submit" />
</form>
          </li>
          </ul>
      </div>
      <div class="content-layout">
        <div class="content-layout-row">
          <div class="layout-cell content">
     