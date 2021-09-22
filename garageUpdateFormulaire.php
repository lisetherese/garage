<?php include_once('entete.php'); ?>

<?php 

if(!empty($_GET)){?>
<div style="margin-left:40rem">
<form action="garageUpdateController.php" method ="post">

<input type="number" id="id" name="id" value = "<?php echo $_GET['id'];?>" hidden><br><br>

  <label for="fname">Nom :</label><br>
  <input type="text" id="nom" name="nom" value = "<?php echo $_GET['nom'];?>" required><br><br>
  
  <input type="submit" value="Modifier">
</form> 
</div>
<?php } ?>

</body>
</html>