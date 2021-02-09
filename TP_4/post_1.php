<?php
  if(isset($_POST['submit'])){
    if( ( isset($_POST['prenom']) && ($_POST['prenom']!='') ) &&
        ( isset($_POST['nom']) && ($_POST['nom']!='') ) &&
        ( isset($_POST['adresse']) && ($_POST['adresse']!='') ) &&
        ( isset($_POST['ville']) && ($_POST['ville']!='') ) &&
        ( isset($_POST['codepostal']) && ($_POST['codepostal']!='') )
      ){
      //--
      $prenom = $_POST['prenom'];
      $nom = $_POST['nom'];
      $adresse = $_POST['adresse'];
      $ville = $_POST['ville'];
      $codepostal = $_POST['codepostal'];
      //--
      echo 'Bienvenue '.$prenom.' <b>'.$nom.'</b>.
        <br>Nous avons bien noté que vous habitez '.$adresse.' à <b>'.$ville.'</b> ( '.$codepostal.' ).';
      //--
    } else { echo 'Toutes les données n\'ont pas été saisi. Merci de réessayé : <a href="exercice_1.php">retour</a>.'; }
  }
?>
