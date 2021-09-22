<?php

  include_once('connect.php');

  
  if(isset($_GET['id'])){

        $request = "SELECT DISTINCT id_garage FROM voiture ";
        $result = $GLOBALS['connect']->query($request);
        $id_garageArray =  $result->fetchAll(PDO::FETCH_ASSOC);
        foreach ($id_garageArray as $cle){
            if($_GET['id']==$cle['id_garage']){echo '<script> alert("impossible de supprimer les données") ; window.location.href ="garageSelectController.php" ;</script>'; 
            }else{
                $requete = "DELETE FROM `garage` WHERE id=:id";

                $statm = $GLOBALS['connect']->prepare($requete);

                $valeur = array(':id'=>$_GET['id']);

                $nbligne = $statm->execute($valeur);

                if($nbligne){
            
                    header('location:garageSelectController.php');
                    exit ;
                }else {echo ' <script> alert("votre table est vide") ; window.location.href ="garageSelectController.php" ;</script>';}
            }
        }

  }else{ echo "erreur GET";}
  ?>