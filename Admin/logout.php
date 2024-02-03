<?php
  session_start();
?>
<!DOCTYPE html>
<html>
<body>
    <?php
      unset($_SESSION["mitm_user_username"]);
      session_destroy();
    ?>
    <script>window.location.href='http://localhost/mitm/Admin/login.php';</script>

</body>
</html>
