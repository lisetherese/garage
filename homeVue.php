<?php include_once('entete.php'); ?>

<div style="margin:auto; width: 27%;">
    <div style="text-align: left;">
    
    <?php 
  if(isset($_SESSION['user'])){
    echo "<h1 >Info user:</h1>";
    echo "<p style='font-size: 1.5rem'>Nom: ".$_SESSION['user'][0]['nom']."<br>Prenom: ".$_SESSION['user'][0]['prenom']."<br>Email: ".$_SESSION['user'][0]['email']."<br>Password: ".$_SESSION['user'][0]['mdp']."</p>";}
    
    ?>
    <br>
    
    </div> 
</div>

</body>
</html>