<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="apropos.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A Propos</title>
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

        <div class="banner">
            <img src="photobf/Ouagadougou-travel-65.jpg" alt="Banner Image">
            <h2>Bienvenue au cœur du Burkina Faso!</h2>
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

        <div class="welcome-message">
            <h2 id="his">L'histoire du burkina faso</h2>
            <p>Le Burkina Faso, situé en Afrique de l'Ouest, a une histoire riche et complexe marquée par des dynasties précoloniales, la colonisation française, et son évolution en tant que nation indépendante.</p>
        </div>

        <section class="pourouaga">
            <div class="conteneurouaga">
                <img src="/photobf/precolo.jpg" alt="">
            </div>
            <div class="contenup">
                <h4>Période Précoloniale</h4>
                <p>Le territoire actuel du Burkina Faso est riche d'une longue histoire précoloniale, marquée par l'émergence de plusieurs royaumes et empires puissants.
                    Les plus notables sont les royaumes Mossi, qui ont dominé la région pendant plusieurs siècles. Les Mossi, dont les origines remontent au 11e siècle,
                    ont fondé plusieurs royaumes, dont les plus importants étaient le royaume de Ouagadougou, de Yatenga, de Fada N'Gourma, et de Tenkodogo. Ces royaumes
                    étaient bien organisés et réputés pour leur résistance à l'expansionnisme islamique, notamment contre l'empire Songhaï et d'autres puissances sahéliennes.
                    Les royaumes Mossi étaient structurés autour de la chefferie, avec des rois appelés "Mogho Naba" à Ouagadougou. Ils ont maintenu leur indépendance et leurs traditions
                    malgré les pressions extérieures. Cependant, ces royaumes ne formaient pas un État unifié, mais plutôt une confédération lâche de royaumes souvent en conflit les uns avec les autres.
                </p>
            </div>
        </section>

        <section class="pourbobo">
            <div class="bobo">
                <img src="/photobf/colofran.jpg" alt="">
            </div>
            <div class="contenup">
                <h2>Colonisation Française</h2>
                <p>À la fin du 19ème siècle, la région tomba sous le contrôle de la France pendant l'expansion coloniale européenne. En 1896, Ouagadougou, la capitale du royaume Mossi, fut prise par les Français. Le territoire fut alors intégré à l'Afrique-Occidentale française (AOF) sous le nom de Haute-Volta en 1919. La Haute-Volta fut ensuite dissoute en 1932, ses territoires étant répartis entre les colonies voisines, mais fut rétablie en 1947 en tant que colonie distincte.</p>
            </div>
        </section>

        <section class="history">

            <h2>L'Indépendance et l'Ère de Maurice Yaméogo (1960-1966)</h2>
            <p>Le Burkina Faso accéda à l'indépendance le 5 août 1960, avec Maurice Yaméogo comme premier président. Yaméogo adopta une politique de parti unique et se rapprocha de la France pour obtenir un soutien économique et politique. Cependant, son régime fut rapidement critiqué pour sa corruption, son népotisme et sa répression des opposants politiques.
                La grogne sociale et la mauvaise gestion économique conduisirent à des grèves massives et à des manifestations en 1966. Face à la pression populaire, l'armée, sous la direction du lieutenant-colonel Sangoulé Lamizana, prit le pouvoir, mettant fin au régime de Yaméogo.
            </p>

            <h2>Les Années d'Instabilité et de Transition (1966-1983)</h2>
            <p>Sangoulé Lamizana dirigea le pays pendant 14 ans, d'abord en tant que chef militaire puis en tant que président civil après l'adoption d'une nouvelle constitution en 1970. Son régime tenta de gérer les défis économiques et sociaux hérités de la colonisation, mais il fut marqué par des tensions internes, des coups d'État manqués et une instabilité politique croissante.
                En 1980, Lamizana fut renversé par un coup d'État militaire dirigé par le colonel Saye Zerbo, qui établit un Conseil militaire pour le redressement national (CMRN). Cependant, Zerbo fut lui-même renversé en 1982 par le major Jean-Baptiste Ouédraogo, qui chercha à stabiliser le pays tout en réprimant les dissidents. C'est dans ce contexte que Thomas Sankara, un jeune officier charismatique, émergea comme une figure clé.
            </p>

            <h2>La Révolution de Thomas Sankara (1983-1987)</h2>
            <p>En août 1983, Thomas Sankara, alors Premier ministre, prit le pouvoir à la suite d'un coup d'État populaire soutenu par une grande partie de la population et de l'armée. Sankara, surnommé le "Che Guevara africain", lança une révolution radicale visant à transformer le Burkina Faso. Il rebaptisa le pays "Burkina Faso", signifiant "Pays des hommes intègres", et mit en place des réformes audacieuses dans les domaines de l'agriculture, de l'éducation, de la santé, et de l'émancipation des femmes.
                Sankara nationalisa les ressources naturelles, redistribua les terres aux paysans, lança des campagnes de reboisement pour lutter contre la désertification et promut l'autosuffisance alimentaire. Il réduisit les salaires des hauts fonctionnaires, abandonna les limousines officielles pour les voitures modestes, et interdit les excisions, les mariages forcés, et la polygamie.
                Cependant, ses politiques radicales, son refus de s'endetter auprès des institutions internationales, et son discours anti-impérialiste lui attirèrent de nombreux ennemis, tant à l'intérieur qu'à l'extérieur du pays. Le 15 octobre 1987, Thomas Sankara fut assassiné lors d'un coup d'État dirigé par son ancien camarade, Blaise Compaoré.
            </p>

            <h2>Le Long Règne de Blaise Compaoré (1987-2014)</h2>
            <p>Après la mort de Sankara, Blaise Compaoré prit le pouvoir et chercha à inverser certaines des réformes de Sankara, tout en conservant un contrôle strict sur le pouvoir. Sous Compaoré, le Burkina Faso adopta une politique plus modérée et ouverte, cherchant à attirer les investissements étrangers et à maintenir de bonnes relations avec les puissances occidentales.
                Compaoré réforma l'économie en suivant les directives du FMI et de la Banque mondiale, privatisant certaines entreprises d'État et ouvrant le pays aux marchés mondiaux. Cependant, son régime fut également marqué par des accusations de corruption, de népotisme, et de violations des droits de l'homme.
                En 2014, après 27 ans au pouvoir, Compaoré tenta de modifier la constitution pour prolonger son mandat, ce qui provoqua des manifestations massives à travers le pays. Face à une révolte populaire, il fut contraint de démissionner et de fuir en exil en Côte d'Ivoire.
            </p>

            <h2>Coup d'État de 2022 et transition militaire</h2>
            <p>Après la chute de Compaoré, une transition démocratique fut mise en place, dirigée par Michel Kafando, avec le soutien de l'armée et de la communauté internationale. En 2015, des élections libres furent organisées, et Roch Marc Christian Kaboré fut élu président.
                Réélu en 2020, Roch Marc Kaboré est renversé par l'armée, principalement en raison de l'instabilité sécuritaire dans le pays due aux attaques terroristes djihadistes. Le lieutenant-colonel Paul-Henri Sandaogo Damiba prend le pouvoir à la tête du Mouvement patriotique pour la sauvegarde et la restauration (MPSR).
                Malgré la prise de pouvoir de Damiba, les groupes terroristes liés à Al-Qaïda et à l'État islamique continuent leurs attaques meurtrières, surtout dans le nord et l'est du Burkina Faso. Les populations civiles et les forces de sécurité sont régulièrement visées.
                En 2022, la situation humanitaire s'aggrave, avec des milliers de déplacés internes fuyant les violences. La gestion sécuritaire de Damiba est critiquée, et l'insatisfaction grandit au sein de la population et des forces armées.
                Damiba fut donc renversé par le capitaine Ibrahim Traoré en moins d'un ans de pouvoir. Ce second coup d'État est justifié par l'inefficacité de Damiba à contrer les attaques djihadistes. Traoré devient le président de la transition, et promet à son tour de rétablir la sécurité.
            </p>

            <h2>Présidence de la transition d'Ibrahim Traoré</h2>
            <p>Ibrahim Traoré, âgé de seulement 34 ans, devient ainsi le plus jeune chef d'État au monde. Il met en place un gouvernement de transition avec pour objectif la lutte contre le terrorisme et la reconquête des territoires occupés par les groupes armés.
                Traoré adopte une posture plus ferme, tout en essayant de renforcer les partenariats régionaux et internationaux pour lutter contre le terrorisme. Il semble bénéficier d’un soutien populaire plus large, en partie grâce à une communication plus directe avec la population.
            </p>

            <h2>Situation actuelle (2024)</h2>
            <p>La situation sécuritaire reste préoccupante, bien que des initiatives locales aient été prises, notamment la mobilisation des Volontaires pour la Défense de la Patrie (VDP), des civils armés pour appuyer les forces armées burkinabè.
               Les violences djihadistes continuent de perturber de vastes régions du pays, causant des pertes humaines et des déplacements massifs de populations. En 2023, le Burkina Faso est l'un des pays les plus touchés par l'insécurité en Afrique de l'Ouest.
               Traoré est sous pression pour montrer des résultats concrets dans la lutte contre le terrorisme et la restauration de l'ordre.
            </p>

            <h2>Conclusion</h2>
            <p>L'histoire du Burkina Faso est riche et complexe, marquée par des périodes de grandeur, de résistance, de révolution et de transformation. De la fierté des royaumes Mossi à la révolution audacieuse de Thomas Sankara, en passant par les défis contemporains, le Burkina Faso est un pays résilient, en quête constante de progrès et de justice sociale.</p>

            <a href="infos.php#geo">PLUS D'INFOS</a>

        </section>

        <div class="map-container">
            <h1>
                Le Burkina Faso dans l'Afrique</h1>
            <img src="photobf/carte3bf.jpg " alt="Carte du Burkina Faso">
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