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
      setcookie("Client_Prenom", $prenom, time()+3600);// expire dans 1h
      setcookie("Client_Nom", $nom, time()+3600);// expire dans 1h
      setcookie("Client_Adresse", $adresse, time()+3600);// expire dans 1h
      setcookie("Client_Ville", $ville, time()+3600);// expire dans 1h
      setcookie("Client_CodePostal", $codepostal, time()+3600);// expire dans 1h
      //--
      echo 'Consultation de :
        <ul>
          <li><a href="exercice_1_bis_etat_civil.php">votre état civil</a></li>
          <li><a href="exercice_1_bis_adresse.php">votre adresse</a></li>
        </ul>
        ';
      //--
    } else { echo 'Toutes les données n\'ont pas été saisi. Merci de réessayé : <a href="exercice_1_bis.php">retour</a>.'; }
  }
?>
