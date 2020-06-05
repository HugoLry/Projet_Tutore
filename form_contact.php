<!DOCTYPE html>
<html lang="fr">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600;700;800&family=Roboto:wght@500;700&display=swap" rel="stylesheet"> 
   <link rel="stylesheet" type="text/css" href="style_contact.css"/>
   <title>Contact - MMIWork</title>
</head>

<body>

<?php
// Entête en html de la page qui contient le menu, le titre
echo'    
<header>
   <nav>
      <a href="index.html"><img src="img/logo.png" alt="MMIWork"></a>
      <a href="page_a-propos.html">à propos</a>
      <a href="page_contact.html">contact</a>
   </nav>';

// Connexion à la base de données
include("connexion.php");

// Si les valeurs ne sont pas écrites ou si email et message ne sont pas nuls
if(isset($_POST["nom"], $_POST["prenom"], $_POST["email"], $_POST["message"]) and ($_POST["email"]!="") and ($_POST["message"]!="")){

// Attributions des valeurs
$nom = $_POST["nom"];
$prenom = $_POST["prenom"];
$email = $_POST["email"];
$message = $_POST["message"];

// On dit ce que l'on veut mettre dans la BDD
$sql = "INSERT INTO formulaire(nom, prenom, email, message) VALUES (:nom, :prenom, :email, :message)";

// On prépare la requête avant l'envoi
$req = $link->prepare($sql);
// On envoie la requête avec les valeurs définies plus haut
$req->execute(array(":nom" => $nom, ":prenom" => $prenom, ":email" => $email, ":message" => $message));
// On affiche un message de validation
echo("<h1>Votre message nous a été transmis !</h1>");

// Si les données en if ne sont pas inscrit le message suivant s'affiche
} else {
   echo("<h1>Tu as oublié une partie du travail !</h1>");
}
?>

<img src="img/voyante-contact.png" alt="">
</header>

<main>
<!--Lien vers la page contact pour consulter d'autres informations-->
<a href="page_contact.html">Retour</a>
</main>

</body>

</html>