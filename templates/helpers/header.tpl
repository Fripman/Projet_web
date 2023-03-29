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
    <nav>
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
          <a href="/" class="link-lg">Accueil</a>
        </div>
        <div class="link-group">
          <a href="/manga" class="link-lg">Mangas</a>
          <ul>
            <li><a href="#" class="link-sm">Fiches Manga</a></li>
            <li>
              <a href="#" class="link-sm">Personnages Manga</a>
            </li>
            <li>
              <a href="/advanced-search" class="link-sm">Recherche avancée</a>
            </li>
          </ul>
        </div>
        <div class="link-group">
          <a href="/anime" class="link-lg">Animes</a>
          <ul>
            <li><a href="#" class="link-sm">Fiches Anime</a></li>
            <li>
              <a href="#" class="link-sm">Planning des sorties d'épisodes</a>
            </li>
            <li>
              <a href="#" class="link-sm">Calendrier saisonnier</a>
            </li>
            <li>
              <a href="#" class="link-sm">Personnages d'Anime</a>
            </li>
            <li>
              <a href="#" class="link-sm">Génériques d'Anime</a>
            </li>
            <li>
              <a href="/advanced-search" class="link-sm">Recherche avancée</a>
            </li>
          </ul>
        </div>
        <div class="link-group">
          <a href="#" class="link-lg">Light novel</a>
          <ul>
            <li><a href="#" class="link-sm">Fiches Light novel</a></li>
            <li>
              <a href="/advanced-search" class="link-sm">Recherche avancée</a>
            </li>
          </ul>
        </div>
        <div class="link-group">
          <a href="#" class="link-lg">Dramas</a>
          <ul>
            <li><a href="#" class="link-sm">Fiches Drama</a></li>
            <li>
              <a href="#" class="link-sm">Calendrier saisonnier</a>
            </li>
          </ul>
        </div>
        <div class="link-group">
          <a href="#" class="link-lg">Musiques</a>
          <ul>
            <li>
              <a href="#" class="link-sm">Fiches OST</a>
            </li>
          </ul>
        </div>
        <div class="link-group">
          <a href="#" class="link-lg">Communauté</a>
          <ul>
            <li>
              <a href="#" class="link-sm">Planning sorties</a>
            </li>
            <li>
              <a href="/community/news" class="link-sm">Actualités</a>
            </li>
            <li>
              <a href="/advanced-search" class="link-sm">Recherche avancée</a>
            </li>
            <li>
              <a href="#" class="link-sm">Utilisateurs</a>
            </li>
            <li>
              <a href="#" class="link-sm">Forum</a>
            </li>
          </ul>
        </div>
        <div class="link-group">
          <a href="#" class="link-lg">Utilisateur</a>
          <ul>
            <li>
              <a href="/user/example" class="link-sm">Mon compte</a>
            </li>
            <li>
              <a href="#" class="link-sm">Paramètres</a>
            </li>
          </ul>
        </div>
        <a href="#" class="btn-signout btn-bg">Déconnexion</a>
      </nav>
{/if}
</header>
<main {if $pageType === "profile"} class="profile_rang" {/if}>