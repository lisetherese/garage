<?php

include_once("connect.php");
include_once("fonction.php");
if(isset($_POST['nom']))
{

    $lastId =  insertGarage($_POST['nom']);

    if(!empty($lastId)){

      echo ' <script> alert("les données sont bien enregistrées") ; window.location.href ="garageSelectController.php" ;</script>';
    }else {

      echo ' <script> alert("erreur") ; </script>';
    }


}
?>