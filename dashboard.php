<?php
// Initialize the session
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
include_once "includes/config.inc.php";
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
	header("location: signin.php");
	exit;
}
// twitter api
?>
<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
	<link rel="stylesheet" type="text/css" href="css/dashboard.css">
	<script src="js/custom.js" type="text/javascript"></script>
	<link rel="shortcut icon" href="img/icon.ico" type="image/x-icon">
	<style type="text/css">
	/*visability of divs*/
	/*instagram visability*/
	#visable{
		display: none;
	}
	#visable2{
		display: none;
	}
	#visabletext{
		display: block;
	}

	/*facebook visability*/
	#visableFB{
		display: none;
	}
	#visable2FB{
		display: none;
	}
	#visabletextFB{
		display: block;
	}
	/*different pages*/
	#content-dashboard{
		display: block;
	}
	#A-visable{
		display: block;
	}
	#A-visable2{
		display: none;
	}
</style>a

<title><?php echo $_SESSION["accesskey-instagram"]; ?> Dashboard - iBlinkco</title>
<script src="js/instafeed.min.js" type="text/javascript"></script>
<script type="text/javascript" >
	 var ak = <?php echo json_encode($_SESSION["accesskey-instagram"]); ?>;
	 var uid = <?php echo json_encode($_SESSION["userid-instagram"]); ?>;


	// alert(ak , uid);
	// ak.toString();
	// uid.toString();


	var userFeed = new Instafeed({

	// iBlinkco
	// user id: 8286401205
	// accessToken:8286401205.1677ed0.ddb59e662eb349db8a471ade8feb661f

	get: 'user',
	accessToken: ak,
	userId: uid,
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
		<p style="font-family: Helvetica; float: left;">Welcome, <b>	<?php echo $_SESSION["userid-instagram"]; ?></b>.</p>

		<!-- oppening to pop up menu -->
		<p style="float: right; margin-right: 10%; color:black;" id="A-visable" onclick="Adisplay1()"><a href="#analytics"><b>Analytics</b></a></p>
		<p style="float: right; margin-right: 10%; color:black;" id="A-visable2" onclick="Adisplay2()"><a href="#"><b>Accounts</b></a></p>
		<p class="sa" style="float: right; margin-right: -13%; color: black;"><a href="#settings"><b>Settings</b></a></p>
	</div>
</div>

<!--Settings -->
<div class="settings" id="settings">
	<div class="settings-content">
		<a href="#" class="pmenu-close">&times;</a>
		<h2 class="settings-heading" style="float: center;">SETTINGS</h2>
		<form action="" method="POST">
			<p style="font-size: 24;">Username: <?php echo $_SESSION["username"]; ?></p>
			<br>
			<input style="font-size: 24px;" type="text" name="e-mail" placeholder="Email">
			<br>
			<input style="font-size: 24px; margin-top: 1.5%;" type="text" name="e-mail2" placeholder="Confirm Email">
			<br>
			<input type="button" value="submit" style="font-size: 14px;">
		</form>
	</div>
</div>
<!--Analytics -->
<div class="analytics" id="analytics">
	<div class="analytics-content">
		<h2 class="analytics-heading" style="float: center;">Summary</h2>
		<p>Total Followers</p>
		<p>Total Likes</p>
		<p>Potential Followers</p>
		<p>Potential Likes</p>
		<p>iBlinkco Rating</p>
	</div>
</div>

<!-- content -->
<div id="content-dashboard">
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
			<!-- Added instagram ID For the Form" -->
			<form id="insta-form" action="includes/insert-instagram.inc.php" method="POST">
				<input style="font-size: 24px;" type="text" name="userid-instagram" placeholder="Instagram Userid">
				<br>
				<input style="font-size: 24px;" type="text" name="accesskey-instagram" placeholder="Instagram Access Key">
				<br>
				<!-- button? -->

				<input type="submit" style="font-size: 24px;" value="submit" >

				<!-- <button style="font-size: 24px;" onclick= "displayNone2();">Submit</button> -->
			</form>
		</div>
	</div>
	<script type="text/javascript">

	</script>
	<br>

	<!-- p menu 3 -->
	<div class="pmenu3" id="pmenu3">
		<div class="pmenu3-content">
			<a href="#" class="pmenu-close">&times;</a>
			<h2 class="pmenu-heading">CONNECT FACEBOOK</h2>
			<input type="button" onclick="FBdisplayNone2(); logIn();" value="Login With Facebook">
			<script>
				var person = { userID: "", name: "", accessToken: "", picture: "", email: ""};

				function logIn(){
					FB.login(function (response){
						if (response.status == "connected") {
							person.userID = response.authResponse.userID;
							person.accessToken = response.authResponse.accessToken

							FB.api('/me?fields=id,name,email,picture.type(large),', function (userData){
								console.log(userData);
							});
						}
					}, {scope: 'public_profile, email'})
				}
				window.fbAsyncInit = function() {
					FB.init({
						appId      : '1124891210991887',
						cookie     : true,
						xfbml      : true,
						version    : 'v3.1'
					});

					FB.AppEvents.logPageView();

				};

				(function(d, s, id){
					var js, fjs = d.getElementsByTagName(s)[0];
					if (d.getElementById(id)) {return;}
					js = d.createElement(s); js.id = id;
					js.src = "https://connect.facebook.net/en_US/sdk.js";
					fjs.parentNode.insertBefore(js, fjs);
				}(document, 'script', 'facebook-jssdk'));
			</script>
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
			<a href="#pmenu3" class="pmenu-connect" id="visabletextFB">CONNECT AN ACCOUNT</a>
			<button id="visable2FB" style="font-size: 14px;" onclick="FBdisplayShow()">Account Log</button>
			<div id="visableFB">
				<script type="text/javascript">
					document.write(person);
				</script>
				<button style="font-size: 14px;" onclick="FBdisplayNone()">Close Account Log</button>
			</div>
		</div>

		<div class="instagram-section">
			<p style="color: white;">Instagram</p>
			<a href="#pmenu2" class="pmenu-connect" id="visabletext">CONNECT AN ACCOUNT</a>
			<!-- Connected Account -->


			<button id='visable2' style='font-size: 14px;' onclick='displayShow()'>Account Log</button>



<!-----------------I have Add Some PHP HERE David ------------------------------->


	<?php
	// Added this code to check if btn has been submitted and if so display the log button
				if(isset($_SESSION['insta-btn']) && !empty($_SESSION['insta-btn'])){

					echo "<script>displayNone2(".$_SESSION['insta-btn']."); </script>";
				}



			?>

			<br>
			<div id="visable">
				<div id="wrapper">
					<div id="insta-wrap">
						<div id="instafeed"></div>
					</div>
				</div>

				<button style="font-size: 14px;" onclick="displayNone();">Close Account Log</button>
				<button style="font-size: 14px;" onclick="displayNone2(<?php  $_SESSION['insta-btn'] =0; echo $_SESSION['insta-btn'];?>);">Disconnect Account </button>
			</div>
		</div>
	</div>
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
<footer id="footer">
	<p>iBlinkco, Copyright &copy; 2018</p>
</footer>
</html>
