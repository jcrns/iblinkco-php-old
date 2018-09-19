<?php
// Initialize the session
	session_start();
 	include_once "includes/config.inc.php";
// Check if the user is logged in, if not then redirect him to login page
	if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    	header("location: signin.php");
    	exit;
	}
?>
<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="shortcut icon" href="img/icon.ico" type="image/x-icon">
<style type="text/css">
/*visability of styling*/
#visable{
  display: none;
}
#visable2{
  display: block;
}
</style>
<title><?php echo $_SESSION['username']; ?> Dashboard - iBlinkco</title>
<script src="js/instafeed.min.js" type="text/javascript"></script>
<script type="text/javascript">


var userFeed = new Instafeed({
    get: 'user',
    userId: '8286401205', //php variable inputed by users
    accessToken: '8286401205.1677ed0.ddb59e662eb349db8a471ade8feb661f', //important
    template: '<p style="font-size:11px; margin-left:-15%; margin-top:2.5%;">Liked by {{model.likes.count}} people - commented by {{model.comments.count}} people - created on {{model.created_time}}</p>',
    	filter: function(image) {

		var date = new Date(image.created_time*1000);

		m = date.getMonth();
		d = date.getDate();
		y = date.getFullYear();

		var month_names = new Array ( );
		month_names[month_names.length] = "Jan";
		month_names[month_names.length] = "Feb";
		month_names[month_names.length] = "Mar";
		month_names[month_names.length] = "Apr";
		month_names[month_names.length] = "May";
		month_names[month_names.length] = "Jun";
		month_names[month_names.length] = "Jul";
		month_names[month_names.length] = "Aug";
		month_names[month_names.length] = "Sep";
		month_names[month_names.length] = "Oct";
		month_names[month_names.length] = "Nov";
		month_names[month_names.length] = "Dec";

		var thetime = month_names[m] + ' ' + d + ' ' + y;

		image.created_time = thetime;

		return true;
	}
            });
    userFeed.run();
</script>
</head>
<?php
  include_once 'header.php';
?>
<!-- background color divs -->
<div style="padding-top: 100px; background-color: #aeaeae; font-family: Helvetica; border-radius: 10px;">
	<div style="margin-top: -1.5%;">
		<p style="font-family: Helvetica; float: left;">Welcome, <b><?php echo $_SESSION["username"]; ?></b>.</p>

 <!-- oppening to pop up menu -->
 <p style="float: right; margin-right: 30px;"><a href="#settings"><b>Settings</a></p>
	</div>
</div>

<!--Settings -->
 <div class="settings" id="settings">
    <div class="settings-content">
      <a href="#" class="pmenu-close">&times;</a>
      <h2 class="settings-heading" style="float: center;">SETTINGS</h2>
    <form action="includes/insert-instagram.inc.php" method="POST">
    	<input type="text" name="e-mail" placeholder="Email">
    	<br>
    	<input type="text" name="e-mail2" placeholder="Confirm Email">
    	<br>
		<button style="font-size: 14px;">submit</button>
    </form>
 </div>
</div>

 <!-- menus -->
 <div class="pmenu" id="pmenu">
    <div class="pmenu-content">
      <a href="#" class="pmenu-close">&times;</a>
      <h2 class="pmenu-heading">CHOOSE A SOCIAL MEDIA ACCOUNT TO CONNECT</h2>
      <!-- Instagram -->   		
<a href="#pmenu2" class="pmenu2-open">
<img src = "https://instagram-brand.com/wp-content/uploads/2016/11/app-icon2.png" class="img" width = "75" height = "75">
</a>
	  <!-- Facebook -->
<a href="#pmenu3" class="pmenu3-open">
<img src = "https://upload.wikimedia.org/wikipedia/commons/thumb/1/1b/Facebook_icon.svg/2000px-Facebook_icon.svg.png" class="img" width = "75" height = "75">
</a>
      <!-- Twitter -->
<a href="#pmenu4" class="pmenu4-open">
<img src = "http://www.stickpng.com/assets/images/580b57fcd9996e24bc43c53e.png" class="img" width = "75" height = "75">
</a>
 </div>
</div>
<!-- p menu 2 -->
 <div class="pmenu2" id="pmenu2">
    <div class="pmenu2-content">
      <a href="#" class="pmenu-close">&times;</a>
      <h2 class="pmenu-heading">CONNECT INSTAGRAM</h2>
    <form action="includes/insert-instagram.inc.php" method="POST">
    	<input style="font-size: 24px;" type="text" name="userid-instagram" placeholder="Instagram Userid">
    	<br>
    	<input style="font-size: 24px;" type="text" name="accesskey-instagram" placeholder="Instagram Access Key">
    	<br>
		<button style="font-size: 24px;">submit</button>
    </form>
 </div>
</div>
<br>

<!-- p menu 3 -->
 <div class="pmenu3" id="pmenu3">
    <div class="pmenu3-content">
      <a href="#" class="pmenu-close">&times;</a>
      <h2 class="pmenu-heading">CONNECT FACEBOOK</h2>
	<input type="text" name="userid-facebook" placeholder="Enter Facebook Userid">
	<br>
	<button class="button">submit</button>
 </div>
</div>
<br>

<!-- p menu 4 -->
 <div class="pmenu4" id="pmenu4">
    <div class="pmenu4-content">
      <a href="#" class="pmenu-close">&times;</a>
      <h2 class="pmenu-heading">CONNECT TWITTER</h2>
	<input type="text" name="userid-instagram" placeholder="Enter Twitter Userid">
	<br>
	<button class="button">submit</button>
 </div>
</div>
<div class="row">
	<div class="twitter-section">
		<p style="color: white;">Twitter</p>
		<a href="#pmenu4" class="pmenu-connect">CONNECT AN ACCOUNT</a>
	</div>

	<div class="facebook-section">
		<p style="color: white;">Facebook</p>
		<a href="#pmenu3" class="pmenu-connect">CONNECT AN ACCOUNT</a>
	</div>

	<div class="instagram-section">
		<p style="color: white;">Instagram</p>
		<!-- <a href="#pmenu2" class="pmenu-connect">CONNECT AN ACCOUNT</a> -->
		<!-- Connected Account -->
		<button id="visable2" style="font-size: 14px;" onclick="displayShow()">Account Log</button>
		<br>
		<div id="visable">
			<div id="wrapper">
				<div id="insta-wrap">
					<div id="instafeed"></div>
				</div>
				<button style="font-size: 14px;" onclick="displayNone()">Close Account Log</button>
			</div>
		</div>
	</div>
	<script>
	function displayShow() {
	    document.getElementById("visable").style.display = "block";
	    document.getElementById("visable2").style.display = "none";
	}
	function displayNone() {
	    document.getElementById("visable").style.display = "none";
	    document.getElementById("visable2").style.display = "block";
	}
	</script>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
  <footer>
    <p>iBlinkco, Copyright &copy; 2018</p>
  </footer>
<body = bgcolor="white"></body>
</html>