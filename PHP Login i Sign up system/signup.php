<?php
include_once 'header.php';

?>
    <!-- End Top Bar -->
    <div class="large-3 large-centered columns">
    <div class="login-box">
    <div class="row">
    <div class="large-12 columns">
        <h4 class="text-center">Sign up</h4>
        <form action="includes/signup-inc.php" method="post">
         <div class="row">
           <div class="large-12 columns">
               <input type="text" name="name" placeholder="Firstname" />
           </div>
         </div>
         <div class="row">
           <div class="large-12 columns">
               <input type="email" name="email" placeholder="Email address" />
           </div>
         </div>
         <div class="row">
           <div class="large-12 columns">
               <input type="text" name="username" placeholder="Username" />
           </div>
         </div>
        <div class="row">
           <div class="large-12 columns">
               <input type="password" name="password" placeholder="Password" />
            </div>
        </div>
        <div class="row">
           <div class="large-12 columns">
               <input type="password" name="passwordrepeat" placeholder="Repeat password" />
           </div>
         </div>
        
        <div class="row">
          <div class="large-12 large-centered columns">
            <input type="submit" name="submit" class="button expand" value="Sign up"/>
            
            <?php 
        if(isset($_GET["error"])){
          if($_GET["error"] == "inputempty" ){
            echo "<p>You didin't fill all fields!</p>";
          }
        else if ($_GET["error"] == "invalidusername" ){
          echo "<p>Select another username!</p>";
        }
        else if ($_GET["error"] == "passwordsnotmatching" ){
          echo "<p>Your password does not match!</p>";
        }
        else if ($_GET["error"] == "none" ){
          echo "<p>You have signed up!</p>";
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



