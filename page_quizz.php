<!DOCTYPE html>
<html lang="fr">

<head>
   <meta charset="UTF-8">
   <link rel="stylesheet" type="text/css" href="??"/>
   <title>Fiche Métier</title>
</head>

<body>
<?php
include("connexion.php");

// On dit se que l'on veut récupérer dans la BDD
$sql = "SELECT * FROM questionnaire";
// On prépare la requête avant l'envoi
$req = $link -> prepare($sql);
$req -> execute();

//Ouvertuere du formulaire envoie vers le fichier en mode post
echo '<form action="resultat.php" method="POST">';
//Boucle qui tant que la données n'est pas fini affiche la suite
while ($data = $req -> fetch()){
    //Affichage du numéro de question et du libellé de la question
    echo '<li><h2> Question '.$data['id'].' : </h2><h1>'.$data['question'].'</h1>';
    //Affichage des 3 reponses noté A,B,C avec un choix unique
    echo '<div><input type="radio" name="question-'.$data['id'].'-rep" id="question-'.$data['id'].'-rep-A" value="A" /><label for="question-'.$data['id'].'-rep-A">'.$data['reponse_dev'].'</div>';
    echo '<div><input type="radio" name="question-'.$data['id'].'-rep" id="question-'.$data['id'].'-rep-B" value="B" /><label for="question-'.$data['id'].'-rep-B">'.$data['reponse_com'].'</div>';
    echo '<div><input type="radio" name="question-'.$data['id'].'-rep" id="question-'.$data['id'].'-rep-C" value="C" /><label for="question-'.$data['id'].'-rep-C">'.$data['reponse_neutre'].'</div></li>';
}
//Fin de la connexion avec la base de données
$req = null;

//Bouton envoie + fin du formulaire
echo '<br><br><input type="submit" value="submit"/></form>';

?>
</body>
</html>