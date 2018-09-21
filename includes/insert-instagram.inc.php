<?php
session_start();
include_once 'config.inc.php';

if($_SERVER["REQUEST_METHOD"] == "POST"){
	$userid_instagram = $_POST['userid-instagram'];

	$sql = "UPDATE lg.users SET userid_instagram='" . $userid_instagram . "' WHERE username = '". $_SESSION['username']."';";

	$accesskey_instagram = $_POST['accesskey-instagram'];

	$sql = $sql. " UPDATE lg.users SET accesskey_instagram='" . $accesskey_instagram. "' WHERE username = '".$_SESSION['username']."'";
	$results = mysqli_query($link, $sql);
	echo $sql;
	//Stored Variable in session
	$_SESSION["accesskey-instagram"] = $accesskey_instagram; 
	$_SESSION["userid-instagram"] = $userid_instagram;  
	$_SESSION["sql"] = $sql;
	if (mysqli_query($link, $sql)) {
	    header("Location:../dashboard.php?updatesuccessful");
	    echo "Record updated successfully";
	} else {
		header("Location:../dashboard.php?" . $sql);
	    echo "Error submiting: " . mysqli_error($link);
	    echo $sql;
	}
}
