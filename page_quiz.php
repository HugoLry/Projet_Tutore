<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600;700;800&family=Roboto:wght@500;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style_quiz.css"/>
    <link rel="shortcut icon" href="favicon/favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon/favicon.png" type="image/png">
    <link rel="icon" sizes="32x32" href="favicon/favicon-32.png" type="image/png">
    <link rel="icon" sizes="64x64" href="favicon/favicon-64.png" type="image/png">
    <link rel="icon" sizes="96x96" href="favicon/favicon-96.png" type="image/png"> 
    <title>Quiz - MMIWork</title>
</head>

<body>
<?php
// Connexion à la base de données
include("connexion.php");

// On dit ce que l'on veut récupérer dans la BDD = dans la table questionnaire je veux tout (* signifie tout) récupérer
$sql = "SELECT * FROM questionnaire";
// On prépare la requête avant l'envoi
$req = $link -> prepare($sql);
// On exécute la requête
$req -> execute();

// Entête en html de la page qui contient le menu, le titre et le sous-titre et ouverture du formulaire en mode post
echo '
    <header>
        <nav>
            <a href="index.html"><img src="img/logo.png" alt="MMIWork"></a>
            <a href="page_a-propos.html">à propos</a>
            <a href="page_contact.html">contact</a>
        </nav>
        <img src="img/voyante-quiz.png" class="">
        <h1>Le quizz</h1>
        <h2>Avant de pouvoir consulter ma  boule de cristal,<br>
        je vais avoir besoin de toi pour répondre à quelques questions !</h2>
    </header>

    <form action="result_quiz.php" method="POST">';

// Boucle qui tant que les données ne sont pas transmises affiche la suite
while ($data = $req -> fetch()) {
    // Affichage du numéro de question et du libellé de la question
    echo '<section><h2> Question '.$data['id'].'</h2><h1>'.$data['question'].'</h1>';
    // Affecter dans la variable nombre un chiffre compris en 1 et 3
    $nombre = random_int(1, 3);
    // Si la variable nombre est égal à 1, le navigateur rentre dans la boucle et affiche la réponse développement
    if($nombre == 1) {
        echo '<div><input type="radio" name="question-'.$data['id'].'-rep" id="question-'.$data['id'].'-rep-A" value="A" /><label for="question-'.$data['id'].'-rep-A">'.$data['reponse_dev'].'</div>';
        // Affecter dans la variable nombre2 un chiffre compris en 1 et 2 pour déterminer la fin de l'affichage des réponses
        $nombre2 = random_int(1, 2);
        // Si la variable nombre2 est égal à 1 alors la réponse communication s'affiche suivi de la réponse neutre
        // Sinon la réponse neutre s'affiche suivie de la réponse communication
        if($nombre2 == 1) {
            echo '<div><input type="radio" name="question-'.$data['id'].'-rep" id="question-'.$data['id'].'-rep-B" value="B" /><label for="question-'.$data['id'].'-rep-B">'.$data['reponse_com'].'</div>';
            echo '<div><input type="radio" name="question-'.$data['id'].'-rep" id="question-'.$data['id'].'-rep-C" value="C" /><label for="question-'.$data['id'].'-rep-C">'.$data['reponse_neutre'].'</div>';
        } else {
            echo '<div><input type="radio" name="question-'.$data['id'].'-rep" id="question-'.$data['id'].'-rep-C" value="C" /><label for="question-'.$data['id'].'-rep-C">'.$data['reponse_neutre'].'</div>';
            echo '<div><input type="radio" name="question-'.$data['id'].'-rep" id="question-'.$data['id'].'-rep-B" value="B" /><label for="question-'.$data['id'].'-rep-B">'.$data['reponse_com'].'</div>';
        }
    }
    // Si la variable nombre est égal à 2, le navigateur rentre dans la boucle et affiche la réponse communication
    if($nombre == 2) {
        echo '<div><input type="radio" name="question-'.$data['id'].'-rep" id="question-'.$data['id'].'-rep-B" value="B" /><label for="question-'.$data['id'].'-rep-B">'.$data['reponse_com'].'</div>';
        // Affecter dans la variable nombre2 un chiffre compris en 1 et 2 pour déterminer la fin de l'affichage des réponses
        $nombre2 = random_int(1, 2);
        // Si la variable nombre2 est égal à 1 alors la réponse développement s'affiche suivi de la réponse neutre
        // Sinon la réponse neutre s'affiche suivie de la réponse développement
        if($nombre2 == 1) {
            echo '<div><input type="radio" name="question-'.$data['id'].'-rep" id="question-'.$data['id'].'-rep-A" value="A" /><label for="question-'.$data['id'].'-rep-A">'.$data['reponse_dev'].'</div>';
            echo '<div><input type="radio" name="question-'.$data['id'].'-rep" id="question-'.$data['id'].'-rep-C" value="C" /><label for="question-'.$data['id'].'-rep-C">'.$data['reponse_neutre'].'</div>';
        } else {
            echo '<div><input type="radio" name="question-'.$data['id'].'-rep" id="question-'.$data['id'].'-rep-C" value="C" /><label for="question-'.$data['id'].'-rep-C">'.$data['reponse_neutre'].'</div>';
            echo '<div><input type="radio" name="question-'.$data['id'].'-rep" id="question-'.$data['id'].'-rep-A" value="A" /><label for="question-'.$data['id'].'-rep-A">'.$data['reponse_dev'].'</div>';
        }
    }
    // Si la variable nombre est égal à 3, le navigateur rentre dans la boucle et affiche la réponse neutre
    if($nombre == 3) {
        echo '<div><input type="radio" name="question-'.$data['id'].'-rep" id="question-'.$data['id'].'-rep-C" value="C" /><label for="question-'.$data['id'].'-rep-C">'.$data['reponse_neutre'].'</div>';
        // Affecter dans la variable nombre2 un chiffre compris en 1 et 2 pour déterminer la fin de l'affichage des réponses
        $nombre2 = random_int(1, 2);
        // Si la variable nombre2 est égal à 1 alors la réponse développement s'affiche suivi de la réponse communication
        // Sinon la réponse communication s'affiche suivie de la réponse développement
        if($nombre2 == 1) {
            echo '<div><input type="radio" name="question-'.$data['id'].'-rep" id="question-'.$data['id'].'-rep-A" value="A" /><label for="question-'.$data['id'].'-rep-A">'.$data['reponse_dev'].'</div>';
            echo '<div><input type="radio" name="question-'.$data['id'].'-rep" id="question-'.$data['id'].'-rep-B" value="B" /><label for="question-'.$data['id'].'-rep-B">'.$data['reponse_com'].'</div>';
        } else {
            echo '<div><input type="radio" name="question-'.$data['id'].'-rep" id="question-'.$data['id'].'-rep-B" value="B" /><label for="question-'.$data['id'].'-rep-B">'.$data['reponse_com'].'</div>';
            echo '<div><input type="radio" name="question-'.$data['id'].'-rep" id="question-'.$data['id'].'-rep-A" value="A" /><label for="question-'.$data['id'].'-rep-A">'.$data['reponse_dev'].'</div>';
        }
    }
    // Fin du groupement de la question
    echo '</section>';
}
// Fin de la connexion avec la base de données
$req = null;

// Bouton envoie + fin du formulaire
echo '<section><input type="submit" class="envoyer" value="Résultats"/></section></form>';

?>
</body>
</html>