<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="tourCT.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tourisme-Cultures-Traditions</title>
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
        <div class="banner"></div>

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

        <section class="popular-products">
            <h2 id="sitesT">Quelques Sites Touristiques</h2>
            <div class="product-grid">
                <div class="product-card" data-name="Domes de Fabédougou" data-price="Ces formations rocheuses naturelles en forme de dômes, proches des Cascades de Banfora, sont le résultat de millions d'années d'érosion, offrant un paysage spectaculaire qui attire les amateurs de géologie et de paysages uniques." data-image="/photobf/domefabe1.jpg">
                    <img src="/photobf/domefabe1.jpg" alt="domes de Fabédougou">
                    <h3>Domes de Fabédougou</h3>
                    <p><i class="fas fa-map-marker-alt"></i> Ouest</p>
                    <button class="add-to-cart" onclick="goToPresentationPage(this)">En savoir plus</button>
                </div>
                <div class="product-card" data-name="Sculpture sur granite de Laongo" data-price="Ce site à ciel ouvert présente des œuvres d'art sculptées directement sur des roches granitiques par des artistes internationaux et locaux, offrant un mélange fascinant d'art contemporain et de patrimoine naturel." data-image="/photobf/sculpturegra.jpg">
                    <img src="/photobf/sculpturegra.jpg" alt="Sculpture sur granite de Laongo">
                    <h3>Sculpture sur granite de Laongo</h3>
                    <p><i class="fas fa-map-marker-alt"></i> Centre</p>
                    <button class="add-to-cart" onclick="goToPresentationPage(this)">En savoir plus</button>
                </div>
                <div class="product-card" data-name="Ruines de l'orépeni" data-price="Ce site classé au patrimoine mondial de l'UNESCO est constitué d'anciennes fortifications en pierre, témoignant d'un passé de commerce transsaharien et d'une histoire précoloniale liée à l'or. C'est l'un des plus anciens vestiges du pays." data-image="/photobf/ruineloropeni.jpg">
                    <img src="/photobf/ruineloropeni.jpg" alt="ruines de l'orépeni">
                    <h3>Ruines de l'orépeni</h3>
                    <p><i class="fas fa-map-marker-alt"></i> Ouest</p>
                    <button class="add-to-cart" onclick="goToPresentationPage(this)">En savoir plus</button>
                </div>
                <div class="product-card" data-name="Mare aux crocodiles sacrés de Bazoulé" data-price="Ce site abrite des crocodiles considérés comme sacrés par la population locale. Les visiteurs peuvent approcher les crocodiles de très près, car ils sont apprivoisés, et écouter les récits légendaires sur leur signification culturelle." data-image="/photobf/marecrocobasoule.jpg">
                    <img src="/photobf/marecrocobasoule.jpg" alt="mare aux crocodiles sacrés de Bazoulé">
                    <h3>Mare aux crocodiles sacrés de Bazoulé</h3>
                    <p><i class="fas fa-map-marker-alt"></i> Centre</p>
                    <button class="add-to-cart" onclick="goToPresentationPage(this)">En savoir plus</button>
                </div>
                <div class="product-card" data-name="Habitats Cassina de tiébélé" data-price="Le village de Tiébélé est célèbre pour ses maisons traditionnelles décorées de motifs géométriques et symboliques. Ce style architectural unique reflète l'identité culturelle du peuple Kasséna." data-image="/photobf/tiebele.jpg">
                    <img src="/photobf/tiebele.jpg" alt="Habitats Cassina de tiébélé">
                    <h3>Habitats Cassina de tiébélé</h3>
                    <p><i class="fas fa-map-marker-alt"></i> Centre</p>
                    <button class="add-to-cart" onclick="goToPresentationPage(this)">En savoir plus</button>
                </div>
                <div class="product-card" data-name="Cascades de Banfora" data-price="Situées près de Banfora, ces cascades impressionnantes sont entourées de verdure luxuriante, offrant un lieu idéal pour la randonnée, la baignade, et la détente en pleine nature." data-image="/photobf/casbanf1.jpg">
                    <img src="/photobf/casbanf1.jpg" alt="Cascades de Banfora">
                    <h3>Cascades de Banfora</h3>
                    <p><i class="fas fa-map-marker-alt"></i> Ouest</p>
                    <button class="add-to-cart" onclick="goToPresentationPage(this)">En savoir plus</button>
                </div>
                <div class="product-card" data-name="Pics de Sindou" data-price="Ces formations rocheuses en aiguilles créent un paysage presque surnaturel. Situées dans la région de l'ouest du pays, les Pics de Sindou sont appréciées pour leurs possibilités de randonnée et de découverte de la faune et la flore locales." data-image="/photobf/picsindou.jpg">
                    <img src="/photobf/picsindou.jpg" alt="Pics de Sindou">
                    <h3>Pics de Sindou</h3>
                    <p><i class="fas fa-map-marker-alt"></i> Ouest</p>
                    <button class="add-to-cart" onclick="goToPresentationPage(this)">En savoir plus</button>
                </div>
                <div class="product-card" data-name="Village de Niansoghni" data-price="Ce village historique, niché dans les montagnes, est célèbre pour ses grottes habitées autrefois par les ancêtres de la population actuelle. Le site offre une vue imprenable sur les environs et une plongée dans l'histoire locale." data-image="/photobf/niasoghoni.jpg">
                    <img src="/photobf/niasoghoni.jpg" alt="Village de Niansoghni">
                    <h3>Village de Niansoghni</h3>
                    <p><i class="fas fa-map-marker-alt"></i> Ouest</p>
                    <button class="add-to-cart" onclick="goToPresentationPage(this)">En savoir plus</button>
                </div>
                <!-- Ajoutez les autres cartes de la même manière -->
            </div>
        </section>

        <script>
            function goToPresentationPage(button) {
                const card = button.parentElement;
                const name = card.getAttribute("data-name");
                const price = card.getAttribute("data-price");
                const image = card.getAttribute("data-image");

                // Sauvegarde des données dans localStorage
                localStorage.setItem("presentationName", name);
                localStorage.setItem("presentationPrice", price);
                localStorage.setItem("presentationImage", image);

                // Redirection vers la page présentation
                window.location.href = "presentation.php";
            }
        </script>


        <section class="welcome-message">
            <h2 id="cultra">Cultures & Traditions du Burkina Faso</h2>
            <p>Le Burkina Faso est un pays d'Afrique de l'Ouest riche en cultures et traditions, qui se manifestent à travers ses nombreuses ethnies, pratiques religieuses, artisanat, musique, danse, et festivals. Voici un aperçu de quelques aspects clés des cultures et traditions burkinabé :</p>
        </section>

        <section>
            <div class="container">
                <h2>Diversité Ethnique et Langues</h2>
                <div class="section">
                    <img src="/photobf/languethni.jpg" alt="Diversité Ethnique">
                    <p>Le Burkina Faso est composé de plus de 60 groupes ethniques, chacun avec ses propres traditions et langues. Les Mossi, qui représentent environ 40% de la population, sont le groupe ethnique majoritaire. D'autres groupes importants incluent les Gourmantché, les Bobo, les Sénoufo, les Lobi, les Peulhs, et les Samo. Le mooré est la langue la plus parlée, suivie du dioula, du fulfuldé, et de nombreuses autres langues locales. Le français est la langue officielle.</p>
                </div>

                <h2>Pratiques Religieuses</h2>
                <div class="section">
                    <img src="/photobf/religion.jpg" alt="Pratiques Religieuses">
                    <p>Le Burkina Faso est un pays de diversité religieuse, où l'islam et le christianisme coexistent avec les religions traditionnelles africaines. Les croyances animistes, qui incluent la vénération des esprits et des ancêtres, jouent encore un rôle important dans la vie quotidienne de nombreux Burkinabé. Les mosquées et les églises sont présentes dans tout le pays, mais les rites traditionnels, tels que les cérémonies de masques et les sacrifices rituels, restent très influents.</p>
                </div>

                <h2>Artisanat</h2>
                <div class="section">
                    <img src="/photobf/artisanat.jpg" alt="Artisanat Burkinabé">
                    <p>Le Burkina Faso est réputé pour son artisanat, notamment la sculpture sur bois, la poterie, la fabrication de masques, et le tissage de pagnes traditionnels comme le Faso Dan Fani. Les artisans burkinabé créent des objets utilitaires et décoratifs, souvent ornés de motifs géométriques et de symboles culturels. Le marché artisanal de Ouagadougou est un lieu emblématique où l'on peut découvrir cette richesse créative.</p>
                </div>

                <h2>Musique et Danse</h2>
                <div class="section">
                    <img src="/photobf/danceart.jpg" alt="Musique et Danse">
                    <p>La musique et la danse sont des éléments centraux de la culture burkinabé. Les rythmes des tambours, balafons, et koras accompagnent les danses traditionnelles lors des cérémonies, des mariages, et des fêtes religieuses. Le Burkina Faso est également le berceau de musiciens renommés comme Victor Démé et le groupe Farafina. Le Festival International de Musique de Ouagadougou (FIMO) et le SIAO (Salon International de l'Artisanat de Ouagadougou) célèbrent cette richesse musicale et artistique.</p>
                </div>

                <h2>Festivals et Cérémonies</h2>
                <div class="section">
                    <img src="/photobf/festivalcer.jpg" alt="Festivals et Cérémonies">
                    <p>Le Burkina Faso accueille de nombreux festivals et cérémonies, dont le célèbre Festival Panafricain du Cinéma et de la Télévision de Ouagadougou (FESPACO), l'un des plus grands festivals de cinéma en Afrique. Le SIAO (Salon International de l'Artisanat de Ouagadougou) est un événement majeur qui met en avant l’artisanat africain. Les fêtes des masques, particulièrement dans les régions des Bwa et des Lobi, sont des moments où musique, danse et tradition se mêlent pour honorer les ancêtres et les esprits.</p>
                </div>

                <h2>Cuisine</h2>
                <div class="section">
                    <img src="/photobf/cuisine.png" alt="Cuisine Burkinabé">
                    <p>La cuisine burkinabé est simple mais savoureuse, souvent basée sur des céréales comme le mil, le sorgho, et le maïs. Les plats typiques incluent le tô, une bouillie de céréales accompagnée de sauces à base de feuilles, de gombo, ou de poisson. Le riz est également très consommé, souvent accompagné de sauces à base de légumes et de viande. Le dolo, une bière de mil, est une boisson traditionnelle populaire dans les zones rurales.</p>
                </div>

                <h2>Mode de Vie Rural et Traditionnel</h2>
                <div class="section">
                    <img src="/photobf/rural2.jpg" alt="Mode de Vie Rural">
                    <p>La majorité de la population vit dans des zones rurales, où l'agriculture est la principale activité. Les techniques agricoles sont souvent traditionnelles, et la vie communautaire joue un rôle central. Les mariages et les naissances sont marqués par des cérémonies élaborées, où les familles se réunissent pour célébrer et honorer les coutumes ancestrales.</p>
                </div>

                <h2>Architecture Traditionnelle</h2>
                <div class="section">
                    <img src="/photobf/architradi.jpg" alt="Architecture Traditionnelle">
                    <p>L'architecture traditionnelle varie selon les régions. Les maisons en banco (terre crue) avec des toits en chaume ou en tôle sont courantes dans les zones rurales. Les greniers et les cases rondes sont également des éléments typiques. À Bobo-Dioulasso, la Grande Mosquée, construite en terre battue, est un exemple remarquable de l'architecture soudanaise. On peut citer par ailleurs la Grande Mosquée de Bani dans la région du Sahel. </p>
                </div>
            </div>
        </section>

    </main>






    <footer>
        <div class="footer-col">
            <h4>Monbopays</h4>
            <ul>
                <li><a href="apropos.php">A Propos</a></li>
                <li><a href="tourCT.php#sitesT">Sites Touristiques</a></li>
                <li><a href="tourCT.php#cultra">Cultures & Traditions</a></li>
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