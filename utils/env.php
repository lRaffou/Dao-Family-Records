<?php
//Fichier qui va stocker les variables d'environnement, DONT les données sensibles privées (exemple : identifiant de connexion à une BDD)
// C'est le premier fichier à mettre dans le .gitignore
$host = $_ENV['hostBDD'] = 'mysql-dfrecords.alwaysdata.net';
$dbname = $_ENV['dbnameBDD'] = 'dfrecords_dfr';
$login = $_ENV['dbLogin'] = 'dfrecords_raff@2a00:b6e0:1:210:1::1';
$password = $_ENV['dbPassword'] = '+7q?SEXnqsyC8hakAMDsY.evukj3pr:AbBnT#fg%5Ca=7AHX>ZNPchWTKxECX[Q*';
?>