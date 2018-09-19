<?php 
if(!isset($_SESSION)) { 
  session_start(); 
} 
?>
<body id="grad1">
<style>
/*button style*/
  button {
     background:none!important;
     color:black;
     border:none; 
     padding:0!important;
     font: inherit;
     font-weight: bold;
     font-family: Helvetica;
     font-size: 13px;
}
button:hover{
  color: white;
  font-weight: bold;
}
</style>
  <header>
    <div class="containerHeader">
      <div id="branding">
        <span class="highlight"><a href="index.php"><img src="img/headerlogowebsite.png" width = "150" height="50"></a></span>
      </div>
    <nav>
      <ul>
        <?php
        if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
        	echo '
          <li><a href="about.php"><b>About</b></a></li>
          <li><a href="pricing.php"><b>Pricing</b></a></li>
          <li><a href="contactus.php"><b>Contact Us</b></a></li>
          <li><a href="signin.php"><b>Sign In</b></a></li>
        	';
        } else {
        	echo '
        <li><a href="about.php"><b>About</b></a></li>
        <li><a href="contactus.php"><b>Contact Us</b></a></li>
        <li><a href="dashboard.php"><b>Dashboard</b></a></li>
        <li><a href= "includes/logout.inc.php"><b>Logout</b></a></li>
        	';
        }
        ?>
      </ul>
    </nav>
    </div>
  </header>