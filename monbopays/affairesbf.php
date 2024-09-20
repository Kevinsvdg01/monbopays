<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="affairesbf.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Opportunités d'investissement</title>
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
        <h1>Opportunités d'Affaires au Burkina Faso</h1>
        <p>Découvrez les secteurs porteurs pour investir dans ce pays d'Afrique de l'Ouest.</p>
    </div>

    <section class="opportunities">
        <div class="sector">
            <h2 data-sector="Agriculture">Agriculture et Agro-Industrie</h2>
            <ul>
                <li>Transformation agricole : coton, sésame, céréales.</li>
                <li>Agriculture biologique : mangues, karité, miel.</li>
                <li>Agro-industrie : jus de fruits, beurre de karité.</li>
            </ul>
        </div>

        <div class="sector">
            <h2 data-sector="Energie">Énergie</h2>
            <ul>
                <li>Énergies renouvelables : solaire, éolien.</li>
                <li>Mini-réseaux solaires pour les zones rurales.</li>
            </ul>
        </div>

        <div class="sector">
            <h2 data-sector="Mines">Mines et Ressources Naturelles</h2>
            <ul>
                <li>Exploitation de l'or, zinc, manganèse.</li>
                <li>Valorisation des déchets miniers.</li>
            </ul>
        </div>

        <div class="sector">
            <h2 data-sector="Industrie">Industrie Manufacturière</h2>
            <ul>
                <li>Textile : filature, tissage, confection.</li>
                <li>Transformation des matières premières : bois, cuir, karité.</li>
            </ul>
        </div>

        <div class="sector">
            <h2 data-sector="Construction">Construction et Infrastructures</h2>
            <ul>
                <li>Infrastructures de transport : routes, ponts.</li>
                <li>Immobilier : logements, bureaux, centres commerciaux.</li>
                <li>Matériaux de construction.</li>
            </ul>
        </div>

        <div class="sector">
            <h2 data-sector="TIC">Technologies de l'Information et de la Communication (TIC)</h2>
            <ul>
                <li>Services numériques : applications mobiles, fintech.</li>
                <li>Infrastructures télécoms et Internet.</li>
                <li>Formation et cybersécurité.</li>
            </ul>
        </div>

        <div class="sector">
            <h2 data-sector="Tourisme">Tourisme et Hôtellerie</h2>
            <ul>
                <li>Développement d'infrastructures touristiques.</li>
                <li>Tourisme culturel : festivals, manifestations artistiques.</li>
            </ul>
        </div>

        <div class="sector">
            <h2 data-sector="Sante">Santé et Éducation</h2>
            <ul>
                <li>Cliniques privées, télémédecine.</li>
                <li>Centres de formation professionnelle.</li>
            </ul>
        </div>

        <div class="sector">
            <h2 data-sector="Finance">Industrie Financière et Services</h2>
            <ul>
                <li>Microfinance et bancarisation.</li>
                <li>Assurance : santé, agriculture, micro-assurance.</li>
            </ul>
        </div>

        <div class="sector">
            <h2 data-sector="Logistique">Logistique et Transport</h2>
            <ul>
                <li>Transport de marchandises et services logistiques.</li>
                <li>Solutions de mobilité urbaine.</li>
            </ul>
        </div>
    </section>

    <script>
        document.querySelectorAll('.sector h2').forEach(function (h2) {
            h2.addEventListener('click', function () {
                const sector = h2.getAttribute('data-sector');
                // Redirection vers une autre page avec les informations du secteur
                window.location.href = `details.php?sector=${sector}`;
            });
        });
    </script>



    <footer>
        <div class="footer-col">
            <h4>Monbopays</h4>
            <ul>
                <li><a href="apropos.php">A Propos</a></li>
                <li><a href="tourCT.php#sitesT">Sites Touristiques</a></li>
                <li><a href="tourCT.css#cultra">Cultures & Traditions</a></li>
                <li><a href="#">Opportunités d'investissement</a></li>
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