<?php
  $clientAdresse = $_COOKIE["Client_Adresse"];
  $clientVille = $_COOKIE["Client_Ville"];
  $clientCodePostal = $_COOKIE["Client_CodePostal"];
  echo 'Vous habitez : <br>'.$clientAdresse;
  echo '<br>'.$clientCodePostal.' '.$clientVille;
?>
