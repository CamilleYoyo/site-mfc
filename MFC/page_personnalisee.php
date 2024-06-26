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
    <title>Mon compte :Organisme de formation professionnelle</title>
    <link rel="icon" href="src/img/logomfcredi.png" type="image/x-icon">

    <style>
        /*Section de presentation*/
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
            width: 40%;
            /* Ajustez la largeur de l'image selon vos besoins */
            border-radius: 8px;
        }

        .section p {
            width: 50%;
            /* Ajustez la largeur du paragraphe selon vos besoins */
        }

        .section h1 {
            font-size: 1.5rem;
        }

        /*couleur pour les paragraphes des phrases de la section Nos Valeurs*/
        .section .yellow {
            color: orange;
        }



        /* bouton de retour vers le haut*/
        .scroll-to-top {
            display: none;
            position: fixed;
            bottom: 20px;
            right: 20px;
            background-color: rgb(84, 66, 66);
            color: #fff;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            padding: 10px 15px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .scroll-to-top:hover {
            background-color: #cf004b;
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
                    <img src="src/img/logomfc.png" alt="logo" class="logo">
                </a>
                <!--*************************************************Menu de navigation*************************-->
                <div>
                    <a href="Formulaireinscri.php" class="fiche" style="color:white ; font-size: 16px; ">Formulaire d'inscription</a>
                </div>
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







    <!--***************************************************** banner******************************************************-->
    <div class="block">

        <div class="banner">
            <!--**********************************Barre de recherche***************************************-->





            <!--<img src="src/img/bannerfirst0.jpg" alt="image apprentissage" class="banner-image">-->

            <div class="conteneur">
                <div class="orientation-title">
                    <h2 class="bold-title">Domaine de formation</h2>
                </div>


                <div class="bloc-cache">
                    <p class="maj">Apprendre, se former, réflechir à son projet pro, se reconvertir...</p>

                    <div class="lien-orientation">
                        <ul>
                            <li>
                                <a href="managementdessi.php">
                                    <i class="fas fa-arrow-right"></i>
                                    Formation Management des SI</a>
                            </li>
                            <li>
                                <a href="systemereseauetsecurite.php">
                                    <i class="fas fa-arrow-right"></i>
                                    Formation Système réseau et Sécurité</a>
                            </li>
                            <li>
                                <a href="application.php">
                                    <i class="fas fa-arrow-right"></i>
                                    Formation Application</a>
                            </li>
                            <li>
                                <a href="bureautique.php">
                                    <i class="fas fa-arrow-right"></i>
                                    Formation Bureautique
                                </a>
                            </li>
                        </ul>
                    </div>
                    <br>
                    <a href="nosformation.php" class="btn unibtn">
                        Découvrir plus...
                    </a>

                </div>
            </div>

            <!--******************************-->
            <div class="conteneur1">
                <div class="orientation-title1">
                    <h2 class="bold-title1">Solutions</h2>
                </div>


                <div class="bloc-cache1">
                    <p class="maj">Nous vous proposons des solutions et des dispositifs complets...</p>

                    <div class="lien-orientation1">
                        <ul>
                            <li>
                                <a href="interentreprise.php">
                                    <i class="fas fa-arrow-right"></i>
                                    Formation Inter entreprise</a>
                            </li>
                            <li>
                                <a href="intraentreprise.php">
                                    <i class="fas fa-arrow-right"></i>
                                    Formation Intra entreprise</a>
                            </li>
                            <li>
                                <a href="diplomecertifiante.php">
                                    <i class="fas fa-arrow-right"></i>
                                    Formation Diplômante et Certifiante</a>
                            </li>
                            <li>
                                <a href="aututorat.php">
                                    <i class="fas fa-arrow-right"></i>
                                    Formation au tutorat
                                </a>
                            </li>
                        </ul>
                    </div>
                    <br>
                    <a href="" class="btn1 unibtn">
                        Nos formations en alternacne
                    </a>

                </div>
            </div>

            <!--************************-->

            <div class="conteneur2">
                <div class="orientation-title2">
                    <h2 class="bold-title2">Financement</h2>
                </div>


                <div class="bloc-cache2">
                    <p class="maj2">Toutes, les solutions de financement, des formations...</p>

                    <div class="lien-orientation2">
                        <ul>
                            <li>
                                <a href="cpf.php">
                                    <i class="fas fa-arrow-right"></i>
                                    Le compte personnel de formation (CPF)</a>
                            </li>
                            <li>
                                <a href="financementoppco.php">
                                    <i class="fas fa-arrow-right"></i>
                                    Les financements OPCO</a>
                            </li>
                            <li>
                                <a href="transitioncollective.php">
                                    <i class="fas fa-arrow-right"></i>
                                    Les dispositifs transitions collectives</a>
                            </li>
                            <li>
                                <a href="fne.php">
                                    <i class="fas fa-arrow-right"></i>
                                    Le FNE
                                </a>
                            </li>
                        </ul>
                    </div>
                    <br>
                    <a href="" class="btn2 unibtn">
                        Nos formations en alternacne
                    </a>

                </div>
            </div>





            <!--<div class="banner-content">
                    <h1 class="title is-1">Maison de la formation continue</h1>
                    <h2 class="subtitle">Découvrez nos solutions</h2>
                    <button class="button is-link" >
                        <a href="nosformation.html">Allez-y</a>
                    </button>-->

        </div>
    </div>
    </div>

    <!-- banner-->


    <!-- Section : Accueil -->
    <div class="block">
        <div class="container about"></div>
        <div class="columns">
            <div class="column about-col">
                <i class="fas fa-home icon"></i>





                <p>Bienvenue sur <strong>MFC</strong>, votre plateforme de formation professionnelle dédiée à l'excellence et à la croissance personnelle. Nous sommes passionnés par l'apprentissage continu et nous nous engageons à vous fournir des programmes de formation exceptionnels pour enrichir vos compétences et stimuler votre carrière.</p>
            </div>
            <div class="column about-col">
                <i class="fas fa-coffee icon"></i>
                <p>Que vous soyez un professionnel chevronné cherchant à se perfectionner ou un débutant ambitieux, notre éventail de cours couvre une variété de domaines allant du leadership et de la gestion au développement informatique, en passant par le marketing et bien plus encore. Nos cours sont soigneusement conçus pour répondre aux besoins du marché actuel, garantissant que vous acquériez des compétences pratiques et applicables dès le premier jour.</p>
            </div>
            <div class="column about-col">
                <i class="fas fa-pencil-alt icon"></i>
                <p>Chez MFC, nous croyons en l'apprentissage flexible. Profitez de nos cours en ligne accessibles de n'importe où, à tout moment, et apprenez à votre rythme. Nos instructeurs sont des experts chevronnés dans leur domaine, prêts à vous guider tout au long de votre parcours d'apprentissage.Faites un pas décisif vers le succès professionnel. Explorez nos cours, découvrez de nouvelles opportunités et débloquez votre plein potentiel. Bienvenue à bord de MFC, où l'apprentissage devient une aventure enrichissante.</p>
            </div>
        </div>
    </div>

    <!-- Section : Accueil -->



    <!--css-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="src/js/main.js"></script>
    <!--css-->
    <!--****************************Section essai-->
    <section class="section" style="background-color: #004641; margin-bottom: 0px;">
        <!--<h1 class="title">Section</h1>
    <h2 class="subtitle">
      A simple container to divide your page into <strong>sections</strong>, like the one you're currently reading.
    </h2>-->
        <!--<div class="menu-trigger">
        <span class="trigger-word"><a href="">Passez le curseur ici</a></span>
        <div class="dropdown-menu">
          <ul>
            <li><a href="#">Option 1</a></li>
            <li><a href="#">Option 2</a></li>
            <li><a href="#">Option 3</a></li>
          </ul>
        </div>
      </div>-->

        <!--========================================La voie de la connaissance=====================================================-->
        <div class="article">
            <div class="section">
                <h1><strong>La voie de la connaissance</strong></h1>
                <p>
                    <strong>LE MOT DU PRESIDENT</strong><br><br>
                    Dans un espace de formation entièrement réservé aux adultes, la maison de la Formation Continue s'est dotée d'une organisation qui lui permet d'optimiser les temps de formation. En effet, la culture pédagogique de notre entreprise repose sur la capitalisation des savoirs fondamentaux et des savoirs-faires pédagogoiques que nous développons en permanence.<br><br>
                    Cette expertise, s'est construite à partir de retours d'expérience de nos conultants experts et pédagogues et grâce à notre cellule de veille et de recherche surnles meilleures pratiques d'apprentissage. Nous avons appélé cette méthode <u><em>La voie de la connaissance</em></u><br><br>
                    <strong>La voie de la connaissance</strong> incarne toue la culture pédagogique de la <strong>MFC</strong> et symbolise son expertise dans ce domaine. Elle constitue donc en quelque sorte notre code génétique. Elle s'enrichit aujourd'hui des nouvelles technologies pour s'adapter aux nouveaux enjeux des entreprises et des stagiaires et faire naître les modalités de formation du 21e siècle.<br><br><br>
                    <strong>Aimé EFCE <em>Directeur Général de la Maison de la Formation Continue</em></strong>
                </p>
                <img src="https://images.pexels.com/photos/935835/pexels-photo-935835.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Financement">
            </div>
        </div>


    </section>


    <section class="section" style="background-color: #2d0051;">
        <!--<h1 class="title">Section</h1>
    <h2 class="subtitle">
      A simple container to divide your page into <strong>sections</strong>, like the one you're currently reading.
    </h2>-->
        <!--<div class="menu-trigger">
        <span class="trigger-word"><a href="">Passez le curseur ici</a></span>
        <div class="dropdown-menu">
          <ul>
            <li><a href="#">Option 1</a></li>
            <li><a href="#">Option 2</a></li>
            <li><a href="#">Option 3</a></li>
          </ul>
        </div>
      </div>-->

        <!--========================================La voie de la connaissance=====================================================-->

        <div class="article">
            <div class="section">
                <img src="src/img/cartemfc.png" alt="carte de france">

                <p>
                    <strong>UNE ÉQUIPE DE 80 FORMATEURS ET CONSULANTS A VOTRE SERVICE PLUSIUERS SITE DE FORMATIONS POUR PLUS DE PROXIMITE</strong>

                </p>
                <h1><strong>Plusieurs Sites En France</strong></h1>
            </div>
        </div>


    </section>




    <!--===========================================section NOS VALEURS=========================================-->


    <section class="section">
        <!--<h1 class="title">Section</h1>
    <h2 class="subtitle">
      A simple container to divide your page into <strong>sections</strong>, like the one you're currently reading.
    </h2>-->
        <!--<div class="menu-trigger">
        <span class="trigger-word"><a href="">Passez le curseur ici</a></span>
        <div class="dropdown-menu">
          <ul>
            <li><a href="#">Option 1</a></li>
            <li><a href="#">Option 2</a></li>
            <li><a href="#">Option 3</a></li>
          </ul>
        </div>
      </div>-->

        <!--========================================La voie de la connaissance=====================================================-->


        <div class="section">

            <h1><strong>Nos Valeurs</strong></h1><br><br><br>

            <p>
                Ces valuers constituent le <strong>climat</strong> de la <strong>MFC</strong> et illustrent la réalité de notre ambition : <br><br>
                <strong class="yellow">Passion : offrir une même qualité de servie sur tous les sites</strong><br><br>
                Nous sommes de faire de nos formations un atout pour la réussite de nos clients, et nous mettons tout en œuvre pour les accompagner et satisfaire leurs besoins. <br><br>
                <strong class="yellow">Innovation : communiquer les découvrtes et nouveautés</strong><br><br>
                Notre capacité à innover détermine notre réussite : idnetifier les évolutions des métiers et les nouvelles compétences associées, imaginer les modalités de formation les mieux adaptées aux besoins de nos clients.<br><br>

                <strong class="yellow">Orientation client : créer de la valuers pour le client, construire ensemble</strong><br><br>
                Rien ne saurait remplacer l'écoute te l'engagement pour offrir un service de qqualité à nos clients, atteindre leurs objectifs grâce à une pédagogoe appropriée, optimiser leur retout sur investissement et permettre la réussite de leurs projets.<br><br>

                <strong class="yellow">Respect : progresser ensemble</strong><br><br>
                Nous plaçons le respect, la reconnaissance et l'écoute au cœur des relations avec nos collaboratuers, nos partenaires et nos clients.


            </p>
            <img src="https://images.pexels.com/photos/8555673/pexels-photo-8555673.jpeg?auto=compress&cs=tinysrgb&w=600" alt="carte de france">

        </div>



    </section>


    <!--=========================================== Bouton de retour en haut================================================ -->
    <div id="scroll-to-top" class="scroll-to-top">&#9650; Haut de page</div>

    <script src="main.js"></script>









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