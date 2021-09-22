<?php 
include_once('entete.php');
include_once('fonction.php'); 


if(isset($_POST['id'])){

$voiture = selectVoitureById($_POST['id']);
//var_dump($voiture);
?>
<br>
<br>
<br>
<div style="margin-left:40rem">
<h1 style ="w3-center">Voiture Info:</h1>
<form action="voitureModifController.php" method ="post">
  <input type ="hidden" name="id_garage" value = '<?php echo $voiture['id_garage']; ?>'><br>
  <input type="hidden" id="voiture_id" name="id" value='<?php echo $voiture['id'];?>'><br>
  <label for="modele">Modele:</label><br>
  <input type="text" id="modele" name="modele" value='<?php echo $voiture['modele'];?>'><br><br>
  <label for="plaque">Plaque:</label><br>
  <input type="text" id="plaque" name="plaque" value='<?php echo $voiture['plaque'];?>'><br><br>
  <label for="garage">Garage:</label><br>
  <input type="text" id="garage" name="garage" value='<?php echo $voiture['nom'];?>'><br><br>
  <input type="submit" value="Modifier">
</form>
<br>
<a href="voitureSelectVue.php">Return to list voiture</a>
</div>
<?php }?>


</body>
</html>