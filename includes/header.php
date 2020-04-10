<?php
require_once "includes/config.php";
require_once "includes/classes/Artist.php";
require_once "includes/classes/Album.php";
require_once "includes/classes/Song.php";

if (isset($_SESSION['userLoggedIn'])) {
	$userLoggedIn = $_SESSION['userLoggedIn'];
} else {
	header("Location: register.php");
}

?>
<!DOCTYPE html>
<head>
    <title>Welcome to Anniefy!</title>
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <script src="assets/js/script.js"></script>
</head>
<body>
<script>
    var audioElement = new Audio();
    audioElement.setTrack("assets/music/bensound-acousticbreeze.mp3");
    audioElement.audio.play;
</script>
<div id="mainContainer">
    <div id="topContainer">
		<?php require_once "includes/navBarContainer.php" ?>
        <div id="mainViewContainer">
            <div id="mainContent">
                