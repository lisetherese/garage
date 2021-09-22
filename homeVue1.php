
<!DOCTYPE html>
<html>
<?php 
include_once("fonction.php");
session_start();
?>
<head>

  <?php
  $BASE = "http://localhost/garage/";
 
    echo '<link rel="stylesheet" type="text/css" href="http://localhost/garage/css/menu.css" />';
  ?>
 
</head>
<body>
<ul>
<li><a href="<?php echo $BASE;?>homeVue.php">Home</a></li>
</ul>

    <div style="text-align: center">
    <h1 >Info user:</h1>
    <?php 
  
    echo "<p style='font-size: 1.5rem'>Nom: ".$_SESSION['user'][0]['nom']."<br>Prenom: ".$_SESSION['user'][0]['prenom']."<br>Email: ".$_SESSION['user'][0]['email']."<br>Password: ".$_SESSION['user'][0]['mdp']."</p>";
    ?>
    <br>
    
    </div>  
    </body>
</html>
    
          



