<?php
// Vérifiez si l'utilisateur est connecté
session_start();
if (!isset($_SESSION['email'])) {
    header("Location: Espaceclient.php"); // Redirigez vers la page de connexion si l'utilisateur n'est pas connecté
    exit();
}

// Récupérez l'e-mail de l'utilisateur depuis la session
$mail_user = $_SESSION['email'];
?>



<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>FNE</title>

        <style>
            body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

       

        .article {
            max-width: 100%;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .section {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
            
        }

        .section img {
            width: 40%; /* Ajustez la largeur de l'image selon vos besoins */
            border-radius: 8px;
        }

        .section p {
            width: 50%; /* Ajustez la largeur du paragraphe selon vos besoins */
        }

        .section a {
            text-decoration: none;
            color: #e6233a;
        }
        .section a:hover {
	        text-decoration: underline;
        }
        
       






            /*Banniere de presentation*/
            .headers {
                background-color: #62003b;
                color: white;
                text-align: center;
                padding: 20px;
            }
    
            .headers h1 {
                margin: 0;
                font-size: 2em;
            }
    
            .headers p {
                margin-top: 5px;
                font-size: 1.2em;
            }

            /*=============================================================Nouvelle entete==============================================*/

        /*Banniere de presentation*/
        .headers {
            background-color: #62003b;
            color: white;
            text-align: center;
            padding: 20px;
        }

        .headers h1 {
            margin: 0;
            font-size: 2em;
        }

        .headers p {
            margin-top: 5px;
            font-size: 1.2em;
        }




        /* Barre de nav*/
        .navigation {
            overflow: hidden;
            background-color: black;
            transition: max-height 0.3s;
            display: flex;
            justify-content: space-around;
            align-items: flex-start;
        }

        .navigation a {
            color: white;
            text-decoration: none;
            margin: 0 15px;
            font-weight: bold;
            display: block;
            text-align: center;
            padding: 10px 0;

        }

        /* Réduire la barre de navigation au défilement */
        body.scrolled header {
            background-color: #1f4662;
        }

        body.scrolled .navigation {
            max-height: 50px;
        }


        /****/
        header .fiches {
            display: flex;
            justify-content: space-around;
        }

        header .fiche {

            padding: 15px 20px;
            border: 1px solid;
            border-radius: 30px;
            background: #cf004b;


        }

        header .fiche:hover {
            background-color: #cf004b;
            background-color: #fff;
            border: 1px solid #cf004b;
            color: #cf004b !important;

        }


        /*css du bordur du bal qui defile*/
        .topnav a:hover {
            border-bottom: 3px solid #cf004b;
        }

        .topnav a.active {
            border-bottom: 3px solid #cf004b;
        }


        /*=============================================================Nouvelle entete==============================================*/

        /* css lorque l'utilisateur se connecte*/
        .user-info {
            display: flex;
            align-items: center;
            margin-bottom: 50px;


        }

        .user-info i {
            margin-right: 5px;

        }

        .user-info a {
            color: white;
            font-weight: bold;
        }

        .user-info button {
            padding: 8px 10px;
            margin-left: 15px;
            border: 1px solid;
            border-radius: 90px;
            background: #cf004b;
            ;
        }

        .user-info button:hover {
            background-color: #cf004b;
            background-color: #fff;
            border: 1px solid #cf004b;
            color: #cf004b !important;
        }
        </style>

        


        <!-- css -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
        <link rel="stylesheet" href="src/css/main.css">
        <!-- css -->

        <!-- font -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/iconify/3.1.1/iconify.min.js" integrity="sha512-oQ1yQwSEIc9CTcK7pffEyS8fxom2iUWQrALk3j3+wfdSDjQ77EZbzGMGe2ZYmfoC8M9vR47apbS1ZYbW05y/pg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->
        <!-- font -->
        


        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">


        <!--************************************************Lien de la feuille JAVASCRIPT**********************************************************************-->
        <script src="main.js"></script>
        <!--************************************************Lien de la feuille JAVASCRIPT**********************************************************************-->





    </head>


    <body>
        <!--==========================================================================Nouvelle entete======================================-->
    <div class="block">
        <!-- **************************header*************************** -->

        <header class="header">
            <div class="fiches">
                <a href="index.php" class="header-logo">
                    <img src="src/img/logomfc.png" alt="logo" class="logo"></a>
                <!--*************************************************Menu de navigation*************************-->
                <div><a href="Formulaireinscri.php" class="fiche" style="color:white ; font-size: 16px; ">Formulaire d'inscription</a></div>
                <div class="user-info">
                    <i class="fas fa-user"></i> <!-- Icône de contact (enveloppe) -->
                    <h1><strong><?php echo $mail_user; ?></strong></h1> <!-- Remplacez par le nom de l'utilisateur connecté -->
                    <button><a href="deconnexion.php">Se déconnecter</a></button>
                </div>
            </div>

        </header>
        <div class="navigation">
            <nav class="header-menu">
                <ul class="navalign">
                    <div class="topnav">
                        <li>
                            <a href="index.php">Accueil</a>
                        </li>
                        <li><a href="Espaceclient.php">Espace client</a></li>
                        <!--<li><a href="Formulaireinscri.html">Formulaire d'inscription</a></li>-->
                        <li><a href="contacteznous.php">Contactez-nous</a></li>
                    </div>
                </ul>

            </nav>
        </div>
        <div class="block headers">
            <h1>Formation Professionnelle</h1>
            <p>Acquérir de nouvelles compétences pour réussir dans votre carrière</p>
        </div>

    </div>

    <script>
        // Ajouter une classe lorsque la page est défilée
        window.onscroll = function() {
            if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
                document.body.classList.add("scrolled");
            } else {
                document.body.classList.remove("scrolled");
            }
        };
    </script>

    <!--==========================================================================Nouvelle entete======================================-->









        <div class="article">
            <div class="section">
                <img src="https://static3.cegos.fr/content/uploads/2023/06/21154234/GettyImages-626469366-1-1-1.jpg.webp" alt="Amiga">
                
                <p>
                    <strong>Besoin de plus de détails sur le FNE-Formation ?</strong><br>
                    Pour retrouver les détails sur les modalités du FNE-Formation 2023 (Nature des actions éligibles, montant de prises en charge, modalités, mode de calcul du plafond... ), <a href="https://cdn.centre-inffo.fr/content/uploads/2023/05/instruction-fne-2023-1.pdf">consultez l'Instruction de la DGEFP parue le 21 avril 2023.</a><br><br>
                    <strong>Contactez dés aujourd'hui votre OPCO, pour connaitre les détails de la procédure ainsi que les formations éligibles pour votre secteur d'activité :</strong><br><br>

                    <a href="https://www.afdas.com/entreprise/financer-vos-actions-de-formation/choisir-le-bon-financement/les-subventions-pour-elargir-vos-capacites-de-financement/transitions-grands-evenements-sportifs-formez-pour-cultiver-et-preserver-votre-capital-competences.html">AFDAS</a> - Informations actualisées<br>
                    <a href="https://www.akto.fr/tout-savoir-sur-le-fne-formation-2023-laide-financiere-pour-former-les-salaries-de-votre-entreprise/">AKTO</a> - Informations actualisées<br>
                    <a href="https://www.opco-atlas.fr/entreprise/beneficier-du-fne-formation.html">ATLAS</a> - Informations actualisées<br>
                    <a href="https://www.constructys.fr/fne-formation/">CONTRUCTYS</a> - Informations actualisées<br>
                    <a href="https://www.ocapiat.fr/fne-formation/">OCAPIAT</a> - Informations actualisées<br>
                    <a href="https://www.opcomobilites.fr/entreprise/beneficier-du-fne-formation">OPCO MOBILITES</a> - Informations actualisées<br>
                    <a href="https://www.lopcommerce.com/entreprise/former-mes-salaries/fne-formation/">OPCOMMERCE</a> - Informations actualisées<br>
                    <a href="https://www.opco2i.fr/nous-connaitre/les-actualites-et-evenements/ecologie-numerique-energie-faites-evoluer-les-competences-de-vos-salaries/">OPCO2I</a> - Informations actualisées<br>
                    <a href="https://www.opco-sante.fr/le-fne-formation-2023">OPCO SANTE</a> - Informations actualisées<br>
                    <a href="https://www.uniformation.fr/entreprise/financements/financements-exceptionnels">UNIFORMATION</a> - Informations actualisées<br>
                    <a href="https://www.opcoep.fr/entreprise/financer-mes-projets#Cofinancements-de-vos-projets-formation">OPCO EP</a> - Informations actualisées<br>

                </p>
            </div>
    
            <div class="section">
                <p>
                    Avec le FNE-Formation, l’État soutient financièrement les besoins immédiats des entreprises en matière de formation.<br>

Initialement destiné aux entreprises dont l’activité était impactée par le Covid-19, <strong>le FNE-Formation finance en 2023 la formation des salariés des entreprises touchées par les transitions actuelles</strong>.<br><br> 

La priorité est donnée à <strong>l’accompagnement des transitions écologiques, transitions alimentaires et agricoles et enfin transitions numériques</strong>. Le FNE-Formation soutiendra également la formation des salariés des <strong>grands événements sportifs à venir</strong> (Coupe du monde de rugby 2023 et Jeux Olympiques et Paralympiques 2024).
                </p>
                <img src="https://static3.cegos.fr/content/uploads/2023/06/13100059/Design-sans-titre-12-1024x576.png.webp" alt="Financement">
            </div>
        </div>

  <!--****************************Section essai-->
    
  <div class="footer-dark">
    <footer>
        <div class="container">
            <div class="row">
                <div class="first-col">
                    <div class="col-sm-6 col-md-3 item first-col-footer ">
                        <h3>Nos offres</h3>
                        <ul>
                            <li><a href="interentreprise.php">Interentrprise</a></li>
                            <li><a href="intraentreprise.php">Intra-entreprise</a></li>
                            <li><a href="aututorat.php">Sur-mésure</a></li>
                            <li><a href="diplomecertifiante.php">Diplômante et certifiante</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-md-3 item first-col-footer-2">
                        <h3>Trouver facilement</h3>
                        <ul>
                            <li><a href="#">Qui sommes-nous?</a></li>
                            <li><a href="#">Nous contactez</a></li>
                            <li><a href="#">Mentions légales</a></li>
                            <li><a href="#">Cookies</a></li>
                        </ul>
                    </div>
                </div>
            </div>
                <div class="col-md-6 item text">
                    
                    <p>Praesent sed lobortis mi. Suspendisse vel placerat ligula. Vivamus ac sem lacus. Ut vehicula rhoncus elementum. Etiam quis tristique lectus. Aliquam in arcu eget velit pulvinar dictum vel in justo.</p>
                </div>
                <!--***********************************image footer***********************************************-->
                <div class="contenair-img-footer">
                    <ul>
                        <li><a href="index.html"><img src="src/img/logomfc.png" alt="logo" class="imglogofooter"></a></li>
                        <li><img src="src/img/imgfooter1.jpg" alt="image dans le footer" class="imgfooters"></li>
                        <li><img src="src/img/logo NextGeneration EUfooter3.png" alt="image drapeau" class="EUfooter"></li>
                        <li><img src="src/img/logo-france-relancefooter2.png" alt="image drapeau" class="relancefooter"></li>
                    </ul>
                </div>




                <div class="col item social"><a href="https://www.facebook.com/"><i class="fab fa-facebook"></i></i></a><a href="#"><i class="fab fa-twitter"></i></a><a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a><a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a></div>
            </div>
            <p class="copyright">Copyright © 2024 Camille Yoyo - Tous droits réservés</p>
        </div>
    </footer>
</div>



  


    </body>
    
</html>
