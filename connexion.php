<?php

// Permet de se connecter a la base de données mmiwork en localhost
//$link = new PDO('mysql:host=localhost;dbname=mmiwork', 'root', '', array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));

// Permet de se connecter a la base de données rriviere_db sur les serveurs de l'université
$link = new PDO('mysql:host=sqletud.u-pem.fr;dbname=rriviere_db', 'rriviere', 'hPiy7iivw8', array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));

?>