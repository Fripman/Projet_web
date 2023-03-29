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

{if $pageType === "login"}
<header class="loginPage">
    <img src="../public/img/logo.png" alt="logo" class="logo">
{else}
<header>
    <nav class="default">
        <ul>
            <div class="nav_gauche">
                <img src="../public/img/logo.png" alt="logo" class="logo">
                <li><a href="/">Recherche de stage</a></li>
                {if $user->permissions === "student"}
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
                <form id="headerSearchbar" class="search-container" action="/" method="get">
                    <input name="search" type="text" class="searchInput" placeholder="Rechercher..." required>
                    <button id="headerSearchbarBtn" class="searchBtn"><img src="../public/img/recherche.png" alt="recherche" class="recherche"></button>
                </form>
                <li>
                    <div id="profile">
                        <p>{$user->username}</p>
                        <svg width="32" height="32" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M7.41 8.59L12 13.17l4.59-4.58L18 10l-6 6l-6-6l1.41-1.41z" />
                        </svg>
                        <div id="dropdown-menu">
                            {if $user->permissions === "student"}
                                <a href="/my-applies">Gérer mes candidatures</a>
                            {/if}
                            <a href="/profile/me">Mon compte</a>
                            <a href="/api/v1/logout">Déconnexion</a>
                        </div>
                    </div>
                </li>
            </div>
        </ul>
    </nav>
    <nav class="navbar">
        <a href="#" class="button-menu" id="button-menu">Menu</a>
        <div class="link-group">
          <a href="/" class="link-lg">Recherche de stage</a>
        </div>
        {if $user->permissions === "student"}
            <div class="link-group">
                <a href="/my-applies" class="link-lg">Mes candidatures</a>
            </div>
        {else}
        <div class="link-group">
          <a href="#" class="link-lg">Gestion</a>
          <ul>
            <li><a href="/gestion-accounts" class="link-sm">Comptes</a></li>
            <li>
              <a href="/gestion-offers" class="link-sm">Offres</a>
            </li>
            <li>
              <a href="/gestion-companies" class="link-sm">Entreprises</a>
            </li>
            <li>
              <a href="/gestion-applies" class="link-sm">Candidatures des étudiants</a>
            </li>
          </ul>
        </div>
        {/if}
        <div class="link-group">
                <a href="/profile/me" class="link-lg">Mon compte</a>
            </div>
        <a href="/api/v1/logout" class="btn-signout btn-bg">Déconnexion</a>
      </nav>
{/if}
</header>
<main {if $pageType === "profile"} class="profile_rang" {/if}>