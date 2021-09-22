
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
<body style="background-image: url('https://images.unsplash.com/photo-1547754980-3df97fed72a8?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTF8fHNub3d8ZW58MHx8MHx8&ixlib=rb-1.2.1&w=1000&q=80'); background-repeat: no-repeat;background-attachment: fixed;background-size: 100% 100%;">
<ul>
<li><a href="<?php echo $BASE;?>homeVue.php">Home</a></li>
  <?php
  if (!isset($_SESSION['user'])) 
  {  
    
    
    ?>
          <li><a href="<?php echo $BASE;?>loginFormulaire.php">Se Connecter</a></li>
         

  <?php 
  } else { ?>
    <li><a href="<?php echo $BASE;?>inscriptionFormulaire.php">Ajouter User</a></li>
   <!-- <li><a href="<?php echo $BASE;?>userSelectController.php">Afficher User</a></li>-->
    <li> <div class="dropdown">
                    <button style='font-family:inherit;font-size: inherit;' class="dropbtn">Voiture</button>
            <div class="dropdown-content">
            <a href="<?php echo $BASE;?>voitureFormulaire.php">Ajouter</a>
            <a href="<?php echo $BASE;?>voitureSelectVue.php">Afficher</a>
            </div>
            </div>
    </li>
    <li> <div class="dropdown">
                    <button style='font-family:inherit;font-size: inherit;' class="dropbtn">Garage</button>
            <div class="dropdown-content">
            <a href="<?php echo $BASE;?>garageFormulaire.php">Ajouter</a>
            <a href="<?php echo $BASE;?>garageSelectController.php">Afficher</a>
            </div>
            </div>
    </li>
    </div>
                
    <li><a href="<?php echo $BASE;?>deconnecter.php">Se déconnecter</a></li>
       
    </ul>   
  
  
    <?php }?>
    </ul>
          



