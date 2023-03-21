<link rel="stylesheet" href="header.css">

<header>
    <nav>
        <ul>
            <div class="nav_gauche">
                <img src="/assets/logo.png" alt="logo" class="logo">
                <li><a href="index.php">Accueil</a></li>
                <li><a href="candidature.php">Candidatures</a></li>
                <li class="sub_nav">
                    <a href="#">Gestion</a>
                    <ul>
                        <li><a href="gestion_compte.php">Compte</a></li>
                        <li><a href="gestion_entreprise.php">Entreprise</a></li>
                    </ul>
                </li>
                <li><a href="#">page 3</a></li>
            </div>
            <div class="nav_droite">
                <div class="search-container">
                    <input type="text" id="searchInput" placeholder="Rechercher...">
                    <button id="searchBtn">🔍</button>
                </div>
                <li>
                    <div id="profile">
                        <p>Username</p>
                        <svg width="32" height="32" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M7.41 8.59L12 13.17l4.59-4.58L18 10l-6 6l-6-6l1.41-1.41z" />
                        </svg>
                        <div id="dropdown-menu">
                            <a href="#">Mon profil</a>
                            <a href="#">Paramètres</a>
                            <a href="#">Déconnexion</a>
                        </div>

                    </div>
                </li>
            </div>
        </ul>

    </nav>
    <script src="header.js"></script>
</header>