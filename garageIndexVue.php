<?php include_once('entete.php'); ?>
<br>
<br>
<br>
<br>
<div style='margin-left:40rem'>
<table>
  <tr>
  <th>Id</th>
  <th>Nom du garage</th>
  <th>Action</th>
  </tr>
 <?php

if( !empty($_GET))
{
      foreach($_GET as $cle )

      {   echo '<tr>';
          echo ' <td>'.$cle['id'].'</td>';
          echo ' <td>'.$cle['nom'].'</td>';
          $res = http_build_query($cle); 
          echo ' <td> <a href="garageDeleteController.php?id='.$cle['id'].'"> Supprimer </a>
          <a href="garageUpdateFormulaire.php?'.$res.'"> Modifier </a></td>';
          echo '</tr>';

      }
    }else {   echo " votre table est vide";}

?>
</table>
</div>
</body>
</html>