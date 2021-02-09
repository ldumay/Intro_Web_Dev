<?php
  if(isset($_POST['submit'])){
    if( ( isset($_POST['a']) && ($_POST['a']!='') ) &&
        ( isset($_POST['b']) && ($_POST['b']!='') ) &&
        ( isset($_POST['c']) && ($_POST['c']!='') )
      ){
      //--
      $resultat = '';
      $a = $_POST['a'];
      $b = $_POST['b'];
      $c = $_POST['c'];
      //--
      echo '<h2>Résulats du test</h2>
        <p style="color:green;">'.$a.'est-il compris entre '.$b.' et '.$c.' ?</p>';
      //--
      if( ( ($a>=$b) && ($a<=$c) ) || ( ($a<=$b) && ($a>=$c) ) ){
        $resultat = 'Oui';
      } else { $resultat = 'Non'; }
      //--
      echo '<p style="color:red;">'.$resultat.', '.$a.' est compris entre '.$b.' et '.$c.'.</p>';
      //--
    } else { echo 'Toutes les données n\'ont pas été saisi. Merci de réessayé : <a href="exercice_1.php">retour</a>.'; }
  }
?>
