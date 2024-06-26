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
    <title>Certification RH</title>


    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 10px;
            text-align: center;
        }

        .article {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .article p {
            float: left;
            width: 100%;
            /* Ajustez la largeur du paragraphe selon vos besoins */
            margin-right: 20px;
        }

        .article img {
            float: right;
            width: 100%;
            /* Ajustez la largeur de l'image selon vos besoins */
            border-radius: 8px;
            height: 70%;
        }

        .flex {
            display: flex;
            justify-content: space-around;
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
                <div><a href="Formulaireinscri.php" class="fiche" style="color:white ; font-size: 16px; ">Formulaire
                        d'inscription</a></div>
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



    <div class="flex">
        <div class="article">
            <p>
                Les formations certifiantes sont plus que jamais un levier de performance pour l’entreprise et un gage
                d’employabilité pour l’individu. Besoins en recrutement, professionnalisation, mobilité interne ou
                reconversion, <strong>il existe une solution de formation certifiante proposée par le Groupe
                    MFC.</strong>
            </p><br>
            <p><strong>Recrutement</strong></p>
            <p>Certains secteurs comme l'informatique, les technologies de l'information, la santé et le service à la
                personne, le conseil et l'ingénierie, l'environnement et l'énergie, ont une demande croissante en
                personnel qualifié et doivent faire face à une véritable guerre des talents.</p>
            <p><strong>Pour vos besoins de recrutement, d’embauche en alternance, le Groupe MFC vous accompagne</strong>
            </p>
            <p><strong>Professionnalisation</strong><br><br>

                De la même manière, les besoins en professionnalisation varient en fonction de nombreux facteurs, tels
                que les projets stratégiques de l'entreprise, son secteur d'activité, sa maturité numérique, le niveau
                de compétences existant au sein de l'équipe et les évolutions du marché. La pandémie de Covid-19 a
                entraîné une évolution rapide des modes de travail et la transition écologique va également fortement
                transformer les modes de production, de consommation, de mobilité…Les entreprises doivent, plus que
                jamais, professionnaliser leurs équipes :<br><br>



                Maintenir à jour les compétences techniques et rester à la pointe des développements dans les domaines
                d’expertise : nouvelles normes ou technologies, nouveaux outils ou logiciels.
                Développer de nouvelles compétences, dites transversales pour gérer des projets (planification,
                organisation, coordination, communication avec les parties prenantes), améliorer la capacité à
                travailler en équipe, à communiquer efficacement, à résoudre les conflits ou encore à négocier.
                Adapter les compétences à de nouvelles façons d’exercer les métiers : développer des pratiques éthiques
                ou plus durables...
                Améliorer les compétences en management et leadership pour mieux encadrer, donner du sens et motiver les
                équipes...<br>

                <strong>Pour vos besoins en professionnalisation, le Groupe MFC vous accompagne </strong><br>

                Retrouvez les parcours de formation certifiants Cegos dans de nombreux domaines : Achats, management,
                projets, efficacité professionnelle...<br>

                Pour vos besoins en professionnalisation, pensez aux financements possibles au-delà de votre Plan de
                développement des compétences : FNE-Formation, Financements OPCO, CPF co-construit…<br><br>
            <h1><strong>Reconversion</strong></h1><br>

            En raison des changements rapides dans le monde du travail, <strong>les besoins de reconversion
                professionnelle se sont multipliés</strong>.<br><br>



            <strong>Disparition de certains métiers</strong> ou postes dans des secteurs touchés notamment par la crise
            sanitaire : industries, services ou commerces de détail…
            <strong>Besoin de recrutement</strong> dans des secteurs ou métiers en croissance : technologies de
            l'information, santé, environnement, énergie...
            <strong>Souhait des salariés</strong> de se reconvertir dans un autre métier pour mieux répondre à leurs
            contraintes ou leurs aspirations : plus de flexibilité, de mobilité ou de durabilité, proximité client,
            artisanat….<br>

            <strong>Pour vos besoins de reconversion, le Groupe Cegos vous accompagne</strong> :<br>

            Découvrez les formations diplômantes MFC en partenariat avec de grandes écoles reconnues.
            Découvrez l’offre Next Formation : 20 formations longues certifiantes pour reconvertir dans un métier
            porteur.<br>

            Pour vos besoins en reconversion, pensez aux financements possibles : Pro-A, CPF de transition…</p>
        </div>
        <div class="article">
            <img src="src/img/imag0.jpg" alt="Image de l'article">
        </div>
    </div>










    <!--****************************Section foter*******************************-->

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

                    <p>Praesent sed lobortis mi. Suspendisse vel placerat ligula. Vivamus ac sem lacus. Ut vehicula
                        rhoncus elementum. Etiam quis tristique lectus. Aliquam in arcu eget velit pulvinar dictum vel
                        in justo.</p>
                </div>
                <!--***********************************image footer***********************************************-->
                <div class="contenair-img-footer">
                    <ul>
                        <li><a href="index.html"><img src="src/img/logomfc.png" alt="logo" class="imglogofooter"></a>
                        </li>
                        <li><img src="src/img/imgfooter1.jpg" alt="image dans le footer" class="imgfooters"></li>
                        <li><img src="src/img/logo NextGeneration EUfooter3.png" alt="image drapeau" class="EUfooter">
                        </li>
                        <li><img src="src/img/logo-france-relancefooter2.png" alt="image drapeau" class="relancefooter">
                        </li>
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