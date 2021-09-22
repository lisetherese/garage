<?php
include_once("connect.php");

function selectVoiture(string $idUser):Array
{
    $requete1 = "SELECT voiture.id, voiture.modele, voiture.plaque, voiture.id_garage FROM voiture, user where user.id = :id and user.id = voiture.id_user";
    $statm = $GLOBALS["connect"]->prepare($requete1);
    $statm->execute(array(':id'=>$idUser));
    $voitureArray =  $statm->fetchAll(PDO::FETCH_ASSOC);
    return $voitureArray;

}

function selectVoitureById(string $id):Array
{
    $requete1 = "SELECT voiture.id, voiture.modele, voiture.plaque, voiture.id_garage, garage.nom FROM voiture, garage WHERE voiture.id = :id and voiture.id_garage = garage.id";
    $statm = $GLOBALS["connect"]->prepare($requete1);
    $statm->execute(array(':id'=>$id));
    $voitureInfoArray =  $statm->fetchAll(PDO::FETCH_ASSOC);
    return $voitureInfoArray[0];

}

function updateVoiture():int
{
    $requete= "UPDATE `voiture` SET `modele`= :modele, `plaque`=:plaque WHERE `id`=:id";
   
    $stm = $GLOBALS['connect']->prepare($requete);
    
    $valeur = array(':id'=>$_POST['id'],':modele'=>$_POST['modele'],':plaque'=>$_POST['plaque']);

    $nbligne = $stm->execute($valeur);
    return $nbligne;
}
function updateGarage():int
{
    $requete= "UPDATE `garage` SET `nom`= :nom WHERE `id`=:id";
   
    $stm = $GLOBALS['connect']->prepare($requete);
    
    $valeur = array(':id'=>$_POST['id_garage'],':nom'=>$_POST['garage']);

    $nbligne = $stm->execute($valeur);
    return $nbligne;
}

function insertVoiture(int $id_garage):int
{
    $requete = "INSERT INTO `voiture`( `modele`, `plaque`, `id_user`, `id_garage`) VALUES (:modele, :plaque, :id_user, :id_garage)";
    $statm =   $GLOBALS["connect"]->prepare($requete);
    $valeur = array(':modele'=>$_POST['modele'], ':plaque'=>$_POST['plaque'], ':id_user'=>$_POST['id_user'], ':id_garage'=>$id_garage);
    $nbligne = $statm->execute($valeur);
    return $nbligne;
}
function selectAllGarage():array{
    $requete = "SELECT * FROM garage";
    $result = $GLOBALS["connect"]->query($requete);
    $garageArray =  $result->fetchAll(PDO::FETCH_ASSOC);
    print_r( $result->errorInfo());
    return   $garageArray;
}

function insertGarage(string $nom): int
{
     $requete = "INSERT INTO `garage`( `nom`) VALUES (:nom)";
     $statm =   $GLOBALS["connect"]->prepare($requete);
     $nbligne = $statm->execute(array(':nom'=>$nom));
     $lastId =  $GLOBALS["connect"]->lastInsertId();
     return  $lastId ;

}

?>