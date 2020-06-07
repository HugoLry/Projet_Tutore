<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600;700;800&family=Roboto:wght@500;700&display=swap"
        rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="style_info.css">
    <link rel="shortcut icon" href="favicon/favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon/favicon.png" type="image/png">
    <link rel="icon" sizes="32x32" href="favicon/favicon-32.png" type="image/png">
    <link rel="icon" sizes="64x64" href="favicon/favicon-64.png" type="image/png">
    <link rel="icon" sizes="96x96" href="favicon/favicon-96.png" type="image/png"> 
    <title>Métiers d'Informatique - MMIWork</title>
</head>

<body>

<?php
// Connexion à la base de données
include("connexion.php");

// On dit ce que l'on veut récupérer dans la BDD = dans la table fiche_metier on veut récupérer les nom_metier qui contient "Informatique" dans la colonnes specialite
$sql = "SELECT nom_metier FROM fiche_metier WHERE specialite='Informatique' ";
// On prépare la requête avant l'envoi
$req = $link -> prepare($sql);
// On exécute la requête
$req -> execute();

// Entête en html de la page qui contient le menu
echo'<header>
        <nav>
            <a href="index.html"><img src="img/logo.png" alt="MMIWork"></a>
            <a href="page_a-propos.html">à propos</a>
            <a href="page_contact.html">contact</a>
        </nav>
        <img src="img/voyante-informatique.png">';
// Un deuxième echo pour y retrouver le le titre et le sous-titre, différent car la simple quote dans le h1 annule le premier
echo  ("<h1>L'informatique</h1>
        <h2>Approche… Arrives-tu a entrevoir ton futur métier dans ma boule ?</h2>
    </header>");

// Affichage de chaque métier (6 métiers) issue de la base de données avec une image en background-image
    while ($data = $req -> fetch()){
// Pour chaque métier on rretrouveun lien (a) et un paragraphe (p) qui cite le nom du métier (['nom_métier']) lier à la base de données avec $data
    echo'<main>

        <a href="dev_web_info.php">
        <p>'.$data['nom_metier'].'</p></a>';

        $data = $req -> fetch();
        echo'<a href="admin_reseaux_info.php">
            <p>'.$data['nom_metier'].'</p></a>';

        $data = $req -> fetch();
        echo'<a href="inte_web_info.php">
            <p>'.$data['nom_metier'].'</p></a>';
    
        $data = $req -> fetch();
        echo'<a href="anim2D3D_info.php">
            <p>'.$data['nom_metier'].'</p></a>';

        $data = $req -> fetch();
        echo'<a href="dev_mobile_info.php">
            <p>'.$data['nom_metier'].'</p></a>';

        $data = $req -> fetch();
        echo'<a href="admin_BDD_info.php">
            <p>'.$data['nom_metier'].'</p></a>
        
    </main>';

    //Fin de la boucle
    break;
    };
?>
<!--Lien vers les métiers de la page communication-->
<a href="metiers_com.php" class="lien">Je préfère la communication<img src="img/fleche_bas.png" alt=""></a>

</body>

</html>