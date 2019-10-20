<?php
  session_start();
  session_destroy();

  $error = "Logout Successful!";
  header("Location: ../index.php?error=" . $error);

 ?>
