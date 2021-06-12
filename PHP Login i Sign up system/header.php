<?php 
session_start();
?>
<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Foundation | Welcome</title>
    <link rel="stylesheet" href="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css">
  </head>
  <body>

    <!-- Start Top Bar -->
    <div class="top-bar">
      <div class="top-bar-left">
        <ul class="menu">
          <li><img src="slike/logo1.png" width="40" height="40"></li>
          <li class="menu-text">CyberX Games</li>
        </ul>
      </div>
      <div class="top-bar-right">
        <ul class="menu">
          <li><a href="#">Home</a></li> 
          <li><a href="#">Search</a></li>
          <li><a href="#">Games</a></li>
          <li><a href="#">About us</a></li>
          <?php
            if(isset($_SESSION["username"])){
              echo "<li><a href='profile.php'>Profile page</a></li>";
              echo "<li><a href='includes/logout-inc.php'>Log out</a></li>";
            }
            else {
            echo "<li><a href='signup.php'>Sign up</a></li>";
            echo "<li><a href='login.php'>Log in</a></li>";
            }

          ?>
        </ul>
      </div>
    </div>
    <br>
    <br>