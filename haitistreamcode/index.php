<!-- 

ChatGPT
Créer un menu de navigation efficace pour un site de streaming est crucial pour offrir une expérience utilisateur fluide et intuitive. Voici quelques suggestions pour les éléments clés à inclure dans le menu de navigation d'un site de streaming :

Menu de Navigation pour un Site de Streaming
Accueil

Description : La page d'accueil avec les recommandations personnalisées, les dernières nouveautés et les tendances actuelles.
Lien : /accueil
Catégories / Genres

Description : Une section dédiée à la navigation par genres (Action, Comédie, Drame, Documentaire, etc.).
Lien : /categories
Sous-menus :
Action
Comédie
Drame
Documentaire
Animation
Science-fiction
Horreur
Films

Description : Une page dédiée aux films avec des sous-catégories pour une navigation plus précise.
Lien : /films
Sous-menus :
Nouveautés
Populaires
Top 10
Classiques
Prochaines Sorties
Séries TV

Description : Une page dédiée aux séries TV, y compris les séries originales et les populaires.
Lien : /series
Sous-menus :
Nouveautés
Populaires
Top 10
Séries Originales
Séries en Cours
Ma Liste

Description : Une section où les utilisateurs peuvent trouver et gérer les films et séries qu'ils ont ajoutés à leur liste personnelle.
Lien : /ma-liste
Recherche

Description : Une fonctionnalité de recherche pour trouver des films, séries, acteurs, réalisateurs, etc.
Lien : /recherche
Compte / Profil

Description : Une section pour gérer les paramètres du compte, les informations de paiement, les préférences de visionnage, etc.
Lien : /compte
Sous-menus :
Paramètres du Compte
Historique de Visionnage
Préférences
Déconnexion
Aide / Support

Description : Une page dédiée au support client, y compris la FAQ, le contact du service client, et les guides d'utilisation.
Lien : /aide
Exemple de Menu de Navigation
html
Copy code
<nav>
    <ul>
        <li><a href="/accueil">Accueil</a></li>
        <li>
            <a href="/categories">Catégories</a>
            <ul>
                <li><a href="/categories/action">Action</a></li>
                <li><a href="/categories/comédie">Comédie</a></li>
                <li><a href="/categories/drame">Drame</a></li>
                <li><a href="/categories/documentaire">Documentaire</a></li>
                <li><a href="/categories/animation">Animation</a></li>
                <li><a href="/categories/science-fiction">Science-fiction</a></li>
                <li><a href="/categories/horreur">Horreur</a></li>
            </ul>
        </li>
        <li>
            <a href="/films">Films</a>
            <ul>
                <li><a href="/films/nouveautés">Nouveautés</a></li>
                <li><a href="/films/populaires">Populaires</a></li>
                <li><a href="/films/top-10">Top 10</a></li>
                <li><a href="/films/classiques">Classiques</a></li>
                <li><a href="/films/prochaines-sorties">Prochaines Sorties</a></li>
            </ul>
        </li>
        <li>
            <a href="/series">Séries TV</a>
            <ul>
                <li><a href="/series/nouveautés">Nouveautés</a></li>
                <li><a href="/series/populaires">Populaires</a></li>
                <li><a href="/series/top-10">Top 10</a></li>
                <li><a href="/series/originales">Séries Originales</a></li>
                <li><a href="/series/en-cours">Séries en Cours</a></li>
            </ul>
        </li>
        <li><a href="/ma-liste">Ma Liste</a></li>
        <li><a href="/recherche">Recherche</a></li>
        <li>
            <a href="/compte">Compte</a>
            <ul>
                <li><a href="/compte/paramètres">Paramètres du Compte</a></li>
                <li><a href="/compte/historique">Historique de Visionnage</a></li>
                <li><a href="/compte/préférences">Préférences</a></li>
                <li><a href="/compte/déconnexion">Déconnexion</a></li>
            </ul>
        </li>
        <li><a href="/aide">Aide</a></li>
    </ul>
</nav>
Conseils pour la Conception du Menu de Navigation
Simplicité et Clarté : Assurez-vous que le menu est clair et simple, permettant aux utilisateurs de trouver facilement ce qu'ils cherchent.
Accessibilité : Le menu doit être accessible sur tous les appareils, y compris les mobiles et les tablettes.
Interactivité : Utilisez des animations subtiles et des indications visuelles pour améliorer l'expérience utilisateur.
Personnalisation : Offrez des options de personnalisation dans le menu pour que les utilisateurs puissent accéder rapidement à leur contenu préféré.
En suivant ces suggestions, vous pouvez créer un menu de navigation efficace et convivial pour un site de streaming, améliorant ainsi l'expérience utilisateur et facilitant la découverte de contenu.
 -->




<!DOCTYPE html>
<html lang="fr-FR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="https://www.haitistreamcode.com/news.php">

    <title>Accueil | Haiti Stream Code</title>

    <!-- ====================== FAV ICONS ====================== -->
    <!-- <link rel="shortcut icon" href="images/logo.io" type="image/x-icon"> -->

    <!-- ====================== BOOTSTRAP CSS ====================== -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- ====================== BOXICONS ====================== -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <!-- ====================== SWIPER CSS ====================== -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>

    <!-- ====================== JQUERY ====================== -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <!-- ====================== WAYPOINTS ====================== -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
        <!-- ====================== COUNTER-UP ====================== -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>

    <!-- ====================== MAIN CSS ====================== -->
    <link rel="preload" href="css/styles.css?v=7" as="style" onload="this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="css/styles.css?v=7"></noscript>
</head>
<body>
    <header id="header-website">
        <a href="#" id="logoLinkHeader">Haiti Stream Code</a>
        <input type="search" placeholder="Rechercher des films, des séries et autres réalisations haïtiennes..." id="searchStream">
        <a href="#" id="loginButton">Se connecter</a>
        <a href="#" id="registerButtonFree">Commencer l'essai gratuit</a>
    </header>
    <nav id="main-nav">
        <ul>
            <li><a href="#">Accueil</a></li>
            <li>
                <a href="#">Catégories<i class='bx bx-chevron-down'></i></a>
                <ul class="sub-menu">
                    <li><a href="/categories/action">Action</a></li>
                    <li><a href="/categories/comédie">Comédie</a></li>
                    <li><a href="/categories/drame">Drame</a></li>
                    <li><a href="/categories/documentaire">Documentaire</a></li>
                    <li><a href="/categories/animation">Animation</a></li>
                    <li><a href="/categories/science-fiction">Science-fiction</a></li>
                    <li><a href="/categories/horreur">Horreur</a></li>
                </ul>
            </li>
            <li>
                <a href="#">Films<i class='bx bx-chevron-down'></i></a>
                <ul class="sub-menu">
                    <li><a href="/films/nouveautés">Nouveautés</a></li>
                    <li><a href="/films/populaires">Populaires</a></li>
                    <li><a href="/films/top-10">Top 10</a></li>
                    <li><a href="/films/classiques">Classiques</a></li>
                    <li><a href="/films/prochaines-sorties">Prochaines Sorties</a></li>
                </ul>
            </li>
            <li>
                <a href="#">Séries TV<i class='bx bx-chevron-down'></i></a>
                <ul class="sub-menu">
                    <li><a href="/series/nouveautés">Nouveautés</a></li>
                    <li><a href="/series/populaires">Populaires</a></li>
                    <li><a href="/series/top-10">Top 10</a></li>
                    <li><a href="/series/originales">Séries Originales</a></li>
                    <li><a href="/series/en-cours">Séries en Cours</a></li>
                </ul>
            </li>
            <li><a href="#">Ma Liste</a></li>
            <li>
                <a href="#">Compte<i class='bx bx-chevron-down'></i></a>
                <ul class="sub-menu">
                    <li><a href="/compte/paramètres">Paramètres du Compte</a></li>
                    <li><a href="/compte/historique">Historique de Visionnage</a></li>
                    <li><a href="/compte/préférences">Préférences / Favoris</a></li>
                    <li><a href="/compte/déconnexion">Déconnexion</a></li>
                </ul>
            </li>
            <li><a href="#">Actualités</a></li>
        </ul>
        <a href="#" id="helpButton">Trouvez de l'aide maintenant</a>
    </nav>
<!-- É    è  ç   é   ï   ô   à   À   ê   î   û   ù -->
    <main>
        <section id="homeSection">
            <section id="homeSectionLeft">
                <h1>Diffusion de contenu local, des films, des séries et des documentaires sur la culture Haïtienne</h1>
                <a href="#" id="registerButton">S'abonner maintenant</a>
            </section>
            <section id="homeSectionRight">
                <ul>
                    <li>Découvrez le monde du divertissement à portée de clic.</li>
                    <li>Explorez nos collections exclusives, les dernières sorties, et vos classiques préférés - tout en un seul endroit !</li>
                    <li>Des films à succès, des séries populaires, des documentaires inspirants, et plus encore.</li>
                    <li>Visionnez vos contenus préférés en HD ou en 4K.</li>
                    <li>Accédez à des titres que vous ne trouverez nulle part ailleurs.</li>
                    <li>Découvrez des contenus basés sur vos goûts et préférences.</li>
                    <li>Regardez où vous voulez, quand vous voulez, sur tous vos appareils.</li>
                    <li>Profitez de votre contenu sans interruption.</li>
                    <li>Téléchargez vos films et séries pour les regarder sans connexion.</li>
                    <li>Nous sommes là pour vous aider à tout moment.</li>
                    <li><a href="#" class="my-link">Inscrivez-vous maintenant</a> et plongez dans un univers de divertissement inégalé !</li>
                </ul>
            </section>
        </section>
        <section></section>
        <section></section>
        <section></section>
        <section></section>
    </main>



    <footer>
        <p>Copyright &copy; 2024</p>
    </footer>

    <!-- ====================== BOOTSTRAP JS ====================== -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>

    <!-- ====================== SWIPER JS ====================== -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

    <!-- ====================== SCROLL REVEAL ====================== -->
    <script src="https://unpkg.com/scrollreveal"></script>

    <!-- ====================== MAIN JS ====================== -->
    <script src="javascript/main.js"></script>
</body>
</html>