<?php include_once('entete.php'); ?>
<div style="text-align: center">
    <h1 >Info user:</h1>
    <?php 
  
    echo "<p style='font-size: 1.5rem'>Nom: ".$_SESSION['user'][0]['nom']."<br>Prenom: ".$_SESSION['user'][0]['prenom']."<br>Email: ".$_SESSION['user'][0]['email']."<br>Password: ".$_SESSION['user'][0]['mdp']."</p>";
    ?>
    <br>
    
    </div> 

</body>
</html>