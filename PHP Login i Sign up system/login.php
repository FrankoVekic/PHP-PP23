<?php
include_once 'header.php';

?>
    <!-- End Top Bar -->
    <div class="large-3 large-centered columns">
    <div class="login-box">
    <div class="row">
    <div class="large-12 columns">
        <h4 class="text-center">Log in</h4>
        <form action="includes/login-inc.php" method="post">
         
        <div class="row">
           <div class="large-12 columns">
               <input type="text" name="name" placeholder="Email or username" />
            </div>
        </div>
        <div class="row">
           <div class="large-12 columns">
               <input type="password" name="password" placeholder="Password" />
           </div>
         </div>
        
        <div class="row">
          <div class="large-12 large-centered columns">
            <input type="submit" name="submit" class="button expand" value="Log In"/>
            <?php 
        if(isset($_GET["error"])){
          if($_GET["error"] == "inputempty" ){
            echo "<p>You didin't fill all fields!</p>";
          }
        else if ($_GET["error"] == "loginfailed" ){
          echo "<p>Login failed. Try again.</p>";
        }
      }
      ?>
    <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>



