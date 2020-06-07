<?php
//Ici je dis que si l'id dans la BDD correspond à 1-2-3-4-5 ou 6, alors le style css des icones aura les aspects suivant, on peut remarquer l'utilisation des médias queries pour permettre la flexibilité des éléments quand la dimension de la page change
if($data['id'] == '1'){
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
            .icone_parent a .icone_community_manager{
                width: 310px;
                height: 310px;
            }
            .icone_parent a :not(.icone_community_manager){
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
                .icone_parent a .icone_community_manager{
                    width: 248px;
                    height: 248px;
                }
                .icone_parent a :not(.icone_community_manager){
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
                .icone_parent a .icone_community_manager{
                    width: 206px;
                    height: 206px;
                }
                .icone_parent a :not(.icone_community_manager){
                    width: 86px;
                    height: 86px;
                }
            }
        </style>";
    }
    if($data['id'] == '2'){
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
            .icone_parent a .icone_real_multimedia{
                width: 310px;
                height: 310px;
            }
            .icone_parent a :not(.icone_real_multimedia){
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
                .icone_parent a .icone_real_multimedia{
                    width: 248px;
                    height: 248px;
                }
                .icone_parent a :not(.icone_real_multimedia){
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
                .icone_parent a .icone_real_multimedia{
                    width: 206px;
                    height: 206px;
                }
                .icone_parent a :not(.icone_real_multimedia){
                    width: 86px;
                    height: 86px;
                }
        </style>";
    }
    if($data['id'] == '3'){
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
            .icone_parent a .icone_charge_com{
                width: 310px;
                height: 310px;
            }
            .icone_parent a :not(.icone_charge_com){
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
                .icone_parent a .icone_charge_com{
                    width: 248px;
                    height: 248px;
                }
                .icone_parent a :not(.icone_charge_com){
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
                .icone_parent a .icone_charge_com{
                    width: 206px;
                    height: 206px;
                }
                .icone_parent a :not(.icone_charge_com){
                    width: 86px;
                    height: 86px;
                }
        </style>"; 
    }
    if($data['id'] == '4'){
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
            .icone_parent a .icone_ux_design{
                width: 310px;
                height: 310px;
            }
            
            .icone_parent a :not(.icone_ux_design){
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
                .icone_parent a .icone_ux_design{
                    width: 248px;
                    height: 248px;
                }
                .icone_parent a :not(.icone_ux_design){
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
                .icone_parent a .icone_ux_design{
                    width: 206px;
                    height: 206px;
                }
                .icone_parent a :not(.icone_ux_design){
                    width: 86px;
                    height: 86px;
                }
        </style>";
    }
    if($data['id'] == '5'){
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
            .icone_parent a .icone_chef_projet{
                width: 310px;
                height: 310px;
            }
            .icone_parent a :not(.icone_chef_projet){
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
                .icone_parent a .icone_chef_projet{
                    width: 248px;
                    height: 248px;
                }
                .icone_parent a :not(.icone_chef_projet){
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
                .icone_parent a .icone_chef_projet{
                    width: 206px;
                    height: 206px;
                }
                .icone_parent a :not(.icone_chef_projet){
                    width: 86px;
                    height: 86px;
                }
        </style>";
    }
    if($data['id'] == '6'){
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
            .icone_parent a .icone_graphiste{
                width: 310px;
                height: 310px;
            }
            .icone_parent a :not(.icone_graphiste){
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
                .icone_parent a .icone_graphiste{
                    width: 248px;
                    height: 248px;
                }
                .icone_parent a :not(.icone_graphiste){
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
                .icone_parent a .icone_graphiste{
                    width: 206px;
                    height: 206px;
                }
                .icone_parent a :not(.icone_graphiste){
                    width: 86px;
                    height: 86px;
                }
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

    <h2 class='titre'>La communication</h2>
    <div class='degrade'>
    <img src='img/voyante-communication.png' class='dessin_com'>

    <div class='icone_parent'>

        <a href='community_manager_com.php'>
            <img src='img/icone_metiers-1.png' class='icone_community_manager'>
        </a>

        <a href='real_multimedia_com.php'>
            <img src='img/icone_metiers-2.png' class='icone_real_multimedia'>
        </a>
        
        <a href='charge_com_com.php'>
            <img src='img/icone_metiers-3.png' class='icone_charge_com'>
        </a>

        <a href='ux_design_com.php'>
            <img src='img/icone_metiers-4.png' class='icone_ux_design'>
        </a>
    
        <a href='chef_projet_com.php'>
            <img src='img/icone_metiers-5.png' class='icone_chef_projet'>
        </a>

        <a href='graphiste_com.php'>
            <img src='img/icone_metiers-6.png' class='icone_graphiste'>
        </a>

    </div>
";
?>