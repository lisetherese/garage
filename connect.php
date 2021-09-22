<?php

 $host = 'localhost';
 $dbname = 'garage';
 $username = 'root';
 $password = '';
 $port = '3307';
 
try {
    
    $connect = new PDO("mysql:host=$host;dbname=$dbname;port=$port;charset=utf8", $username, $password);
  
} catch (PDOException $pe) {
    die("Echec de connexion $dbname :" . $pe->getMessage());
}


?>