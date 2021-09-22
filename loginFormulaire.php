<?php include_once('entete.php') ?>
<?php

if(isset($_GET['erreur']))
{
    echo $_GET['erreur'] ;

}

?>
<h2 style ="w3-center">Log in:</h2>
<form action="loginController.php" method ="post">

  <label for="email">E mail:</label><br>
  <input type="email" id="email" name="email" required><br>
  <label for="mdp">Mot de passe:</label><br>
  <input type="password" id="mdp" name="mdp" required><br><br>
  <input type="submit" value="Se connecter">
</form> 

</body>
</html>