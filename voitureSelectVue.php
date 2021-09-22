<?php
include_once('connect.php');
include_once('entete.php');
include_once('fonction.php');

  ?>
<br>
<br>
<br>
<div style='text-align:center'>

<form action="voitureSelectController.php" method ="post">
  <label for="fmat" ><h1>Liste voiture :</h1></label><br>
  <select name="id">
  <?php
  $voitureArray = selectVoiture($_SESSION['user'][0]['id']); 

  echo "<option value='0' >Select Voiture</option>";
  foreach($voitureArray  as $cle){
         echo '<option value="'.$cle['id'].'">'.$cle['plaque'].'</option>';
  }
  ?>
  </select>
  <br><br>
  <input type="submit" value="Afficher"/>
</form>
</div> 

 

