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
    <title>Bureautique</title>


    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f8f8;
            color: #333;


            background: rgb(98, 0, 59);
            background: linear-gradient(0deg, rgba(98, 0, 59, 1) 26%, rgba(205, 0, 75, 1) 100%, rgba(207, 0, 75, 1) 100%);
        }

        .headers {
            background-color: #2c3e50;
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

        section {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 8px;
            background-color: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #2c3e50;
            font-size: 1.5em;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        li {
            margin-bottom: 8px;
        }

        .button {
            display: inline-block;
            padding: 12px 24px;
            background-color: #3498db;
            color: white;
            text-decoration: none;
            border-radius: 4px;
            font-size: 1.2em;
            transition: background-color 0.3s ease;
        }

        .button:hover {
            background-color: #2980b9;
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

             /*Bouton s'incrire*/
             .sincrire {
            color: white;
            font-size: 16px;
            padding: 15px 20px;
            border: 1px solid;
            border-radius: 30px;
            background: #cf004b;
        }

        a.sincrire:hover {

            color: #363636;
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

    <section class="presentation">
        <h2>Notre Formation</h2>
        <p>Bienvenue sur notre site de formation professionnelle. Nous proposons des formations de haute qualité pour vous aider à développer vos compétences professionnelles et à atteindre vos objectifs de carrière.</p>
    </section>

    <section class="cours">
    <h2><strong>Formation en Bureautique</strong></h2>
    
    <h3><strong>Date :</strong></h3>
    <ol>
        <li>Prochaine Session : Du 22 au 25 avril 2024</li>
        <li>Les dates des sessions suivantes seront annoncées prochainement.</li>
    </ol><br>
   
    <h3><strong>Coût :</strong></h3>
    <ol>
        <li>Tarif : 800€ par participant</li>
        <li>Ce prix inclut le matériel pédagogique.</li>
    </ol><br>
    
    <h3><strong>Description de la Formation :</strong></h3>
    <ol>
        <li>Utilisation avancée de Microsoft Office (Word, Excel, PowerPoint)</li>
        <li>Gestion de documents et de fichiers</li>
        <li>Création de présentations professionnelles</li>
        <li>Automatisation des tâches avec les macros et les formules avancées</li>
        <li>Optimisation de la productivité en milieu professionnel</li>
    </ol><br>
    
    <h3><strong>Objectifs :</strong><h3>
    <ol>
        <li>Maîtriser les fonctionnalités avancées des logiciels de la suite Microsoft Office.</li>
        <li>Organiser et gérer efficacement des documents et des fichiers.</li>
        <li>Créer des présentations percutantes pour des audiences professionnelles.</li>
        <li>Automatiser les tâches répétitives et complexes avec les macros et les formules avancées.</li>
        <li>Améliorer la productivité et l'efficacité dans le milieu professionnel.</li>
    </ol><br><br>
    
    <p><strong>Public Cible :</strong> Cette formation s'adresse à toute personne souhaitant améliorer ses compétences en bureautique, que ce soit dans un contexte professionnel ou personnel.</p>
    
    <p><strong>Modalités d'Inscription :</strong> Pour vous inscrire à cette formation ou pour obtenir plus d'informations, veuillez nous contacter via le formulaire de contact.</p>
</section>


</section>
    <section class="inscription">
        <h2>Comment S'Inscrire</h2>
        <p>Rejoignez-nous dès aujourd'hui pour commencer votre parcours de formation. Remplissez le formulaire d'inscription en ligne et choisissez les cours qui correspondent à vos besoins.</p><br><br>
        <a href="Formulaireinscri.php" class="sincrire">Je m'inscris</a>
    </section>



    <!--****************************FOOTER**************************************************************-->

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
                                <li><a href="contacteznous.php">Nous contactez</a></li>
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
                        <li><a href="index.php"><img src="src/img/logomfc.png" alt="logo" class="imglogofooter"></a></li>
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