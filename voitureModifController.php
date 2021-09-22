<?php 
include_once("connect.php");
include_once("fonction.php");


if( isset($_POST['id']) && isset($_POST['modele']) &&    isset($_POST['plaque']) && isset($_POST['garage']))

{
   
   $nbligne = updateVoiture();
   $nbligne1 = updateGarage();


    if($nbligne==1 && $nbligne1==1){
        //header('location:home.php');
        echo '<script> alert("les données sont bien modifiées") ; window.location.href ="voitureSelectVue.php" ;</script>';
    }else{

        echo '<script> alert("erreur"); </script>';
    }

}else {echo "erreur post";}