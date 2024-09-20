<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="infos.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Info</title>
</head>

<body>
    <header>
        <nav>
            <div class="logo">
                <a href="index.php">Monbopays</a>
            </div>
            <ul id="menuList">
                <li><a href="index.php">Accueil</a></li>
                <li><a href="apropos.php">A Propos</a></li>
                <li><a href="tourCT.php">Sites Touristiques</a></li>
                <li><a href="tourCT.php#cultra">Cultures & Traditions</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
            <div class="menu-icon">
                <i class="fa-solid fa-bars" onclick="toggleMenu()"></i>
            </div>
        </nav>
    </header>

    <script>
        let menuList = document.getElementById("menuList")
        menuList.style.maxHeight = "0px";

        function toggleMenu() {
            if (menuList.style.maxHeight == "0px") {
                menuList.style.maxHeight = "300px";
            } else {
                menuList.style.maxHeight = "0px";
            }
        }
    </script>
    <script src="https://kit.fontawesome.com/f8e1a90484.js" crossorigin="anonymous"></script>


    <main>
        <div class="container">
            <h1>Culture du Maïs et du Coton au Burkina Faso</h1>

            <section class="section__ban5">
                <div class="section__ban4-left">
                    <img src="/photobf/mais2.jpg" alt="Champs de maïs" />
                </div>
                <div class="section__ban4-right">
                    <img src="/photobf/coton2.jpeg" alt="Champs de coton" />
                </div>
            </section>

            <h2>Le maïs &#x1F33D</h2>
            <p>Le maïs est la deuxième céréale produite au Burkina Faso. C'est l'une des principales cultures vivrières du pays et est largement cultivé dans toutes ces régions.</p>
            <p>Sa production est passée de 1 133 480 tonnes en 2011 à 1 710 898 tonnes en 2019.</p>
            <p>Cette céréale est essentielle pour la sécurité alimentaire, car elle est consommée sous diverses formes, comme le tô (une bouillie épaisse), le porridge et la farine.</p>
            <p>La production de maïs dépend fortement des conditions climatiques, en particulier des précipitations. Les techniques modernes d'agriculture, comme l'utilisation de semences améliorées et de fertilisants, sont de plus en plus adoptées pour augmenter les rendements.</p>

            <h2 id="coton">Le coton</h2>
            <p>L’agriculture au Burkina Faso est pluviale et occupe plus de 80% de la population active. Elle contribue à la formation du PIB à près de 20%. Le coton représente 60% des recettes d’exportation.</p>
            <p>Le Burkina Faso est l'un des plus grands producteurs de coton en Afrique, souvent surnommé "l'or blanc" du pays.</p>
            <p>Le coton est une culture de rente cruciale, qui joue un rôle majeur dans l'économie burkinabé, en fournissant des revenus à des millions de personnes, principalement dans les zones rurales.</p>
            <p>La production de coton fait face à des défis tels que la fluctuation des prix mondiaux, les conditions climatiques variables, et les controverses autour de l'utilisation du coton génétiquement modifié (OGM).</p>

            <h1 id="meteaux">L’or et les autres métaux au Burkina Faso</h1>

            <section class="section__ban5">
                <div class="section__ban4-left">
                    <img src="/photobf/orbf.jpg" alt="or au Burkina Faso" />
                </div>
                <div class="section__ban4-right">
                    <img src="/photobf/metobf.jpg" alt="Meteaux au Burkina Faso" />
                </div>
            </section>

            <p><strong>L’or et les autres métaux jouent un rôle crucial dans l’économie du Burkina Faso. Voici un aperçu de leur importance :</strong></p>
            <h2>L'or &#x1F947</h2>
            <p>Le Burkina Faso est devenu un acteur majeur dans l’industrie minière, notamment grâce à l’exploitation de l’or.</p>
            <p>Depuis 2009, le pays connaît une véritable ruée vers l’or, qui est devenu la première ressource de devises, surpassant même le coton. En 2021, le Burkina Faso a produit environ 66,858 tonnes d’or, ce qui représente une augmentation par rapport à l’année précédente.</p>
            <p>L’exploitation minière au Burkina Faso se divise en trois catégories : artisanale, semi-mécanisée et industrielle. Le pays compte plusieurs mines industrielles et de nombreux sites d’orpaillage artisanaux, bien que certains soient clandestins.</p>
            <p>L’or extrait est principalement exporté, notamment vers la Suisse pour être raffiné. Cette exportation contribue de manière significative au budget de l’État à travers diverses taxes et redevances.</p>
            <p>On constate tout de même une tendance positive actuellement, car l'or du Burkina Faso sera désormais raffiné au niveau national, notamment avec la construction d'une raffinerie d'or à Ouagadougou, inaugurée par le Capitaine Ibrahim Traoré le jeudi 23 novembre 2023 à Ouaga 2000.</p>

            <h2>Les autres métaux</h2>
            <p>Zinc : Le Burkina Faso est l’un des principaux producteurs de zinc en Afrique. Le zinc est utilisé dans diverses industries, notamment la construction et la fabrication.</p>
            <p>Manganèse : Le gisement de manganèse de Tambao est l’un des plus grands au monde. Le manganèse est essentiel pour la production d’acier et d’autres alliages.</p>
            <p>Cuivre, nickel, plomb et argent : Bien que moins exploités que l’or et le zinc, ces métaux contribuent également à diversifier l’économie minière du pays et à attirer des investissements supplémentaires. Des gisements de nickel et de cuivre ont été identifiés respectivement dans les régions de Dori et de Gaoua.</p>
            <p><strong>L’exploitation minière, bien que bénéfique économiquement, doit être gérée de manière durable pour minimiser les impacts environnementaux et sociaux au Burkina Faso.</strong></p>

        </div>

        <section>
            <h1 id="geo">Voici une présentation détaillée du pays :</h1>
            <h2>Géographie</h2>
            <p><strong>Capitale :</strong> Ouagadougou</p>
            <p><strong>Superficie :</strong> Environ 274 200 km²</p>
            <p><strong>Frontières :</strong> Mali, Niger, Côte d'Ivoire, Ghana, Togo, Bénin</p>
            <p><strong>Climat :</strong> Tropical de savane avec une saison des pluies et une saison sèche</p>

            <h2>Histoire</h2>
            <p><strong>Origines et Royaumes :</strong> Royaumes Mossis puissants, fondés au XVe siècle</p>
            <p><strong>Colonisation :</strong> Colonisé par la France à la fin du XIXe siècle, partie de l'Afrique-Occidentale française</p>
            <p><strong>Indépendance :</strong> Indépendant le 5 août 1960, nommé Burkina Faso en 1984 sous Thomas Sankara</p>

            <h2>Politique</h2>
            <p><strong>Système :</strong> République semi-présidentielle, histoire politique mouvementée</p>
            <p><strong>Actuel Président :</strong> Capitaine Ibrahim Traoré</p>

            <h2>Économie</h2>
            <p><strong>Principaux Secteurs :</strong> Agriculture (coton, maïs, millet), ressources minérales (or, manganèse, phosphate, calcaires, nickel...)</p>
            <p><strong>Défis Économiques :</strong> Pauvreté, manque d'infrastructures, dépendance à l'agriculture</p>

            <h2>Culture</h2>
            <p><strong>Langues :</strong> Français (officiel), mooré, dioula, fulfuldé...</p>
            <p><strong>Art et Musique :</strong> Tradition culturelle riche, FESPACO, artisanat</p>
            <p><strong>Traditions :</strong> Importance des masques, danses, rites initiatiques</p>

            <h2>Tourisme</h2>
            <p><strong>Sites d'Intérêt :</strong> Parcs nationaux, pics de Sindou, ruines de Loropéni, Bobo-Dioulasso, Ouagadougou</p>
            <p><strong>Cultures et Traditions :</strong> Festivals culturels, hospitalité burkinabé</p>

            <h2>Défis Actuels</h2>
            <p><strong>Sécurité :</strong> Défis sécuritaires en raison de l'instabilité dans la région sahélienne</p>
            <p><strong>Développement :</strong> Amélioration des infrastructures, défis en éducation et soins de santé</p>

            <h2>Faits Divers</h2>
            <p><strong>Population :</strong> Environ 21 millions d'habitants, population jeune et en croissance rapide</p>
            <p><strong>Religion :</strong> Islam, christianisme, religions traditionnelles africaines</p>

        </section>

    </main>

    <footer>
        <div class="footer-col">
            <h4>Monbopays</h4>
            <ul>
                <li><a href="apropos.php">A Propos</a></li>
                <li><a href="tourCT.php#sitesT">Sites Touristiques</a></li>
                <li><a href="tourCT.css#cultra">Cultures & Traditions</a></li>
                <li><a href="affairesbf.php">Opportunités d'investissement</a></li>
            </ul>
        </div>
        <div class="footer-col">
            <h4>Suivez-nous</h4>
            <div class="social-links">
                <a href=" https://wa.me/message/TI43NJLLOFUSJ1"><i class="fab fa-whatsapp"></i></a>
                <a href="https://www.instagram.com/kevinsvdg?utm_source=qr&igsh=ZWtja2Jza2VwdXNo"><i class="fab fa-instagram"></i></a>
            </div>
            <p class="lien">Contact: <a href="tel:+22665337987">+226 65337987</a></p>
            <p class="lien">Email: <a href="mailto:savadogokevin6@gmail.com">savadogokevin6@gmail.com</a></p>
        </div>
        <p>&copy; 2024 Monbopays. Tous droits réservés.</p>
    </footer>

    <script src="/script.js"></script>
</body>

</html>