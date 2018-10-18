<?php
session_start();
include_once 'config.inc.php';


if($_SERVER["REQUEST_METHOD"] == "POST"){
	$userid_instagram = $_POST["userid-instagram"];
	$accesskey_instagram = $_POST['accesskey-instagram'];
	$_SESSION["accesskey-instagram"] = $accesskey_instagram;
	$_SESSION["userid-instagram"] = $userid_instagram;  
	
	/*** 
		shorten the sql query to just 1 using the AND command
	***/
		$sql = "UPDATE lg.users SET userid_instagram='" . $userid_instagram . "', accesskey_instagram= '" . $accesskey_instagram . "' WHERE username = '". $_SESSION['username'] ."';";
		// $sql = "select * from lg.users";

		$_SESSION["sql"] = $sql;
	
	 $link = dbConnect();
	
	/*****
		 Was not pulling the $link variable in correctly
	 ****/
		 if (mysqli_query($link, $sql)) {

	    header("Location:../dashboard.php?updatesuccessful");
	    echo '<script>
	    	
            document.getElementById("visabletext").style.display = "none";
            document.getElementById("visable2").style.display = "block";
            </script>';
	    // echo $sql;
	       //Updated This to write error to console
	    // echo ('Recorded Successfully');
	} else {
		header("Location:../dashboard.php?" . $sql);
	    //Updated This to write error to console
	      echo "0 results";

	}
	mysqli_close($link);
}

?>