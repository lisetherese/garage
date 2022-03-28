<?php 
include_once('entete.php'); 
include_once('fonction.php');?>
<br>
<br>
<div style="margin:auto; width: 27%;">

<form action="inscriptionInsertController.php" method ="post">


  <label for="fname">Nom:</label><br>
  <input type="text" id="nom" name="nom" required><br>

  <label for="fname">Prénom :</label><br>
  <input type="text" id="prenom" name="prenom" required><br>

  <!--<label for="fname">Role :</label><br>
  <select name="role" id="role">
    <option value="ROLE_ADMIN">Administrateur</option>
    
    <option value="ROLE_USER">User</option>
  </select>
  <br>-->

  
  <label for="fname">E mail:</label><br>
  <input type="email" id="email" name="email" required><br>

  <label for="fname">Mot de passe:</label><br>
  <input type="password" id="mdp" name="mdp" required><br>

  
  <br><br>
  <input type="submit" value="S'inscrire">
</form> 

</div>


</body>
</html>