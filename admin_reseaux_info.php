<!DOCTYPE html>
<html lang="fr">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600;700;800&family=Roboto:wght@500;700&display=swap"
        rel="stylesheet"> 
   <link rel="shortcut icon" href="favicon/favicon.ico" type="image/x-icon">
   <link rel="icon" href="favicon/favicon.png" type="image/png">
   <link rel="icon" sizes="32x32" href="favicon/favicon-32.png" type="image/png">
   <link rel="icon" sizes="64x64" href="favicon/favicon-64.png" type="image/png">
   <link rel="icon" sizes="96x96" href="favicon/favicon-96.png" type="image/png"> 

<?php 
    // Connexion à la base de données
    include("connexion.php");

    // On dit ce que l'on veut récupérer dans la BDD = dans la table fiche_metier je veux tout (* signifie tout) récupérer
    $sql = "SELECT * FROM fiche_metier WHERE id = '8'";
    // On prépare la requête avant l'envoi
    $req = $link -> prepare($sql);
    // On exécute la requête
    $req -> execute();

    while ($data = $req -> fetch()) {
        //Je viens chercher dans la base de donnée le nom du métier qui correspond à la fiche 12 pour l'afficher sur l'onglet 
        echo("<title>".$data['nom_metier']." - MMIWork</title>");
    //Si la colonne spécialité dans la BDD correspond à Informatique alors on execute le code suivant
    if($data['specialite'] == 'Informatique'){
        //Je vais chercher la fiche de style qui correspond aux métiers informatiques
        echo '<link href="style_fiche_info.css" rel="stylesheet" type="text/css"> </head>';
        //J'inclue le fichier des icônes informatique
        include("icone_metier_info.php");
    //Si la spécialité n'est pas égal à informatique (donc communication) alors on execute le code suivant
    } else {
        //Je vais chercher la fiche de style qui correspond aux métiers de la communication
        echo '<link href="style_fiche_com.css" rel="stylesheet" type="text/css"> </head>';
        //J'inclue le fichier des icônes communication
        include("icone_metier_com.php");
}
//Je met un echo pour écrire en html et que le navigateur l'intègre
echo"
<div class=fiche>
<header>
    <!--Je vais chercher dans la base de données le nom du métier qui correspond à l'id numéro 8-->
    <h1>".$data['nom_metier']."</h1>

    <!--Je vais chercher dans la base de données la description du métier qui correspond à l'id numéro 8-->
    <p>
    ".$data['description']."                               
    </p>
</header>

<main>
<!--Ici je sépare mon main en deux colonnes, je travaille d'abord sur la colonne 1 puis viendra la 2-->
    <section class='colonne1'>

    <h2 class='diplome_formations'>Diplôme et formations</h2>

    <!--Je vais chercher dans la base de données les études du métier qui correspond à l'id numéro 8-->
    <p>
    ".$data['etudes']."                              
    </p>

    <!--Voici mon premier bloc de la 1ère citation avec son contenu et ses deux apostrophes-->
    <div class='bloc_citation'>
        <img src='img/apostrophe_fiche-06.png' class='apo_citation1_info'>

        <!--Ici je reviens en php pour sélectionner le passage qui correspond à la 1ère citation dans la donnée témoignage grâce à la fonction substr-->
                <p class='citation1'>
                ";
                $temoignage = $data['temoignage'];
                echo substr($temoignage, 568, 875); 
                echo"                                             
                </p>
                <img src='img/apostrophe_fiche-08.png' class='apo_citation1_all'>
            </div>

            <h2 class='evolution'>Perspective d'évolution</h2>
            <!--Je vais chercher dans la base de données les évolutions du métier qui correspond à l'id numéro 8-->
            <p>
            ".$data['evolution']."                             
            </p>

            </section>

            <section class='colonne2'>

            <div class='presentation'>
            <h2 class='itw'>L'interview</h2>

            <!--Ici je reviens en php pour sélectionner le passage qui correspond aux prénoms et postes des personnes qui font le témoignage grâce à la fonction substr-->

            <h3 class='prenom'>";
            $temoignage = $data['temoignage'];
            echo substr($temoignage, 0, 7); 
            echo"</h3>
            <h4 class='poste'>";
            $temoignage = $data['temoignage'];
            echo substr($temoignage, 13, 40); 
            echo"</h4>
            <img src='img/avatar_fiche-florian.png' class='personnage'>
            </div>

            <div class='bloc_citation'>
                <img src='img/apostrophe_fiche-05.png' class='apo_citation2_info'>

                <!--Ici je reviens en php pour sélectionner le passage qui correspond à la 2ème citation dans la donnée témoignage grâce à la fonction substr-->

                <p class='citation2'>
                ";
                $temoignage = $data['temoignage'];
                echo substr($temoignage, 53, 515); 
                echo"                
                </p>
                <img src='img/apostrophe_fiche-08.png' class='apo_citation2_all'>
            </div>

            <!--Nous voici arrivés dans le bloc compétence de la page, elle contient le dragramme et les compétences qui y correspondent-->

            <div class='bloc_competences'>
                <h2 class='competences'>Compétences</h2>
                <img src='img/diagramme-administrateur_reseau.png' class='diagramme'>
                <div class='rectangles'>
                    <div class='rectangle_un'></div>
                    <div class='rectangle_deux'></div>
                    <div class='rectangle_trois'></div>                 
                </div>

                <!--Je vais chercher dans la base de données les compétences de ce métier qui correspond à l'id numéro 8-->

                <p class='capacite'>
                ".$data['competence_1']." 
                </p>
                <p class='maitrise'>
                    ".$data['competence_2']." 
                </p>
                <p class='personnalite'>
                ".$data['competence_3']." 
                </p>                
            </div>

            <!--Ici je reviens en php pour sélectionner le passage qui correspond à la 3ème citation dans la donnée témoignage grâce à la fonction substr-->
            
            <div class='bloc_citation'>
                <img src='img/apostrophe_fiche-07.png' class='apo_citation3_info'>
                <p class='citation3'>
                ";
                $temoignage = $data['temoignage'];
                echo substr($temoignage, 1443, 566); 
                echo"             
                </p>
                <img src='img/apostrophe_fiche-08.png' class='apo_citation3_all'>
            </div>

            <h2 class='salaire'>Salaire</h2>

            <!--Je vais chercher dans la base de données le salaire du métier qui correspond à l'id numéro 8-->

            <p>
            ".$data['salaire']." 
            </p>
            </section>
        </main>

        <!--Nous voici arrivés dans la section plus d'infos où l'on peut retrouver des liens qui pourraient interesser les visiteurs du site pour un complément d'informations-->

        <adress class='plus_infos'>
            <h2>Plus d'infos ?</h2>

            <a href='http://www.onisep.fr/Ressources/Univers-Metier/Metiers/administrateur-administratrice-reseaux'>
                http://www.onisep.fr/Ressources/Univers-Metier/Metiers/administrateur-administratrice-reseaux
            </a></br>

            <a href='http://etudiant.aujourdhui.fr/etudiant/metiers/fiche-metier/administrateur-reseaux.html'>
                http://etudiant.aujourdhui.fr/etudiant/metiers/fiche-metier/administrateur-reseaux.html
            </a></br>

            <a href='https://www.fichemetier.fr/metiers/administrateur-reseau'>
                https://www.fichemetier.fr/metiers/administrateur-reseau
            </a>

        </adress>
    
        <!--Voici le footer qui va permettre de naviguer entre les métiers ou même de changer de spécialiter et ainsi d'aller aux métiers de la commmunication-->

        <footer>

            <a href='dev_web_info.php' class='metier_precedent'>
                <img src='img/fleche_gauche.png' class='fleche_metier_precedent'>
                Métier précedent
            </a>

            <a href='inte_web_info.php' class='metier_suivant'>
                Métier suivant
                <img src='img/fleche_droite.png' class='fleche_metier_suivant'>
            </a>

            <a href='metiers_com.php' class='prefere_com'>
                Je préfère la communication
                <img src='img/fleche_bas.png' class='fleche_prefere_com'>
            </a>
       
        </footer>

    </div>

</div>
</body>

";}
?>
</html>