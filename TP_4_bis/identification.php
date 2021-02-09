<?php
  if(isset($_POST['submit'])){
    if( ( isset($_POST['login']) && ($_POST['login']!='') ) &&
        ( isset($_POST['password']) && ($_POST['password']!='') )
      ){
      //--
      $login = $_POST['login'];
      $password = $_POST['password'];
      //--
      if( ($login=='crepo') && ($password=='nutella') ){
        session_start();
        $_SESSION['CONNECTE'] = 'YES';
        $_SESSION['LOGIN'] = $login;
        header('Location: liste.php');
      }
      //--
    } else { header('Location: login.php?message=erreur'); }
  }
?>
