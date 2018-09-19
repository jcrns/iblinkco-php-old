<?php
session_start();
include_once 'config.inc.php';

if($_SERVER["REQUEST_METHOD"] == "POST"){
	// $userid_instagram = $_POST['userid-instagram'];

	// $sql = "UPDATE lg.users SET userid_instagram='$userid_instagram' WHERE id";

	$accesskey_instagram = $_POST['accesskey-instagram'];

	$sql = "UPDATE lg.users SET accesskey_instagram='$accesskey_instagram' WHERE id";
	$results = mysqli_query($link, $sql);

	//Stored Variable in session
	$_SESSION["accesskey_instagram"] = $accesskey_instagram;  
	if (mysqli_query($link, $sql)) {
	    header("Location:../dashboard.php?updatesuccessful");
	    echo "Record updated successfully";
	} else {
		header("Location:../dashboard.php");
	    echo "Error submiting: " . mysqli_error($link);
	}
}
