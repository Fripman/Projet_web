<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{$title}</title>
    <link rel="stylesheet" href="../public/css/style.css">
    <link rel="icon" href="../public/img/logo.png">
    <link rel="manifest" href="../public/manifest.json">
</head>

{if $pageType eq "login"}
<header class="loginPage">
    <img src="../public/img/logo.png" alt="logo" class="logo">
{else}
<header>
    <nav>
        <ul>
            <div class="nav_gauche">
                <img src="../public/img/logo.png" alt="logo" class="logo">
                <li><a href="/">Recherche de stage</a></li>
                {if $user->permissions eq "student"}
                    <li><a href="/my-applies">Mes candidatures</a></li>
                {else}
                    <li><a href="#">Gestion</a>
                        <ul>
                            <li><a href="/gestion-accounts">Comptes</a></li>
                            <li><a href="/gestion-offers">Offres</a></li>
                            <li><a href="/gestion-companies">Entreprises</a></li>
                            <li><a href="/gestion-applies">Candidatures des étudiants</a></li>
                        </ul>
                    </li>
                {/if}
                
            </div>
            <div class="nav_droite">
                <form id="headerSearchbar" class="search-container" action="/" method="post">
                    <input name="name" type="text" class="searchInput" placeholder="Rechercher..." required>
                    <button id="headerSearchbarBtn" class="searchBtn"><img src="../public/img/recherche.png" alt="recherche" class="recherche"></button>
                </form>
                <li>
                    <div id="profile">
                        <p>{$user->username}</p>
                        <svg width="32" height="32" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M7.41 8.59L12 13.17l4.59-4.58L18 10l-6 6l-6-6l1.41-1.41z" />
                        </svg>
                        <div id="dropdown-menu">
                            {if $user->permissions eq "student"}
                                <a href="/my-applies">Gérer mes candidatures</a>
                            {/if}
                            <a href="/profile?id=">Mon compte</a>
                            <a href="/api/v1/logout">Déconnexion</a>
                        </div>

                    </div>
                </li>
            </div>
        </ul>

    </nav>
    <script src="../public/js/header.js"></script>
{/if}
</header>
<main {if $pageType eq "profile"} class="profile_rang" {/if}>