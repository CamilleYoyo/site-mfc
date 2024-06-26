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
    <title>Organisme de formation professionnelle</title>




    <style>
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


    <!-- ************************************************************header********************************************** -->

    <div class="block">

        <div class="container">
            <div class="tile is-ancestor">
                <div class="tile is-vertical is-12">
                    <div class="tile">
                        <div class="tile is-parent is-vertical">
                            <article class="tile is-child notification is-primary">
                                <p class="title">Formation management des SI</p>
                                <p class="subtitle">Directeur informatique, managez les système d'informations<br>Cycle:Système d'information et Management</p>
                                <p class="title">Formation Système réseau et sécurité</p>
                                <p class="subtitle">Cursus certifiant Windows et Linux<br>Cursus certifiant Cisco<br>Cursus résponsable sécurité SI<br>Les réseaux<br>La téléphonie et voix sur IP<br>Support technique</p>
                                <p class="title">Formation Application</p>
                                <p class="subtitle">Cursus certifiant Messagerie et Base de données<br>Cursus virtualisation<br>Cursus développeur d'apllications et site Web</p>
                            </article>
                            <article class="tile is-child notification is-warning">
                                <p class="title">Cycle Gestion de Projet</p>
                                <p class="subtitle">Chef de projet Web<br>Chef de projet informatique: un métier, une expertise.<br> Conduire un projet informatique<br>Tests et recette des des applications informatique<br>Bénéficie des methodes agiles pour la gestion de projet
                                </p>
                            </article>
                        </div>
                        <div class="tile is-parent">
                            <article class="tile is-child notification is-info">
                                <p class="title">UNE ÉQUIPE DE 80 FORMATEURS ET CONSULTANTS A VOTRE SERVICE, 15000 PERSONNES FORMÉES PAR AN</p>
                                <br>
                                <p class="subtitle">Ce sont des experts des domaines sur lesquels ils interviennent en conseil et en formation, les consultants-formateurs ont tous excercé des résponsabilités de premer plan en entreprise. Ils publient régulièrement des ouvrages de références.</p>
                                <br>
                                <p class="subtitle">Ce sont des hommes et femmes de convictions qui partagent nos valeurs; ils ont la même de l'autre et le désir de le faire progresser. Experts en pédagogie, ils maîtrisent parfaitement tous les mécanismes d'appropriation, d'apprentissage et de conduite du changement.</p>
                            </article>
                        </div>
                    </div>
                    <div class="tile is-parent">
                        <article class="tile is-child notification is-danger">
                            <p class="title">Formation bureautique</p>
                            <p class="subtitle">Office<br>Travail collaboratif<br>Les outils bureautiquepour les cadres</p>
                            <div class="content">
                                <!-- Content -->
                            </div>
                        </article>
                    </div>
                </div>

            </div>
        </div>
    </div>
    </div>
    <!--MFC-->



    <!--css-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="src/js/main.js"></script>



    <!--css-->


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