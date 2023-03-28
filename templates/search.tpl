{include file="helpers/header.tpl"}
<form class="search" action="/" method="post">
    <div class="search-container">
        <input type="text" class="searchInput" placeholder="Rechercher...">
        <button class="searchBtn"><img src="../public/img/recherche.png" alt="recherche" class="recherche"></button>
    </div>
    <section class="filters">
        <div>
            <label for="category">Catégorie :</label>
            <select id="category">
                <option value="">Toutes</option>
                <option value="offres">Offres de stage</option>
                <option value="entreprise">Entreprises</option>
            </select>
        </div>
    </section>
</form>

<h2 class="page-title" id="Offres">Résultats :</h1>
<ul class="profile_rang">

    <ol>
        <h2>Intitulé du stage 1</h2>
        <ul class="display_content">
            <p>Durée:</p>
            <hr>
            <p>Date de création:</p>
            <hr>
            <p>Nombre de places restantes:</p>
            <hr>
            <p>Base de rémunération:</p>
            <hr>
            <p>Localisation:</p>
            <hr>
            <p>Promo(s) concernée(s):</p>
            <hr>
            <p>entreprise:</p>
            <hr>
            <p>Compétances attendues:</p>
            <hr>
        </ul>
        <div class="button-container">
            <button>Etat</button>
            <button>Ajouter</button>
            <button>postuler</button>
        </div>
    </ol>
    </ul>
    <ul class="profile_rang">
        <ol>
        <h2>Nom de l'entreprise:</h2>
        <ul class="display_content">
            <p>Secteur d'activité: </p>
            <hr>
            <p> Visibilité par les etudiants:</p>
            <hr>
            <p>Emails: </p>
            <hr>
            <p>Lieux: </p>
            <hr>
            <p>Évaluation du pilote: </p>
            <hr>
            <p>Nombre d'étudiants CESI deja accepté en stage:</p>
        </ul>
        <div class="button-container">
            <button>Etat</button>
            <button>Ajouter</button>
            <button>postuler</button>
        </div>
    </ol>
  </ul>
{include file="helpers/footer.tpl"}