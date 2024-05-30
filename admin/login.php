<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Design by foolishdeveloper.com -->
  <title>MITM | Home</title>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
  <!--Stylesheet-->
  <link rel="stylesheet" href="assets/css/login.css">
</head>

<body>
  <div class="background">
    <div class="shape"></div>
    <div class="shape"></div>
  </div>
  <form name="myform" class="text-center border border-light p-5" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <h3>Login Here</h3>

    <label for="username">Username</label>
    <input type="text" id="username" placeholder="Username" name="username">

    <label for="password">Password</label>
    <input type="password" id="password" placeholder="Password" name="password">

    <button class="btn btn-info btn-block" type="submit" name="submit">submit</button>
  </form>
  <?php
  include 'db.php';
  if (isset($_POST['submit'])) {

    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM mitm_user WHERE mitm_user_username='$username' and mitm_user_password='$password'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    if ($row > 0) {
      $college_type = $row["college_type"];
      session_start();
      $_SESSION["mitm_user_username"] = "$username";
      $_SESSION["college_type"] = "$college_type";
      header("location:contact.php");

    } else {
      echo 'not found';
    }
  }
  ?>
</body>

</html>