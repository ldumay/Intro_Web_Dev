<?php
  if( (isset($_GET['message'])) && ($_GET['message']=='erreur') ){ $erreur=true; } else { $erreur=false; }
  if( (isset($_GET['logout'])) && ($_GET['logout']=='true') ){ $logout=true; } else { $logout=false; }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//FR" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="fr">
    <head>
		<!-- Title -->
        <title>Intro Web Dev</title>
		<!-- ./Title -->

        <!-- MetasDatas -->
        <meta name="Content-Type" content="UTF-8" charset="UTF-8">
        <meta name="Content-Language" content="fr">

	</head>
	<body>
    <?php if($erreur==true){ echo '<h2 style="color:red;"><i>Erreur de connexion</i></h2>'; } ?>
      <?php if($logout==true){ echo '<h2 style="color:green;"><i>Vous êtes déconnecté.</i></h2>'; } ?>
    <form method="post" action="identification.php">
      <table>
        <tr>
          <td><label>Login</label></td>
          <td><input type="text" name="login"/></td>
        </tr>
        <tr>
          <td><label>Password</label></td>
          <td><input type="password" name="password"/></td>
        </tr>
        <tr>
          <td colspan="2">
            <input type="submit" name="submit" value="Envoyer"/>
            <input type="reset" value="Réinitialiser"/>
          </td>
        </tr>
      </table>
    </form>
	</body>
	 <!-- Javascript -->
    <script type="text/javascript">
      //--
    </script>
</html>
