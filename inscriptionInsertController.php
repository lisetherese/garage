<?php 

include_once("connect.php");
//include_once("fonction.php");


if(isset($_POST['nom'])&&isset($_POST['prenom'])/*&&isset($_POST['role'])*/&&isset($_POST['email'])&&isset($_POST['mdp']))
{


$requete = "INSERT INTO `user`( `nom`, `prenom`, `email`, `mdp`/*, `role`*/) VALUES (:nom,:prenom,:email,:mdp/*,:role*/ )";
$statm =  $GLOBALS["connect"]->prepare($requete);
$valeur = array(':nom'=>$_POST['nom'], ':prenom'=>$_POST['prenom'],':email'=>$_POST['email'],':mdp'=>$_POST['mdp']/*,':role'=>$_POST['role']*/);
$nbligne = $statm->execute($valeur);

    if($nbligne==1){

      echo ' <script> alert("les données sont bien enregistrées") ; window.location.href ="homeVue.php" ;</script>';
    }else {
  
     echo ' <script> alert("erreur") ; </script>';
    }

   
}else { echo " erreur post";}