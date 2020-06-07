<?php
//Ici je dis que si l'id dans la BDD correspond à 7-8-9-10-11 ou 12, alors le style css des icones aura les aspects suivant, on peut remarquer l'utilisation des médias queries pour permettre la flexibilité des éléments quand la dimension de la page change
if($data['id'] == '7'){
echo"
    <style>
        .icone_parent{
            z-index: 20;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: relative;
            top: 450px;
            margin: 0 19.6% 0 11.56%;
            margin-bottom: -90px;
        }
        .icone_parent a .icone_dev_web{
            width: 310px;
            height: 310px;
        }
        .icone_parent a :not(.icone_dev_web){
            width: 130px;
            height: 130px;
        }

        @media screen and (max-width: 1515px){
            .icone_parent{
                z-index: 20;
                display: flex;
                justify-content: space-between;
                align-items: center;
                position: relative;
                top: 450px;
                margin: 0 19.6% 0 11.56%;
                margin-bottom: -90px;
            }
            .icone_parent a .icone_dev_web{
                width: 248px;
                height: 248px;
            }
            .icone_parent a :not(.icone_dev_web){
                width: 104px;
                height: 104px;
            }
        }

        @media screen and (max-width: 1200px){
            .icone_parent{
                z-index: 20;
                display: flex;
                justify-content: space-between;
                align-items: center;
                position: relative;
                top: 450px;
                margin: 0 19.6% 0 11.56%;
                margin-bottom: -90px;
            }
            .icone_parent a .icone_dev_web{
                width: 206px;
                height: 206px;
            }
            .icone_parent a :not(.icone_dev_web){
                width: 86px;
                height: 86px;
            }
        }
    </style>";
}
if($data['id'] == '8'){
echo"
    <style>
        .icone_parent{
            z-index: 20;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: relative;
            top: 450px;
            margin: 0 14.2% 0 14.2%;
            margin-bottom: -90px;
        }
        .icone_parent a .icone_admin_res{
            width: 310px;
            height: 310px;
        }
        .icone_parent a :not(.icone_admin_res){
            width: 130px;
            height: 130px;
        }

        @media screen and (max-width: 1515px){
            .icone_parent{
                z-index: 20;
                display: flex;
                justify-content: space-between;
                align-items: center;
                position: relative;
                top: 450px;
                margin: 0 14.2% 0 14.2%;
                margin-bottom: -90px;
            }
            .icone_parent a .icone_admin_res{
                width: 248px;
                height: 248px;
            }
            .icone_parent a :not(.icone_admin_res){
                width: 104px;
                height: 104px;
            }
        }

        @media screen and (max-width: 1200px){
            .icone_parent{
                z-index: 20;
                display: flex;
                justify-content: space-between;
                align-items: center;
                position: relative;
                top: 450px;
                margin: 0 14.2% 0 14.2%;
                margin-bottom: -90px;
            }
            .icone_parent a .icone_admin_res{
                width: 206px;
                height: 206px;
            }
            .icone_parent a :not(.icone_admin_res){
                width: 86px;
                height: 86px;
            }
    </style>";
}
if($data['id'] == '9'){
echo"
    <style>
        .icone_parent{
            z-index: 20;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: relative;
            top: 450px;
            margin: 0 14.2% 0 14.2%;
            margin-bottom: -90px;
        }
        .icone_parent a .icone_inte_web{
            width: 310px;
            height: 310px;
        }
        .icone_parent a :not(.icone_inte_web){
            width: 130px;
            height: 130px;
        }

        @media screen and (max-width: 1515px){
            .icone_parent{
                z-index: 20;
                display: flex;
                justify-content: space-between;
                align-items: center;
                position: relative;
                top: 450px;
                margin: 0 14.2% 0 14.2%;
                margin-bottom: -90px;
            }
            .icone_parent a .icone_inte_web{
                width: 248px;
                height: 248px;
            }
            .icone_parent a :not(.icone_inte_web){
                width: 104px;
                height: 104px;
            }
        }

        @media screen and (max-width: 1200px){
            .icone_parent{
                z-index: 20;
                display: flex;
                justify-content: space-between;
                align-items: center;
                position: relative;
                top: 450px;
                margin: 0 14.2% 0 14.2%;
                margin-bottom: -90px;
            }
            .icone_parent a .icone_inte_web{
                width: 206px;
                height: 206px;
            }
            .icone_parent a :not(.icone_inte_web){
                width: 86px;
                height: 86px;
            }
    </style>"; 
}
if($data['id'] == '10'){
echo"
    <style>
        .icone_parent{
            z-index: 20;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: relative;
            top: 450px;
            margin: 0 14.2% 0 14.2%;
            margin-bottom: -90px;
        }
        .icone_parent a .icone_anim2d3d{
            width: 310px;
            height: 310px;
        }
        
        .icone_parent a :not(.icone_anim2d3d){
            width: 130px;
            height: 130px;
        }

        @media screen and (max-width: 1515px){
            .icone_parent{
                z-index: 20;
                display: flex;
                justify-content: space-between;
                align-items: center;
                position: relative;
                top: 450px;
                margin: 0 14.2% 0 14.2%;
                margin-bottom: -90px;
            }
            .icone_parent a .icone_anim2d3d{
                width: 248px;
                height: 248px;
            }
            .icone_parent a :not(.icone_anim2d3d){
                width: 104px;
                height: 104px;
            }
        }

        @media screen and (max-width: 1200px){
            .icone_parent{
                z-index: 20;
                display: flex;
                justify-content: space-between;
                align-items: center;
                position: relative;
                top: 450px;
                margin: 0 14.2% 0 14.2%;
                margin-bottom: -90px;
            }
            .icone_parent a .icone_anim2d3d{
                width: 206px;
                height: 206px;
            }
            .icone_parent a :not(.icone_anim2d3d){
                width: 86px;
                height: 86px;
            }
    </style>";
}
if($data['id'] == '11'){
echo"
    <style>
        .icone_parent{
            z-index: 20;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: relative;
            top: 450px;
            margin: 0 14.2% 0 14.2%;
            margin-bottom: -90px;
        }
        .icone_parent a .icone_dev_mobile{
            width: 310px;
            height: 310px;
        }
        .icone_parent a :not(.icone_dev_mobile){
            width: 130px;
            height: 130px;
        }

        @media screen and (max-width: 1515px){
            .icone_parent{
                z-index: 20;
                display: flex;
                justify-content: space-between;
                align-items: center;
                position: relative;
                top: 450px;
                margin: 0 14.2% 0 14.2%;
                margin-bottom: -90px;
            }
            .icone_parent a .icone_dev_mobile{
                width: 248px;
                height: 248px;
            }
            .icone_parent a :not(.icone_dev_mobile){
                width: 104px;
                height: 104px;
            }
        }

        @media screen and (max-width: 1200px){
            .icone_parent{
                z-index: 20;
                display: flex;
                justify-content: space-between;
                align-items: center;
                position: relative;
                top: 450px;
                margin: 0 14.2% 0 14.2%;
                margin-bottom: -90px;
            }
            .icone_parent a .icone_dev_mobile{
                width: 206px;
                height: 206px;
            }
            .icone_parent a :not(.icone_dev_mobile){
                width: 86px;
                height: 86px;
            }
    </style>";
}
if($data['id'] == '12'){
echo"
    <style>
        .icone_parent{
            z-index: 20;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: relative;
            top: 450px;
            margin: 0 19.6% 0 11.56%;
            margin-bottom: -90px;
        }
        .icone_parent a .icone_admin_bdd{
            width: 310px;
            height: 310px;
        }
        .icone_parent a :not(.icone_admin_bdd){
            width: 130px;
            height: 130px;
        }

        @media screen and (max-width: 1515px){
            .icone_parent{
                z-index: 20;
                display: flex;
                justify-content: space-between;
                align-items: center;
                position: relative;
                top: 450px;
                margin: 0 19.6% 0 11.56%;
                margin-bottom: -90px;
            }
            .icone_parent a .icone_admin_bdd{
                width: 248px;
                height: 248px;
            }
            .icone_parent a :not(.icone_admin_bdd){
                width: 104px;
                height: 104px;
            }
        }

        @media screen and (max-width: 1200px){
            .icone_parent{
                z-index: 20;
                display: flex;
                justify-content: space-between;
                align-items: center;
                position: relative;
                top: 450px;
                margin: 0 19.6% 0 11.56%;
                margin-bottom: -90px;
            }
            .icone_parent a .icone_admin_bdd{
                width: 206px;
                height: 206px;
            }
            .icone_parent a :not(.icone_admin_bdd){
                width: 86px;
                height: 86px;
            }
    </style>"; 
}
echo"
<body>
        <nav>
            <a href='index.html'><img src='img/logo.png' alt='MMIWork'></a>
            <a href='page_a-propos.html'>à propos</a>
            <a href='page_contact.html'>contact</a>
        </nav>

    <h2 class='titre'>L'informatique</h2>
    <div class='degrade'>
    <img src='img/voyante-informatique.png' class='dessin_info'>

    <div class='icone_parent'>

        <a href='dev_web_info.php'>
            <img src='img/icone_metiers-7.png' class='icone_dev_web'>
        </a>

        <a href='admin_reseaux_info.php'>
            <img src='img/icone_metiers-9.png' class='icone_admin_res'>
        </a>

        <a href='inte_web_info.php'>
            <img src='img/icone_metiers-8.png' class='icone_inte_web'>
        </a>

        <a href='anim2D3D_info.php'>
            <img src='img/icone_metiers-10.png' class='icone_anim2d3d'>
        </a>
    
        <a href='dev_mobile_info.php'>
            <img src='img/icone_metiers-11.png' class='icone_dev_mobile'>
        </a>

        <a href='admin_BDD_info.php'>
            <img src='img/icone_metiers-12.png' class='icone_admin_bdd'>
        </a>

    </div>
";
?>