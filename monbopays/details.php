<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="details.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détails</title>
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






    <div class="titre">
        <h1 id="sector-title">Détails du Secteur</h1>
    </div>

    <section class="details">
        <div class="image-container">
            <img id="sector-image" src="" alt="Image du Secteur" />
        </div>
        <div class="content">
            <h2 id="sector-name"></h2>
            <ul id="sector-list">
                <!-- Les éléments de liste vont être injectés ici -->
            </ul>
            <p id="sector-description"></p>
            <p class="p2">Pour plus d'imformations, vous pouvez consultez le site officiel de <a href="https://www.investirauburkina.net/">investirauburkina.net</a></p>
        </div>
    </section>

    <script>
        // Dictionnaire des secteurs avec leurs détails
        const sectors = {
            "Agriculture": {
                title: "Agriculture et Agro-Industrie",
                image: "photobf/riz2.jpg",
                list: [
                    "Transformation agricole : coton, sésame, céréales.",
                    "Agriculture biologique : mangues, karité, miel.",
                    "Agro-industrie : jus de fruits, beurre de karité."
                ],
                description: "Le Burkina Faso est un pays agricole avec des cultures de coton, de sésame, de maïs, de mil, et d'arachide. Il existe des opportunités dans la transformation des produits agricoles (conservation, transformation du coton, huiles végétales, transformation des céréales). La demande pour des produits biologiques est en augmentation dans le monde, et le Burkina Faso a un potentiel pour l'agriculture bio (mangues, noix de cajou, karité, miel). L'investissement dans la transformation des produits locaux en produits finis (jus de fruits, farine de manioc, beurre de karité) peut répondre aux besoins locaux et à l'exportation."
            },
            "Energie": {
                title: "Énergie",
                image: "photobf/solarenergy.jpg",
                list: [
                    "Énergies renouvelables : solaire, éolien.",
                    "Mini-réseaux solaires pour les zones rurales."
                ],
                description: "Le Burkina Faso dépend beaucoup de l'énergie importée. Le solaire et l'éolien offrent des opportunités significatives pour les investisseurs dans les infrastructures de production d'énergie propre et durable. Les zones rurales ont un accès limité à l'électricité, ouvrant la voie à des mini-réseaux solaires ou des solutions d’énergie solaire décentralisée pour fournir de l’électricité aux communautés éloignées."
            },
            "Mines": {
                title: "Mines et Ressources Naturelles",
                image: "photobf/minebf.jpg",
                list: [
                    "Exploitation de l'or, zinc, manganèse.",
                    "Valorisation des déchets miniers."
                ],
                description: "Le Burkina Faso est l'un des plus grands producteurs d'or en Afrique. Les opportunités existent dans l'exploration minière, l'exploitation, la fourniture d'équipements miniers et les services annexes comme le transport, la sécurité et l'ingénierie. En plus de l'or, il y a du potentiel dans l'exploitation de manganèse, de zinc, de cuivre, de fer et de phosphates. Les opportunités d’investir dans le recyclage et la valorisation des sous-produits miniers se multiplient, notamment en ce qui concerne la gestion des résidus miniers."
            },
            "Industrie": {
                title: "Industrie Manufacturière",
                image: "photobf/coton1.jpg",
                list: [
                    "Textile : filature, tissage, confection.",
                    "Transformation des matières premières : bois, cuir, karité."
                ],
                description: "Avec la production de coton, il y a des opportunités dans le développement d'industries locales de filature, de tissage et de confection. Le Burkina Faso exporte principalement des produits bruts. Investir dans la transformation locale (bois, cuir, karité) peut répondre à la demande nationale et régionale."
            },
            "Construction": {
                title: "Construction et Infrastructures",
                image: "photobf/infrastructurebf.jpg",
                list: [
                    "Infrastructures de transport : routes, ponts.",
                    "Immobilier : logements, bureaux, centres commerciaux.",
                    "Matériaux de construction."
                ],
                description: "Le pays a besoin de routes, de ponts, de chemins de fer et d'infrastructures pour soutenir la croissance économique. Les partenariats public-privé (PPP) dans la construction d'infrastructures publiques sont encouragés. Avec une urbanisation croissante, le secteur immobilier est en plein essor, avec des opportunités dans la construction de logements abordables, de bureaux et d’infrastructures commerciales. Il y a un besoin de développement d'industries locales pour la production de matériaux de construction (ciment, briques, carreaux)."
            },
            "TIC": {
                title: "Technologies de l'Information et de la Communication (TIC)",
                image: "photobf/techbf.jpg",
                list: [
                    "Services numériques : applications mobiles, fintech.",
                    "Infrastructures télécoms et Internet.",
                    "Formation et cybersécurité."
                ],
                description: "Le secteur numérique est en pleine croissance, avec des opportunités dans le développement d'applications mobiles, le commerce électronique, la fintech (paiements mobiles, transfert d’argent) et les services en ligne.  Améliorer l'accès à l'Internet, en particulier dans les zones rurales, présente une opportunité pour les entreprises de télécoms et d’infrastructure Internet. Avec la montée du numérique, la cybersécurité devient essentielle. Il y a des opportunités dans les services de sécurité informatique et la formation aux métiers numériques."
            },
            "Tourisme": {
                title: "Tourisme et Hôtellerie",
                image: "photobf/rural1.jpg",
                list: [
                    "Développement d'infrastructures touristiques.",
                    "Tourisme culturel : festivals, manifestations artistiques."
                ],
                description: "Le Burkina Faso possède des parcs naturels, des sites historiques et culturels comme les Ruines de Loropéni ou les festivals de cinéma (FESPACO). Les investisseurs peuvent développer des infrastructures touristiques (hôtels, lodges, agences de voyage). Le pays dispose d’un patrimoine culturel riche avec ses traditions, ses festivals et ses manifestations artistiques. Investir dans le tourisme culturel et événementiel présente des perspectives intéressantes."
            },
            "Sante": {
                title: "Santé et Éducation",
                image: "photobf/educationbf.jpg",
                list: [
                    "Cliniques privées, télémédecine.",
                    "Centres de formation professionnelle"
                ],
                description: "Avec une population en croissance et des besoins de soins de santé non satisfaits, le secteur de la santé offre des opportunités dans la construction de cliniques, hôpitaux privés, ou dans le développement de la télémédecine. Le développement des compétences locales est une priorité. Les investisseurs peuvent créer des centres de formation technique ou professionnelle dans des domaines comme la technologie, la santé, et l’ingénierie."
            },
            "Logistique": {
                title: "Logistique et Transport",
                image: "photobf/transplog.jpg",
                list: [
                    "Transport de marchandises et services logistiques.",
                    "Solutions de mobilité urbaine."
                ],
                description: "Le Burkina Faso étant enclavé, il existe des opportunités dans le transport de marchandises, la logistique et les services connexes pour relier les ports de pays voisins (Côte d’Ivoire, Ghana, Togo).        Avec la croissance des grandes villes comme Ouagadougou, des investissements dans des solutions de transport urbain (bus, taxis, transports durables) peuvent s'avérer lucratifs."
            },
            "Finance": {
                title: "Industrie Financière et Services",
                image: "photobf/assubanq.jpg",
                list: [
                    "Microfinance et bancarisation.",
                    "Assurance : santé, agriculture, micro-assurance."
                ],
                description: "Avec une grande partie de la population non bancarisée, il y a un potentiel dans les services de microfinance pour soutenir les petites entreprises et les entrepreneurs.  Le secteur des assurances est en plein développement, notamment en matière de santé, d'agriculture, et de micro-assurance. "
            },
            // Ajoutez d'autres secteurs ici...
        };

        // Fonction pour récupérer les paramètres de l'URL
        function getURLParameter(name) {
            return new URLSearchParams(window.location.search).get(name);
        }

        // Récupération du secteur depuis l'URL
        const sector = getURLParameter('sector');

        // Vérification si le secteur existe dans notre dictionnaire
        if (sectors[sector]) {
            const sectorData = sectors[sector];
            document.getElementById('sector-title').textContent = `Détails du Secteur: ${sectorData.title}`;
            document.getElementById('sector-name').textContent = sectorData.title;
            document.getElementById('sector-image').src = sectorData.image;
            document.getElementById('sector-image').alt = `Image de ${sectorData.title}`;

            // Remplir la liste des opportunités
            const ul = document.getElementById('sector-list');
            sectorData.list.forEach(item => {
                const li = document.createElement('li');
                li.textContent = item;
                ul.appendChild(li);
            });

            // Ajouter la description
            document.getElementById('sector-description').textContent = sectorData.description;
        } else {
            document.getElementById('sector-title').textContent = "Secteur non trouvé";
            document.getElementById('sector-name').textContent = "Secteur non trouvé";
            document.getElementById('sector-description').textContent = "Le secteur sélectionné n'existe pas ou il y a eu une erreur.";
        }
    </script>






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