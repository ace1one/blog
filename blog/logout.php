<?php
  session_start();
   header("Location: signin.php");
   $des = $_SESSION['fullname']; 
    session_unset($des);
   session_destroy();

?>