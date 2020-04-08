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
</head>
<body>
<?php echo "Hi, Anniefy!"; ?>
</body>