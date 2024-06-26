<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Organisme de formation professionnelle</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            /*background-image: url('src/img/logo.png');  Ajoutez le chemin vers votre image de fond
            background-size: cover;*/
        }

        form {
            max-width: 600px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input,
        select {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
        }

        button {
            background-color: #3498db;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
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



        /*==========================CSS du button===============================*/
        input[type="submit"] {
            background-color: #cf004b;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            width: 100%;
            ;
        }

        input[type="submit"]:hover {
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
                <div><a href="Formulaireinscri.html" class="fiche" style="color:white ; font-size: 16px; ">Formulaire
                        d'inscription</a></div>
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
    <form action="formualireinscrip.php" method="POST">
        <label for="NomS">Nom :</label>
        <input type="text" id="NomS" name="NomS" required>
        <br>

        <label for="PrenomS">Prénom :</label>
        <input type="text" id="PrenomS" name="PrenomS" required>
        <br>

        <label for="TelS">Téléphone :</label>
        <input type="tel" id="TelS" name="TelS" required>
        <br>

        <label for="AdresseS">Adresse :</label>
        <input type="text" id="AdresseS" name="AdresseS" required>
        <br>

        <label for="MailS">E-mail :</label>
        <input type="email" id="MailS" name="MailS" required>
        <br>

        <label for="entreprise">Entreprise :</label>
        <input type="text" id="EntrepriseS" name="EntrepriseS">
        <br>

        <label for="formation">Formation :</label>
        <!--<select id="formation" name="formation">-->
            <?php
            // Récupérer les formations depuis la base de données
            /*$connexion = mysqli_connect('localhost', 'user', '', 'mfc');
            $requete_formations = "SELECT IDF, Intuleformation FROM formation";
            $resultat_formations = mysqli_query($connexion, $requete_formations);

            // Afficher les options de formation
            while ($formation = mysqli_fetch_assoc($resultat_formations)) {
                echo "<option value='" . $formation['IDF'] . "'>" . $formation['IntuleF'] . "</option>";
            }

            // Fermer la connexion à la base de données
            mysqli_close($connexion);*/

            // Connexion à la base de données
            $servername = "localhost"; // Adresse du serveur MySQL
            $username = "root"; // Nom d'utilisateur MySQL
            $password = ""; // Mot de passe MySQL
            $database = "mfc"; // Nom de la base de données
            $conn = new mysqli($servername, $username, $password, $database);

            // Vérification de la connexion
            if ($conn->connect_error) {
                die("Échec de la connexion : " . $conn->connect_error);
            }

            // Requête SQL pour récupérer les formations
            $sql = "SELECT id, nom_formation FROM formations";
            $result = $conn->query($sql);

            // Création du menu déroulant des formations
            echo "<select name='formation'>";
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<option value='" . $row["id"] . "'>" . $row["nom_formation"] . "</option>";
                }
            } else {
                echo "<option value=''>Aucune formation disponible</option>";
            }
            echo "</select>";

            // Fermeture de la connexion
            $conn->close();



            ?>
            <!-- Ajoutez d'autres options de formation au besoin -->
        <!--</select>--><br><br><br>

        <input type="submit"></input>
    </form>


































    <!--****************************Section essai-->

    <div class="footer-dark">
        <footer>
            <div class="container">
                <div class="row">
                    <div class="first-col">
                        <div class="col-sm-6 col-md-3 item first-col-footer ">
                            <h3>Nos offres</h3>
                            <ul>
                                <li><a href="interentreprise.html">Interentrprise</a></li>
                                <li><a href="intraentreprise.html">Intra-entreprise</a></li>
                                <li><a href="aututorat.html">Sur-mésure</a></li>
                                <li><a href="diplomecertifiante.html">Diplômante et certifiante</a></li>
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