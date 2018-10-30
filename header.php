<?php 
if(!isset($_SESSION)) { 
  session_start(); 
} 
?>
</style>
<head>
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<header>
  <div class="containerHeader">
    <?php
    if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
      echo'<div id="branding">
      <span class="highlight"><a href="index.php"><img src="img/headerlogowebsite.png" style="width:130px; height:40px; margin-top: 2.25%;"></a></span>
      </div>
      <nav>
      <ul>

      <li><a href="about.php"><b>About</b></a></li>
      <li><a href="pricing.php"><b>Pricing</b></a></li>
      <li><a href="contactus.php"><b>Contact Us</b></a></li>
      <li><a href="login.php"><b>Login</b></a></li>
      </ul>
      </nav>
      ';
    } else {
     echo '<div id="branding">
     <span class="highlight"><a href="dashboard.php"><img src="img/dashboard-header.png" style="width:130px; height:40px; margin-top:-0.75%;"></a></span>
     </div>
     <nav>
     <ul>
     
     <li><a href="about.php"><b>About</b></a></li>
     <li><a href="contactus.php"><b>Contact Us</b></a></li>
     <li><a href="index.php"><b>Home</b></a></li>
     <li><a href= "includes/logout.inc.php"><b>Logout</b></a></li>
     </ul>
     </nav>
     ';
   }
   ?>
 </div>
</header>