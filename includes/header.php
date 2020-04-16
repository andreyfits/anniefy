<?php
require_once "includes/config.php";
require_once "includes/classes/User.php";
require_once "includes/classes/Artist.php";
require_once "includes/classes/Album.php";
require_once "includes/classes/Song.php";
require_once "includes/classes/Playlist.php";

if (isset($_SESSION['userLoggedIn'])) {
	$userLoggedIn = new User($con, $_SESSION['userLoggedIn']);
	$username = $userLoggedIn->getUsername();
	echo "<script>userLoggedIn = '$username';</script>";
} else {
	header("Location: register.php");
}

?>
<!DOCTYPE html>
<head>
    <title>Welcome to Anniefy!</title>
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="assets/js/script.js"></script>
</head>
<body>
<div id="mainContainer">
    <div id="topContainer">
		<?php require_once "includes/navBarContainer.php" ?>
        <div id="mainViewContainer">
            <div id="mainContent">
                