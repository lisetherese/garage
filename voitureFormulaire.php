<?php 
include_once('entete.php');
include_once('fonction.php'); 
?>
<br>
<br>
<br>
<div style="margin-left:40rem">
<h1 style ="w3-center">Voiture Info:</h1>
<form action="voitureInsertController.php" method ="post">
  <input type ="hidden" name="id_user" value = '<?php echo $_SESSION['user'][0]['id']; ?>'><br>
  <label for="modele">Modele:</label><br>
  <input type="text" id="modele" name="modele"><br><br>
  <label for="plaque">Plaque:</label><br>
  <input type="text" id="plaque" name="plaque" ><br><br>
  <label for="garage">Garage:</label><br>
  <input type="text" id="garage" name="garage" list="suggestions">
  <datalist id="suggestions">
      <?php
      $garageArray=selectAllGarage();
      foreach ($garageArray as $cle){
          echo '<option value="'.$cle['nom'].'">';
      }
      ?>
</datalist>
  <br><br>
  <input type="submit" value="Ajouter">
</form>
</div>


</body>
</html>