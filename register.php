<?php
require_once "includes/config.php";
require_once "includes/classes/Account.php";
require_once "includes/classes/Constants.php";

$account = new Account($con);

require_once "includes/handlers/register-handler.php";
require_once "includes/handlers/login-handler.php";

function getInputValue($name)
{
	if (isset($_POST[$name])) {
		echo $_POST[$name];
	}
}

?>

<!DOCTYPE html>
<head>
    <title> Welcome to Anniefy!</title>
</head>
<body>
<div id="inputContainer">
    <form id="loginForm" action="register.php" method="post">
        <h2> Login to your account </h2>
        <p>
			<?php echo $account->getError(Constants::$loginFailed); ?>
            <label for="loginUsername">Username</label>
            <input id="loginUsername" name="loginUsername" type="text" placeholder="e.g. annaGnatyuck" value="<?php
			getInputValue('loginUsername'); ?>" required>
        </p>
        <p>
            <label for="loginPassword">Password</label>
            <input id="loginPassword" name="loginPassword" type="password" placeholder="Your password" required>
        </p>
        <button type="submit" name="loginButton">LOG IN</button>
    </form>

    <form id="registerForm" action="register.php" method="post">
        <h2>Create your free account</h2>
        <p>
			<?php echo $account->getError(Constants::$usernameCharacters); ?>
			<?php echo $account->getError(Constants::$usernameTaken); ?>
            <label for="username">Username</label>
            <input id="username" name="username" type="text" placeholder="e.g. annaGnatyuck" value="<?php
			getInputValue('username'); ?>" required>
        </p>
        <p>
			<?php echo $account->getError(Constants::$firstNameCharacters); ?>
            <label for="firstName">First Name</label>
            <input id="firstName" name="firstName" type="text" placeholder="e.g. Anna"
                   value="<?php getInputValue('firstName'); ?>" required>
        </p>
        <p>
			<?php echo $account->getError(Constants::$lastNameCharacters); ?>
            <label for="lastName">Last Name</label>
            <input id="lastName" name="lastName" type="text" placeholder="e.g. Gnatyuck"
                   value="<?php getInputValue('lastName'); ?>" required>
        </p>
        <p>
			<?php echo $account->getError(Constants::$emailsDoNotMatch); ?>
			<?php echo $account->getError(Constants::$emailInvalid); ?>
			<?php echo $account->getError(Constants::$emailTaken); ?>
            <label for="email">Email</label>
            <input id="email" name="email" type="email" placeholder="e.g. anna@gmail.com"
                   value="<?php getInputValue('email'); ?>" required>
        </p>
        <p>
            <label for="email2">Confirm email</label>
            <input id="email2" name="email2" type="email" placeholder="e.g. anna@gmail.com"
                   value="<?php getInputValue('email2'); ?>" required>
        </p>
        <p>
			<?php echo $account->getError(Constants::$passwordsDoNotMatch); ?>
			<?php echo $account->getError(Constants::$passwordNotAlphanumeric); ?>
			<?php echo $account->getError(Constants::$passwordCharacters); ?>
            <label for="password">Password</label>
            <input id="password" name="password" type="password" placeholder="Your password" required>
        </p>
        <p>
            <label for="password2">Confirm password</label>
            <input id="password2" name="password2" type="password" placeholder="Your password" required>
        </p>
        <button type="submit" name="registerButton">SIGN UP</button>
    </form>
</div>
</body>
