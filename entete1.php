
<!DOCTYPE html>
<html>
<?php session_start(); ?>
<head>

  <?php
  $BASE = "http://localhost/garage/";
 
    echo '<link rel="stylesheet" type="text/css" href=""http://localhost/ecole/css/menu.css" />';
  ?>
 
</head>
<body>
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
    <li><a href="<?php echo $BASE;?>userSelectController.php">Afficher User</a></li>
    <li> <div class="dropdown">
                    <button style='font-family:inherit;font-size: inherit;' class="dropbtn">Voiture</button>
            <div class="dropdown-content">
            <a href="<?php echo $BASE;?>voitureFormulaire.php">Ajouter</a>
            <a href="<?php echo $BASE;?>voitureSelectController.php">Afficher</a>
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
               
                        <!--if( $_SESSION['user']['role']== 'ROLE_ADMIN')
                          { ?>

                                <li><a href="<?php echo $BASE;?>inscriptionFormulaire.php">Ajouter User</a></li>
                              <li><a href="<?php echo $BASE;?>userSelectController.php">Afficher User</a></li>
                              <li> <div class="dropdown">
                                              <button style='font-family:inherit;font-size: inherit;' class="dropbtn">Voiture</button>
                                      <div class="dropdown-content">
                                      <a href="<?php echo $BASE;?>voitureFormulaire.php">Ajouter</a>
                                      <a href="<?php echo $BASE;?>voitureSelectController.php">Afficher</a>
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
                              
                            <?php //} elseif( $_SESSION['user']['role']== "ROLE_USER")
                                       {?>

                                       <li><a href="<?php echo $BASE;?>userSelectController.php">Afficher User</a></li>
                                       <li> <div class="dropdown">
                                              <button style='font-family:inherit;font-size: inherit;' class="dropbtn">Voiture</button>
                                      <div class="dropdown-content">
                                      <a href="<?php echo $BASE;?>voitureFormulaire.php">Ajouter</a>
                                      <a href="<?php echo $BASE;?>voitureSelectController.php">Afficher</a>
                                      </div>
                                      </div>
                              </li>  
                              <li><a href="<?php echo $BASE;?>garageSelectController.php">Afficher</a></li>                                      
                                       <?php }?>
                  <li><a href="<?php echo $BASE;?>deconnecter.php">Se déconnecter</a></li>  -->
                                            
         
    <?php }?>
          
</div>
                

       
</ul>

