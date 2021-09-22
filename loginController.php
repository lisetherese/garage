
<?php


include_once('connect.php');



if( isset($_POST['email'])    &&    isset($_POST['mdp']))

{
  
  $requete = "SELECT `id`, `nom`, `prenom`, `email`, `mdp` /*, `role`*/  FROM `user` WHERE email = :email and mdp =:mdp ";

  $stm = $GLOBALS["connect"]->prepare($requete);

  $valeur = array(":email"=>$_POST['email'], ":mdp"=>$_POST['mdp']);
  $stm->execute($valeur);
  
  $user = $stm->fetchAll(PDO::FETCH_ASSOC);



       if( !empty($user)   )
                   {     
                        
                         session_start();
                         $_SESSION['user'] = $user ;

                         header('location:homeVue.php ');
                         exit ;

                  }else {
                     
                               header('location:loginFormulaire.php?erreur=email ou mot de passe  non valide');    

                  }


   

}else {   echo "erreur post"  ;}




?>
