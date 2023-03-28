{include file="helpers/header.tpl"}
<form class="search" action="">
  <h2>Liste des entreprises</h2>
  <div class="search-container">
    <input type="text" class="searchInput" placeholder="Rechercher...">
    <button class="searchBtn"><img src="/assets/recherche.png" alt="recherche" class="recherche"></button>
  </div> 
</form>
<div class="creation_entreprise">
  <button>Ajouter une entreprise</button>
</div>
<ul class="profile_rang">
  <h1>Nom de l'entreprise:</h1>
  <ol>
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
    <div class="button_add_container">
      <button class="button_page">Cacher</button>
      <button class="button_page">Modifier</button>
      <button>voir les offres proposées par l'entreprise</button>
      <button>voir les notes données par les etudiant</button>
    </div>
  </ol>
</ul>
{include file="helpers/footer.tpl"}