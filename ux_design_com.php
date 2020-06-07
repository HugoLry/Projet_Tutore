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
    $sql = "SELECT * FROM fiche_metier WHERE id = '4'";
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
        <!--Je vais chercher dans la base de données le nom du métier qui correspond à l'id numéro 4-->
            <h1>".$data['nom_metier']."</h1>
            <!--Je vais chercher dans la base de données la description du métier qui correspond à l'id numéro 4-->
            <p>
            ".$data['description']."                               
            </p>
        </header>

        <main>
        <!--Ici je sépare mon main en deux colonnes, je travaille d'abord sur la colonne 1 puis viendra la 2-->
            <section class='colonne1'>

            <h2 class='diplome_formations'>Diplôme et formations</h2>
            <!--Je vais chercher dans la base de données les études du métier qui correspond à l'id numéro 4-->
            <p>
            ".$data['etudes']."                              
            </p>
            <!--Voici mon premier bloc de la 1ère citation avec son contenu et ses deux apostrophes-->
            <div class='bloc_citation'>
                <img src='img/apostrophe_fiche-03.png' class='apo_citation1_info'>

                <!--Ici je reviens en php pour sélectionner le passage qui correspond à la 1ère citation dans la donnée témoignage grâce à la fonction substr-->

                <p class='citation1'>";
                $temoignage = $data['temoignage'];
                echo substr($temoignage, 591, 569); 
                echo"                                          
                </p>
                <img src='img/apostrophe_fiche-08.png' class='apo_citation1_all'>
            </div>

            <h2 class='evolution'>Perspective d'évolution</h2>

            <p>
            ".$data['evolution']."                             
            </p>

            </section>

            <section class='colonne2'>

            <div class='presentation'>
            <h2 class='itw'>L'interview</h2>
            <h3 class='prenom'>";
            $temoignage = $data['temoignage'];
            echo substr($temoignage, 0, 12); 
            echo"</h3>
            <h4 class='poste'>";
            $temoignage = $data['temoignage'];
            echo substr($temoignage, 11, 76); 
            echo"</h4>
            <img src='img/avatar_fiche-chloe.png' class='personnage'>
            </div>

            <div class='bloc_citation'>
                <img src='img/apostrophe_fiche-04.png' class='apo_citation2_info'>
                <p class='citation2'>
                ";
                $temoignage = $data['temoignage'];
                echo substr($temoignage, 91, 500); 
                echo"                  
                </p>
                <img src='img/apostrophe_fiche-08.png' class='apo_citation2_all'>
            </div>

            <!--Nous voici arrivés dans le bloc compétence de la page, elle contient le dragramme et les compétences qui y correspondent-->

            <div class='bloc_competences'>
                <h2 class='competences'>Compétences</h2>
                <img src='img/diagramme-ux.png' class='diagramme'>
                <div class='rectangles'>
                    <div class='rectangle_un'></div>
                    <div class='rectangle_deux'></div>
                    <div class='rectangle_trois'></div>                 
                </div>

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

            <div class='bloc_citation'>
                <img src='img/apostrophe_fiche-01.png' class='apo_citation3_info'>
                <p class='citation3'>
                ";
                $temoignage = $data['temoignage'];
                echo substr($temoignage, 1160, 511); 
                echo"                                  
                </p>
                <img src='img/apostrophe_fiche-08.png' class='apo_citation3_all'>
            </div>

            <h2 class='salaire'>Salaire</h2>

            <p>
            ".$data['salaire']." 
            </p>
            </section>
        </main>

        <!--Nous voici arrivés dans la section plus d'infos où l'on peut retrouver des liens qui pourraient interesser les visiteurs du site pour un complément d'informations-->

        <adress class='plus_infos'>
            <h2>Plus d'infos ?</h2>

            <a href='https://www.orientation.com/metiers/ux-designer.html'>
                https://www.orientation.com/metiers/ux-designer.html
            </a></br>
            
            <a href='http://etudiant.aujourdhui.fr/etudiant/metiers/fiche-metier/ux-designer.html'>
                http://etudiant.aujourdhui.fr/etudiant/metiers/fiche-metier/ux-designer.html
            </a></br>

            <a href='http://www.e-works.fr/blog/fiche-metier-ux-designer/'>
                http://www.e-works.fr/blog/fiche-metier-ux-designer/
            </a>

        </adress>

        <!--Voici le footer qui va permettre de naviguer entre les métiers ou même de changer de spécialiter et ainsi d'aller aux métiers de la commmunication-->
        
        <footer>

            <a href='charge_com_com.php' class='metier_precedent'>
            <img src='img/fleche_gauche.png' class='fleche_metier_precedent'>
            Métier précedent
            </a>

            <a href='chef_projet_com.php' class='metier_suivant'>
            Métier suivant
            <img src='img/fleche_droite.png' class='fleche_metier_suivant'>
            </a>       

            <a href='metiers_info.php' class='prefere_info'>
            Je préfère l'informatique
            <img src='img/fleche_bas.png' class='fleche_prefere_info'>
            </a>
        
        </footer>
    </div>

    </div>
</body>

";}
?>
</html>