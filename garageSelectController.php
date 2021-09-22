<?php
include_once('connect.php');
include_once('fonction.php');
$garageArray = selectAllGarage();

  if (!empty($garageArray)){
    
  $res = http_build_query($garageArray);

     header('location:garageIndexVue.php?'.$res);
  }else {
    echo '<script> alert("votre table est vide");  window.location.href="garageIndexVue.php";</script>';

  }




  ?>