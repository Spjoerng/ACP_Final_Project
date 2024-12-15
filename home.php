<?php
session_start();
if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="home_styles.css">
    <title>HOME</title>
</head>
<body>
    
    <div class="borderContainer">
        <img src="menu border.png">
    </div>

    
    <a href="logout.php">Logout</a>
    <h1> Hello, <?php echo $_SESSION['name']; ?></h1>
</body>
</html>

<?php
}else{
    header("Location: index.php");
    exit();
}
?>