<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600;700;800&family=Roboto:wght@500;700&display=swap" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="style_com.css">
    <title>Métiers de Communication - MMIWork</title>
</head>

<body>

<?php
// Connexion à la base de données
include("connexion.php");

// On dit ce que l'on veut récupérer dans la BDD = dans la table fiche_metier on veut récupérer les nom_metier qui contient "Communication" dans la colonnes specialite
$sql = "SELECT nom_metier FROM fiche_metier WHERE specialite='Communication' ";
// On prépare la requête avant l'envoi
$req = $link -> prepare($sql);
// On exécute la requête
$req -> execute();

// Entête en html de la page qui contient le menu, le titre et le sous-titre
echo'
    <header>
        <nav>
            <a href="index.html"><img src="img/logo.png" alt="MMIWork"></a>
            <a href="page_a-propos.html">à propos</a>
            <a href="page_contact.html">contact</a>
        </nav>
        <img src="img/voyante-communication.png">
        <h1>La communication</h1>
        <h2>Approche … Arrives-tu a entrevoir ton futur métier dans ma boule ?</h2>
    </header>';

// Affichage de chaque métier (6 métiers) issue de la base de données avec une image spéciale
    while ($data = $req -> fetch()){
    echo'<main>

        <a href="manager_com.html">
        <p>'.$data['nom_metier'].'</p></a>';

        $data = $req -> fetch();
        echo'<a href="real_com.html">
            <p>'.$data['nom_metier'].'</p></a>';

        $data = $req -> fetch();
        echo'<a href="charge_com.html">
            <p class="h">'.$data['nom_metier'].'</p></a>';
    
        $data = $req -> fetch();
        echo'<a href="designer_com.html">
            <p>'.$data['nom_metier'].'</p></a>';

        $data = $req -> fetch();
        echo'<a href="chefproj_com.html">
            <p>'.$data['nom_metier'].'</p></a>';

        $data = $req -> fetch();
        echo'<a href="graphiste_com.html">
            <p>'.$data['nom_metier'].'</p></a>
        
    </main>';

    //Fin de la boucle
    break;
    };
?>
<!--Lien vers les métiers de la page informatique-->
<a href="metiers_info.php" class="lien">Je préfère l'informatique<img src="img/fleche_bas.png" alt=""></a>

</body>

</html>