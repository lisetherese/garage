<?php 

include_once("connect.php");
include_once("fonction.php");


if(isset($_POST['id_user'])&&isset($_POST['modele'])&&isset($_POST['plaque'])&&isset($_POST['garage']))
{
$allGarages = selectAllGarage();
foreach($allGarages as $cle){
    if(strcasecmp($_POST['garage'],$cle['nom'])!==0){
        $id_garage = insertGarage($_POST['garage']);
        $nbligne = insertVoiture($id_garage);
        if($nbligne==1){
            echo ' <script> alert("les données sont bien enregistrées") ; window.location.href ="voitureSelectVue.php" ;</script>';
          }else { echo ' <script> alert("erreur") ; </script>';}
    }else{
        $requete = "SELECT id FROM garage WHERE nom = :nom ";
        $statm = $GLOBALS["connect"]->prepare($requete);
        $statm->execute(array(':nom'=>$cle['nom']));
        $garageInfoArray =  $statm->fetch(PDO::FETCH_ASSOC);
        $nbligne = insertVoiture($garageInfoArray['id']);
        if($nbligne==1){
            echo ' <script> alert("les données sont bien enregistrées") ; window.location.href ="voitureSelectVue.php" ;</script>';
          }else { echo ' <script> alert("erreur") ; </script>';}
    }
}
   
}else { echo " erreur post";}