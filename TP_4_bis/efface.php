<?php
  session_start();
  if( (isset($_SESSION['CONNECTE'])) && ($_SESSION['CONNECTE']=='YES') ){
    echo 'Bonjour '.$_SESSION['LOGIN'].'.<br>Vous êtes connecté.';
    echo '
      <ul>
        <li><a href="ajoute.php">ajoute</a></li>
        <li><a href="modif.php">modif</a></li>
        <li><a href="efface.php">efface</a></li>
        <li><a href="liste.php">liste</a></li>
      </ul>';
      echo '<br><a href="deconnexion.php">✖ Déconnexion</a>';
  } else { header('Location: login.php?message=erreur'); }
?>
