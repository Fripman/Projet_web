<link rel="stylesheet" href="header.css">

<header>
    <nav>
        <ul>
            <div class="nav_gauche">
                <img src="/assets/logo.png" alt="logo" class="logo">
                <li><a href="recherche.php">Recherche de stage</a></li>
                <li><a href="candidature.php">Mes candidatures</a></li>
            </div>
            <div class="nav_droite">
                <div class="search-container">
                    <input type="text" id="searchInput" placeholder="Rechercher...">
                    <button id="searchBtn"><img src="/assets/recherche.png" alt="recherche" class="recherche"></button>
                </div>
                <li>
                    <div id="profile">
                        <p>Username</p>
                        <svg width="32" height="32" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M7.41 8.59L12 13.17l4.59-4.58L18 10l-6 6l-6-6l1.41-1.41z" />
                        </svg>
                        <div id="dropdown-menu">
                            <a href="Gestion_des_offres.php">Gérer mes candidatures</a>
                            <a href="#">Mon compte</a>
                            <a href="#">Déconnexion</a>
                        </div>

                    </div>
                </li>
            </div>
        </ul>

    </nav>
    <script src="header.js"></script>
</header>