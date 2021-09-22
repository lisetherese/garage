<?php 
include_once("connect.php");


if(isset($_POST['id'])&& isset($_POST['nom'])){
      
    $requete= "UPDATE `garage` SET `nom`= :nom WHERE `id`=:id";
    
    $stm = $GLOBALS['connect']->prepare($requete);
 
    $valeur = array(':id'=>$_POST['id'],':nom'=>$_POST['nom']);

    $nbligne = $stm->execute($valeur);
   
    if($nbligne==1){
        
        echo '<script> alert("les données sont bien modifiées") ; window.location.href ="garageSelectController.php" ;</script>';

   }else {

           echo '<script> alert("erreur"); </script>';
           
   }


}else{ echo "erreur POST";}
?>