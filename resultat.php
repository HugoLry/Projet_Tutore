<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<h1>Il semblerait ...</h1>
<h2>Que tu sois fait pour</h2>

<?php
if(isset($_POST['question-1-rep'], $_POST['question-2-rep'], $_POST['question-3-rep'], $_POST['question-4-rep'], $_POST['question-5-rep'], $_POST['question-6-rep'], $_POST['question-7-rep'], $_POST['question-8-rep'])){

        $reponse1 = $_POST['question-1-rep'];
        $reponse2 = $_POST['question-2-rep'];
        $reponse3 = $_POST['question-3-rep'];
        $reponse4 = $_POST['question-4-rep'];
        $reponse5 = $_POST['question-5-rep'];
        $reponse6 = $_POST['question-6-rep'];
        $reponse7 = $_POST['question-7-rep'];
        $reponse8 = $_POST['question-8-rep'];
        
        $totalDEV = 0;
        $totalCOM = 0;
        $totalNEU = 0;

            if ($reponse1 == "A") { $totalDEV++; }
            if ($reponse1 == "B") { $totalCOM++; }
            if ($reponse1 == "C") { $totalNEU++; }

            if ($reponse2 == "A") { $totalDEV++; }
            if ($reponse2 == "B") { $totalNEU++; }
            if ($reponse2 == "C") { $totalCOM++; }

            if ($reponse3 == "A") { $totalCOM++; }
            if ($reponse3 == "B") { $totalDEV++; }
            if ($reponse3 == "C") { $totalNEU++; }

            if ($reponse4 == "A") { $totalDEV++; }
            if ($reponse4 == "B") { $totalNEU++; }
            if ($reponse4 == "C") { $totalCOM++; }

            if ($reponse5 == "A") { $totalNEU++; }
            if ($reponse5 == "B") { $totalCOM++; }
            if ($reponse5 == "C") { $totalDEV++; }

            if ($reponse6 == "A") { $totalNEU++; }
            if ($reponse6 == "B") { $totalCOM++; }
            if ($reponse6 == "C") { $totalDEV++; }

            if ($reponse7 == "A") { $totalCOM++; }
            if ($reponse7 == "B") { $totalNEU++; }
            if ($reponse7 == "C") { $totalDEV++; }

            if ($reponse8 == "A") { $totalDEV++; }
            if ($reponse8 == "B") { $totalCOM++; }
            if ($reponse8 == "C") { $totalNEU++; }

    if($totalDEV + $totalNEU > $totalCOM + $totalNEU){
        echo ("<h1>Dév</h1>");
    } if($totalDEV + $totalNEU < $totalCOM + $totalNEU){
        echo("<h1>Com</h1>");
    } if($totalDEV + $totalNEU == $totalCOM + $totalNEU){
        echo("<h1>Pour les 2 parcours</h1>");
    }
    
} else {
    echo("<h1>Tu as oublié une partie du travail !!</h1>");
}

?>
</body>

</html>