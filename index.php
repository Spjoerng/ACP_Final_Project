<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" href="SmartFLO%20Logo.png" type="image/png">
    <title>SmartFLO Login</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <div class="imageContainer">
        <img src="login_border1.png" alt="Login Border">
    </div>

    <form action="login.php" method="post">
        <h2>Please Login</h2>

        <?php if (isset($_GET['error'])) { ?>
            <p class="error"><?php echo $_GET['error']; ?></p>
        <?php } ?>

        <input type="text" name="uname" placeholder="Username"><br>
        <input type="password" name="password" placeholder="Password"><br>

        <div class="signin-container"> 
            <a href="semselect.php">
                <img src="signin_logo.png" style="width: 15px; height: 15px;" alt="Sign In Logo">
            </a>
            <button type="submit">Sign in</button>
        </div>
        <br>

        <hr class="divider"> <!-- Horizontal line added here -->

        <div class="action-container">

            <div class="team_container">
                <a href="Contactus.html">
                    <img src="mail_logo.png" style="width: 15px; height: 15px;" alt="Mail Icon">
                 </a>
                <a href="Contactus.html">Contact Us</a>
            </div>
        </div>
    </form>
</body>
</html>
