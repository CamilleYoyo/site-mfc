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
        <title>Opco financement</title>

        <style>
            body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        

       
/*css du body*/
            section.page-section__container {
	            padding: 20px calc(50% - 582.5px);
            }
            section.page-section h2 {
                max-width: 769px;
                margin-top: 30px;
                margin-bottom: 30px;
            }

            section.page-section__container a {
                text-decoration: none;
                color: #e6233a;
            }
            section.page-section__container a:hover {
                text-decoration: underline;
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





        <section class="wp-block-cegos-cegos-page-section page-section page-section__container texte"><p><strong>Acteurs majeurs de la formation professionnelle, les OPCO sont chargés d’informer, conseiller et accompagner entreprises et salariés dans leurs projets d’apprentissage et de formation professionnelle</strong>.</p><figure class="wp-block-image aligncenter size-full"><a href="https://www.onlineexambuilder.com/fr/formation-et-financements-opco/exam-593065" target="_blank" rel="noreferrer noopener"><picture class="wp-image-80141"><source srcset="https://static3.cegos.fr/content/uploads/2023/12/12111612/BanniereOPCO_920.jpg.webp 920w,https://static3.cegos.fr/content/uploads/2023/12/12111612/BanniereOPCO_920-768x117.jpg.webp 768w,https://static3.cegos.fr/content/uploads/2023/12/12111612/BanniereOPCO_920-640x97.jpg.webp 640w,https://static3.cegos.fr/content/uploads/2023/12/12111612/BanniereOPCO_920-320x49.jpg.webp 320w" sizes="(min-width:920px) 920px" type="image/webp"><img src="https://static3.cegos.fr/content/uploads/2023/12/12111612/BanniereOPCO_920.jpg" class="wp-image-80141" srcset="https://static3.cegos.fr/content/uploads/2023/12/12111612/BanniereOPCO_920.jpg 920w,https://static3.cegos.fr/content/uploads/2023/12/12111612/BanniereOPCO_920-768x117.jpg 768w,https://static3.cegos.fr/content/uploads/2023/12/12111612/BanniereOPCO_920-640x97.jpg 640w,https://static3.cegos.fr/content/uploads/2023/12/12111612/BanniereOPCO_920-320x49.jpg 320w" sizes="(min-width:920px) 920px" loading="lazy"></picture></a></figure><br><br><h2 class="wp-block-heading">Nos partenaires</h2><p>Ces Opco partenaires vous proposent un accès aux formations MFC à tarifs préférentiels.</p></section>






        <section class="wp-block-cegos-cegos-page-section page-section page-section__container vector--top-left-one texte"><h2 class="wp-block-heading">Quelles formations financent les OPCO ? </h2><p>Toutes les entreprises sont rattachées à un OPCO et peuvent bénéficier de financements ou d’offres de services qui prennent en compte les problématiques et attentes spécifiques à leur secteur d’activité. Exemple : financement des formations pour les entreprises impactées par les transitions écologiques ou numériques via le FNE-Formation 2023.</p><h2 class="wp-block-heading">Quel est le rôle des OPCO ?</h2><p>Les OPCO ont <strong>3 missions principales</strong> :</p><ul><li><strong>Accompagner les TPE/PME dans leurs besoins formation</strong> : proposer des services de proximité et financer leur Plan de développement des compétences pour favoriser l’accès à la formation de leurs salariés.</li><li><strong>Promouvoir les formations en alternance</strong> : contrats d’apprentissage, de professionnalisation et Pro-A.</li><li><strong>Appuyer techniquement les branches professionnelles </strong>sur les questions de GPEC, sur les niveaux de prises en charge des contrats d’apprentissage et de professionnalisation, et dans leur mission de certification (construction des référentiels…).</li></ul><h3 class="wp-block-heading">Le Plan de développement des compétences des TPE/PME de moins de 50 salariés</h3><p>Dans les TPE/PME, les formations peuvent être, en partie ou en totalité, financées par les OPCO dans le cadre d’un forfait annuel ou d’une prise en charge horaire. Selon les OPCO, les coûts pédagogiques mais aussi les frais annexes et les coûts salariaux peuvent être financés. Renseignez-vous auprès de votre opérateur de compétences.</p><h3 class="wp-block-heading">Le financement de formations identifiées via les Actions collectives</h3><p>Une Action collective est une <strong>liste de formations </strong>proposée par l’OPCO pour faciliter l’accès à la formation,<strong> sur les sujets identifiés comme stratégiques et cœur de métier pour la branche</strong>.</p><ul><li>Les adhérents bénéficient de conditions avantageuses sur ces formations&nbsp;: tarifs négociés, prise en charge des frais pédagogiques jusqu'à 100 % et simplification administrative.</li><li>Les formations sont délivrées par des organismes de formation sélectionnés par l’OPCO. Les programmes de formation proposés répondent à des cahiers de charges rigoureux pour s’adapter précisément aux besoins des entreprises.</li><li>A noter – Suivant les OPCO et sous certaines conditions (fonds conventionnels, versements volontaires…) <strong>toutes les entreprises adhérentes, quelle que soit leur taille, peuvent bénéficier de ces Actions collectives</strong>. Renseignez-vous auprès de votre OPCO.</li></ul><h3 class="wp-block-heading">Les Accords négociés des OPCO</h3><p>Les OPCO peuvent également négocier des <strong>accords tarifaires exclusifs pour leurs entreprises adhérentes</strong> auprès de certains organismes de formation partenaires.</p><h3 class="wp-block-heading">Le financement du dispositif Pro-A</h3><p>L’OPCO <strong>prend en charge les coûts pédagogiques des parcours de formation Pro-A</strong>. <br>Pro-A est un parcours de formation en alternance menant à une qualification reconnue. Destinée aux salariés en poste, Pro-A peut être mobilisée dans une optique d’évolution, de promotion professionnelle ou de reconversion interne à l’entreprise. Les critères et montants forfaitaires de prise en charge dépendent de l’OPCO de rattachement, voire de la branche de l’entreprise. <a href="/toutes-les-solutions-de-financements/pro-a">Plus d’information sur le dispositif Pro-A</a>.<br>Les OPCO assurent également le financement des contrats d’apprentissage et de professionnalisation, en fonction des différents niveaux de prise en charge.</p><h3 class="wp-block-heading">Le financement via le FNE Formation</h3><p>Avec le FNE-Formation, l’État aide financièrement le développement des compétences dans les entreprises impactées par les transitions écologiques, numériques ou agricoles et alimentaires. Certaines formations en lien avec les grands évenements sportifs à venir sont également éligibles (Coupe du monde de Rugby 2023 et Jeux Olympiques et Paralympiques 2024).<br>Les entreprises doivent se rapprocher de leur OPCO avant même le dépôt de leur demande de prises en charge&nbsp;; c’est en effet <strong>l’OPCO qui valide l’éligibilité des formations envisagées à la prise en charge au titre du FNE-Formation</strong>. La date limite de dépôts des dossiers est fixé à fin décembre 2023, voire novembre pour certains OPCO, pour des formations qui devront être réalisées avant fin 2024 (sous réserve des fonds disponibles). <a href="/toutes-les-solutions-de-financements/le-fne-formation">Plus d’information sur le FNE-Formation 2023</a>.</p><h2 class="wp-block-heading">Quels sont les différents OPCO ? </h2><p>Les Opérateurs de compétences (OPCO) sont des organismes agréés par l’État créés en 2019. Ils ont remplacé les organismes paritaires collecteurs agréés (OPCA).<br><strong>11 OPCO </strong>regroupent les 329 branches professionnelles sur des critères de cohérence de filière, d’enjeux métiers ou de service client ou entreprise. <strong>Chaque entreprise est donc rattachée à un OPCO, en fonction de sa branche d'activité.</strong></p><ul><li><a href="https://www.afdas.com/">Afdas</a>&nbsp;: secteurs de la culture, des médias, des loisirs et de la communication, 45 branches professionnelles</li><li><a href="https://www.akto.fr/">AKTO</a>&nbsp;: entreprises et salariés des services à forte intensité de main d’œuvre, 32 branches professionnelles</li><li><a href="https://opco-atlas.fr/">Atlas</a>&nbsp;: services financiers et conseil aux entreprises, 18 branches professionnelles</li><li><a href="https://www.constructys.fr/">Constructys</a>&nbsp;: construction, 9 branches professionnelles</li><li><a href="https://www.ocapiat.fr/">Ocapiat&nbsp;</a>: agriculture et transformation alimentaire, 49 branches professionnelles</li><li><a href="https://www.opco2i.fr/">OPCO 2i</a>&nbsp;: industries, 44 branches professionnelles</li><li><a href="https://www.opcoep.fr/">OPCO EP</a>&nbsp;: entreprises de proximité, 54 branches professionnelles</li><li><a href="https://www.lopcommerce.com/">Opcommerce</a>&nbsp;: commerce et distribution, 21 branches professionnelles</li><li><a href="https://www.opcomobilites.fr/">OPCO Mobilités</a>&nbsp;: transports, services de l’automobile et mobilité, 22 branches professionnelles</li><li><a href="https://opco-sante.fr/prehome">OPCO Santé</a>&nbsp;: 8 branches professionnelles</li><li><a href="https://www.uniformation.fr/">Uniformation</a>&nbsp;: Cohésion sociale, 27 branches professionnelles</li></ul><h2 class="wp-block-heading">Comment trouver son OPCO ?</h2><p>Vous avez un doute&nbsp;sur votre OPCO ? France compétences propose un <a href="https://quel-est-mon-opco.francecompetences.fr/" target="_blank" rel="noreferrer noopener">moteur de recherche pour connaître son OPCO de rattachement.</a></p><p>Plusieurs moteurs de recherche sont également disponibles : <a href="https://www.cfadock.fr/" target="_blank" rel="noreferrer noopener">à partir de votre numéro SIRET</a> ou du <a href="https://view.officeapps.live.com/op/view.aspx?src=https%3A%2F%2Ftravail-emploi.gouv.fr%2FIMG%2Fxlsx%2Ftable_idcc-opco-19072019.xlsx&amp;wdOrigin=BROWSELINK" target="_blank" rel="noreferrer noopener">numéro de votre Convention collective (IDCC)</a>.</p><p class="has-text-align-center"><a class="cta-secondary light--red" href="/contact" rel="noopener noreferrer">Contacter nos équipes</a></p><p>Cegos accompagne votre entreprise à chaque étape de la montée en compétence de vos collaborateurs. <br>N'hésitez pas à contacter nos conseillers formation au 01 55 00 95 95.</p></section>

        









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

