<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SmartFLO Choose Semester</title>
  <link rel="icon" href="SmartFLO%20Logo.png" type="image/png">
  <link rel="stylesheet" href="semselect.css">
</head>
<body>

  <!--menu border-->
  <div class="homepage_border">
    <img src = "sem_border.png">
  </div>

  <!--sign-out button-->
  <div class="container_of_signout_button">
    <a href="login.php">
      <img src="log-out_logo.png" alt="Log out" style="width: 30px; height: 30px;">
    </a>
    <a href="login.php">Sign-out</a>
  </div>

  <div class="gray_border"></div>

  <div class="text">
      <p>Choose Semester:</p>
    </div>

  <form class="sem_form" action="none">

    <!--button for FIRST SEM-->
    <div class="container_of_first_sem">
      <a href="menu_first_sem.html">FIRST</a>
    </div>

    <!--button for SECOND SEM-->
    <div class="container_of_second_sem">
      <a href="menu_second_sem.html">SECOND</a>
    </div>

    <!--button for MIDTERM-->
    <div class="container_of_midterm_sem">
      <a href="menu_third_sem.html">MIDTERM</a>
    </div>
  </form>

  <div class="container_of_enter_button">
    <button type="submit" name="submit" style="background:none; border:none; cursor:pointer;">
      <img src="save_logo.png" style="width: 30px; height: 30px;">
    </button>

    <button type="submit" name="submit" style="background:none; border:none; cursor:pointer; color:inherit; font:inherit; text-decoration:none;">
      Enter
    </button>
  </div>

</body>
</html>
