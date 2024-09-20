<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="presentation.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Presentation</title>
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
        <div class="presentation-container">
            <img id="presentationImage" src="" alt="Image">
            <div class="presentation-details">
                <h1 id="presentationName"></h1>
                <p id="presentationPrice"></p>
                <p class="p2">Pour plus d'imformations, vous pouvez consultez le site officiel de<a href="https://www.ontb.bf/visites/sites-touristiques?page=1"> l'ONTB (Office National du Tourisme Burkinabe)</a></p>
            </div>
        </div>

        <script>
            document.getElementById("presentationName").textContent = localStorage.getItem("presentationName");
            document.getElementById("presentationPrice").textContent = localStorage.getItem("presentationPrice");
            document.getElementById("presentationImage").src = localStorage.getItem("presentationImage");
        </script>
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