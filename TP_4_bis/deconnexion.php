<?php
  session_start();
  $_SESSION['CONNECTE']='NO';
  header('Location: login.php?logout=true');
?>
