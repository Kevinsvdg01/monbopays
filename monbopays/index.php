<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Monbopays le Burkina Faso</title>
</head>

<body>
    <header>
        <nav>
            <div class="logo">
                <a href="index.php">Monbopays</a>
            </div>
            <ul id="menuList">
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

    <div class="banner">
        <div class="ban-left">
            <img src="/photobf/urb1.jpeg" alt="" />
        </div>
        <div class="ban-right">
            <img src="/photobf/urb2.jpg" alt="" />
        </div>
    </div>
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

        <section class="welcome-message">
            <h2>Bienvenue les amis</h2>
            <p>Bienvenue au Burkina Faso, terre de culture et d'hospitalité, où les traditions séculaires se mêlent harmonieusement à la beauté naturelle de ses paysages et à la chaleur de son peuple.</p>
            <a href="apropos.php#his" class="btn1">Histoire du Burkina Faso</a>
        </section>

        <section class="section__ban5">
            <div class="section__ban4-left">
                <img src="/photobf/mais2.jpg" alt="Champs de maïs" />
                <a href="infos.php"><span>Culture du maïs</span></a>
            </div>
            <div class="section__ban4-right">
                <img src="/photobf/coton2.jpeg" alt="Champs de coton" />
                <a href="infos.php#coton"><span>Culture du coton</span></a>
            </div>
            <a href="infos.php#meteaux" class="ormet">En savoir plus sur l'or et les métaux au Burkina</a>
        </section>

        <section class="shop-section">
            <h2 class="sitpop">Les sites populaires</h2>
            <div class="shop-images">
                <div class="shop-link" data-name="Domes de fabedougou" data-price="Ces formations rocheuses naturelles en forme de dômes, proches des Cascades de Banfora, sont le résultat de millions d'années d'érosion, offrant un paysage spectaculaire qui attire les amateurs de géologie et de paysages uniques." data-image="/photobf/domefabe1.jpg">
                    <h3>Domes de Fabédougou</h3>
                    <img src="/photobf/domefabe1.jpg" alt="domes de fabedougou">
                    <button class="add-to-cart" onclick="goToPresentationPage(this)">En savoir plus</button>
                </div>

                <div class="shop-link" data-name="Cascades de Banfora" data-price="Situées près de Banfora, ces cascades impressionnantes sont entourées de verdure luxuriante, offrant un lieu idéal pour la randonnée, la baignade, et la détente en pleine nature." data-image="/photobf/casbanf1.jpg">
                    <h3>Cascades de Banfora</h3>
                    <img src="/photobf/casbanf1.jpg" alt="Cascades de Banfora">
                    <button class="add-to-cart" onclick="goToPresentationPage(this)">En savoir plus</button>
                </div>
                <div class="shop-link" data-name="Cathédrale de Ouagadougou" data-price="La Cathédrale de l’Immaculée Conception de Ouagadougou, communément appelée la Grande Cathédrale, est l’une des plus grandes cathédrales d’Afrique de l’Ouest. Construite entre 1934 et 1936 par des missionnaires catholiques, elle reflète une architecture néo-roman, principalement en briques rouges, un matériau local. C’est un centre spirituel important pour les chrétiens de la région, mais aussi un point d’intérêt touristique pour ses dimensions impressionnantes et son histoire coloniale. La cathédrale se trouve au cœur de Ouagadougou et offre aux visiteurs une opportunité d'explorer l’histoire chrétienne du Burkina Faso tout en profitant d'une ambiance calme et spirituelle." data-image="/photobf/cath2.jpg">
                    <h3>Cathédrale de Ouagadougou</h3>
                    <img src="/photobf/cath2.jpg" alt="card">
                    <button class="add-to-cart" onclick="goToPresentationPage(this)">En savoir plus</button>
                </div>
                <div class="shop-link" data-name="Grande Mosquée de Bobo" data-price="La Grande Mosquée de Bobo-Dioulasso est l’un des monuments les plus emblématiques du Burkina Faso. Construite à la fin du XIXe siècle par les populations Dioula, elle incarne l’architecture soudano-sahélienne avec ses murs en banco (terre crue) et ses imposantes structures en bois. Son apparence distinctive est marquée par des tourelles hérissées de pieux en bois, qui servent aussi de support lors des travaux d’entretien. La mosquée est non seulement un lieu de culte actif, mais également une attraction touristique majeure. Les visiteurs y découvrent non seulement la richesse de son architecture, mais aussi l’histoire religieuse et culturelle de Bobo-Dioulasso, une ville réputée pour sa diversité ethnique et son ambiance chaleureuse." data-image="/photobf/mosqbobo1.jpg">
                    <h3>Grande Mosquée de Bobo</h3>
                    <img src="/photobf/mosqbobo1.jpg" alt="card">
                    <button class="add-to-cart" onclick="goToPresentationPage(this)">En savoir plus</button>
                </div>
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

        <section class="section2">
            <h2>Top 10 des villes les plus grandes du Faso</h2>
            <table>
                <thead>
                    <tr>
                        <th>N°</th>
                        <th>Ville</th>
                        <th>Population</th>
                        <th>Caractéristiques</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Ouagadougou</td>
                        <td>Population estimée à 2 868 034 habitants</td>
                        <td>Capitale du Burkina Faso et centre économique, politique et culturel du pays</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Bobo-Dioulasso</td>
                        <td>Population estimée à 806 939 habitants</td>
                        <td>Connue pour sa culture riche et ses musiques traditionnelles, notamment le balafon

                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Koudougou</td>
                        <td>Population estimée à 183 332 habitants</td>
                        <td>Ville universitaire importante avec de nombreux établissements d'enseignement supérieur</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Fada N'Gourma</td>
                        <td>Population estimée à 180 356 habitants</td>
                        <td>Située à l'est du pays, elle est réputée pour ses marchés colorés et sa culture gourmantché</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Ouahigouya</td>
                        <td>Population estimée à 169 893 habitants</td>
                        <td>Ville historique, considérée comme la capitale du Yatenga, un ancien royaume Mossi</td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>Tenkodogo</td>
                        <td>Population estimée à 165 961 habitants</td>
                        <td>Connue comme l'une des plus anciennes villes du Burkina Faso, avec une riche histoire liée au royaume Gourma</td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>Solenzo</td>
                        <td>Population estimée à 163 267 habitants</td>
                        <td>Située dans une région agricole, elle est un important centre de production de coton</td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td>Kaya</td>
                        <td>Population estimée à 162 377 habitants</td>
                        <td>Ville reconnue pour son artisanat, notamment le tissage traditionnel</td>
                    </tr>
                    <tr>
                        <td>9</td>
                        <td>Gorom-Gorom</td>
                        <td>Population estimée à 155 589 habitants</td>
                        <td>Située dans le Sahel, cette ville est un carrefour important pour les échanges commerciaux avec les pays voisins</td>
                    </tr>
                    <tr>
                        <td>10</td>
                        <td>Banfora</td>
                        <td>Population estimée à 153 574 habitants</td>
                        <td>Connue pour les Cascades de Karfiguéla, un site naturel très visité et apprécié pour sa beauté</td>
                    </tr>
                </tbody>
            </table>
        </section>


        <div class="map-container">
            <h1>Carte géographique du Burkina Faso</h1>
            <img src="photobf/cartebf.jpg " alt="Carte du Burkina Faso">
        </div>

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