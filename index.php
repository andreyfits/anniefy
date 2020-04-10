<?php
require_once "includes/config.php";

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
</head>
<body>
<div id="mainContainer">
    <div id="topContainer">
		<?php require_once "includes/navBarContainer.php" ?>
        <div id="mainViewContainer">
            <div id="mainContent"></div>
        </div>
    </div>
	<?php require_once "includes/navPlayingBar.php" ?>
</div>
</body>