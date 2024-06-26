



<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Connectez vous</title>

    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f1f1f1;


        }

        .page-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 50vh;
            margin-top: 0px;
            position: sticky;
        }

        .login-container {
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 800px;
            text-align: center;



        }

        .login-container h2 {
            color: #333;
            margin-bottom: 20px;
        }

        .input-group {
            margin-bottom: 15px;
        }

        .input-group label {
            display: block;
            text-align: left;
            margin-bottom: 5px;
            color: #666;
        }

        .input-group input {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
            margin-bottom: 10px;
        }

        .password-forgot {
            color: #007bff;
            text-decoration: none;
            font-size: 14px;
            display: block;
            margin-top: 10px;
        }

        .password-forgot:hover {
            text-decoration: underline;
        }

        .login-btn {
            background-color: #cf004b;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            width: 100%;
        }

        .login-btn:hover {
            background-color: #cf004b;
            background-color: #fff;
            border: 1px solid #cf004b;
            color: #cf004b !important;
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
            <h1>Espace de Connexion</h1>
            <p>Si vous n'avez pas encore de compte, ne vous inquitez pas. <strong><a href="inscription.php">Cliquez
                ici</a></strong>, pour en crée un.</p>
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



    <!--******************************************************Section espace client*************************************************-->
    
    
    <!--<section class="section sect word">
        <h1 class="title">Espace de Connexion</h1>
        <h2 class="subtitle">
            Si vous n'avez pas encore de compte, ne vous inquitez pas. <strong><a href="inscription.html">Cliquez
                    ici</a></strong>, pour en crée un.
        </h2>
    </section>-->



    <!--***************************************Se connceter************************************-->
    <!--<div class="contenair-space-client">
        <form action="authentification.php" method="post">
            <div class="block space-between-formulaire">
                <div class="field">
                    <p class="control has-icons-left has-icons-right">
                    <input class="input" type="email" placeholder="Email">
                    <span class="icon is-small is-left">
                        <i class="fas fa-envelope"></i>
                    </span>
                    <span class="icon is-small is-right">
                        <i class="fas fa-check"></i>
                    </span>
                    </p>
                </div>
                <div class="field">
                    <p class="control has-icons-left">
                    <input class="input" type="password" placeholder="Mot de passe">
                    <span class="icon is-small is-left">
                        <i class="fas fa-lock"></i>
                    </span>
                    </p>
                </div>
                <div class="field">
                    <span class="mot-de-passe-oublie">
                    <p class="control">
                    <button class="button is-success">
                        Se connecter
                    </button>
                    </p>
                    <a href="" class="cam">Mot de passe oublié?</a></span>
                </div>
            </div>
        </form>
        
</div>-->




    <!-- formulaire de connexion-->
    <div class="page-container">
        <div class="login-container">
            <h2>Connexion</h2>
            <form action="authentification.php" method="POST">
                <div class="input-group">
                    <label for="email">Email :</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="input-group">
                    <label for="mdp">Mot de passe :</label>
                    <input type="password" id="mdp" name="mdp" required>
                </div>
                <button type="submit" class="login-btn">Se connecter</button>
            </form>
            <a href="reinitialmdp.php" class="password-forgot">Mot de passe oublié ?</a>
        </div>
    </div>






    <!--***************************************Se connceter************************************-->







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
                            <li><a href="contacteznous.html">Nous contactez</a></li>
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