<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600;700;800&family=Roboto:wght@500;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style_quiz-rep.css"/>
    <link rel="shortcut icon" href="favicon/favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon/favicon.png" type="image/png">
    <link rel="icon" sizes="32x32" href="favicon/favicon-32.png" type="image/png">
    <link rel="icon" sizes="64x64" href="favicon/favicon-64.png" type="image/png">
    <link rel="icon" sizes="96x96" href="favicon/favicon-96.png" type="image/png"> 
    <title>Resultats Quiz - MMIWork</title>
</head>

<body>
<!--Entête en html de la page qui contient le menu, le titre et le sous-titre-->
    <header>
        <nav>
            <a href="index.html"><img src="img/logo.png" alt="MMIWork"></a>
            <a href="page_a-propos.html">à propos</a>
            <a href="page_contact.html">contact</a>
        </nav>
        <img src="img/voyante-quiz-rep.png">
        <h1>Je vois, je vois ...</h1>
        <h2>un brillant avenir dans </h2>
    </header>
    <main>

<?php
// Si les réponses sont sélectionnées, le code rentre dans la boucle if
if(isset($_POST['question-1-rep'], $_POST['question-2-rep'], $_POST['question-3-rep'], $_POST['question-4-rep'], $_POST['question-5-rep'], $_POST['question-6-rep'], $_POST['question-7-rep'], $_POST['question-8-rep'])){

        // Affectation des questions à des variables (on aurait pu passer par la base de données avec les ID)
        $reponse1 = $_POST['question-1-rep'];
        $reponse2 = $_POST['question-2-rep'];
        $reponse3 = $_POST['question-3-rep'];
        $reponse4 = $_POST['question-4-rep'];
        $reponse5 = $_POST['question-5-rep'];
        $reponse6 = $_POST['question-6-rep'];
        $reponse7 = $_POST['question-7-rep'];
        $reponse8 = $_POST['question-8-rep'];
        
        // Mise à zéro des compteurs de points
        $totalDEV = 0;
        $totalCOM = 0;
        $totalNEU = 0;

        // Affectation des points par rapport au réponse (A=Dev / B=Com / C=Neutre)
            if ($reponse1 == "A") { $totalDEV++; }
            if ($reponse1 == "B") { $totalCOM++; }
            if ($reponse1 == "C") { $totalNEU++; }

            if ($reponse2 == "A") { $totalDEV++; }
            if ($reponse2 == "B") { $totalCOM++; }
            if ($reponse2 == "C") { $totalNEU++; }
            
            if ($reponse3 == "A") { $totalDEV++; }
            if ($reponse3 == "B") { $totalCOM++; }
            if ($reponse3 == "C") { $totalNEU++; }

            if ($reponse4 == "A") { $totalDEV++; }
            if ($reponse4 == "B") { $totalCOM++; }
            if ($reponse4 == "C") { $totalNEU++; }

            if ($reponse5 == "A") { $totalDEV++; }
            if ($reponse5 == "B") { $totalCOM++; }
            if ($reponse5 == "C") { $totalNEU++; }

            if ($reponse6 == "A") { $totalDEV++; }
            if ($reponse6 == "B") { $totalCOM++; }
            if ($reponse6 == "C") { $totalNEU++; }

            if ($reponse7 == "A") { $totalDEV++; }
            if ($reponse7 == "B") { $totalCOM++; }
            if ($reponse7 == "C") { $totalNEU++; }

            if ($reponse8 == "A") { $totalDEV++; }
            if ($reponse8 == "B") { $totalCOM++; }
            if ($reponse8 == "C") { $totalNEU++; }

    // Formules de calcul, pour calculer le parcours que l'on affiche
    if($totalDEV + $totalNEU > $totalCOM + $totalNEU){
        //On affiche le parcours en H1 et un lien pour aller vers le menu du parcours
        echo ("<h1>L'informatique</h1>");
        echo '<a href="metiers_info.php">Je veux en savoir plus<img src="img/fleche_droite.png" alt=""></a>';
    } if($totalDEV + $totalNEU < $totalCOM + $totalNEU){
        //On affiche le parcours en H1 et un lien pour aller vers le menu du parcourss
        echo ("<h1>La communication</h1>");
        echo '<a href="metiers_com.php">Je veux en savoir plus<img src="img/fleche_droite.png" alt=""></a>';
    } if($totalDEV + $totalNEU == $totalCOM + $totalNEU){
        //On affiche les 2 parcours en H1 et un lien pour aller vers l'accueil car le choix du parcours est indécis
        echo("<h1>Les 2 parcours</h1>");
        echo '<a href="index.html">Je veux en savoir plus<img src="img/fleche_droite.png" alt=""></a>';
    }

// Si les réponses ne sont sélectionnées ou le quiz pas rempli, la boucle affiche un message, rend les autres messages illisibles et affiche un lien retour
} else {
    echo("<h1>Il manque une partie du travail !</h1><style>header h1{opacity: 0;}header h2{opacity: 0;}main h1{font-size: 4.5rem;width: 850px;}</style>");
    echo '<a href="page_quiz.php">Retour<img src="img/fleche_droite.png" alt=""></a>';
}
?>
</main>
</body>

</html>