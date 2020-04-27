<!DOCTYPE html>
<html lang="fr">

<head>
   <meta charset="UTF-8">
   <title>Validation Message</title>
</head>

<body>

<?php
include("connexion.php");

// Si les valeurs ne sons pas écrit ou si email et message sont pas nuls
if(isset($_POST["nom"], $_POST["prenom"], $_POST["email"], $_POST["message"]) and ($_POST["email"]!="") and ($_POST["message"]!="")){

// Attributions des valeurs
$nom = $_POST["nom"];
$prenom = $_POST["prenom"];
$email = $_POST["email"];
$message = $_POST["message"];

// On dit se que l'on veut mettre dans la BDD
$sql = "INSERT INTO formulaire(nom, prenom, email, message) VALUES (:nom, :prenom, :email, :message)";

// On prépare la requête avant l'envoi
$req = $link->prepare($sql);
$req->execute(array(":nom" => $nom, ":prenom" => $prenom, ":email" => $email, ":message" => $message));
// On affiche un message de validation
echo("<h1>Votre message nous a été transmis !</h1>");

// Si les données en if ne sont pas inscrit le message suivant s'affiche
} else {
   echo("<h1>Tu as oublié une partie du travail !!</h1>");
}
?>
   <br><br>
   <a href="page_formulaire.html">Retour au formulaire</a>

</body>

</html>