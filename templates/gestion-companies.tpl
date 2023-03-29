{include file="helpers/header.tpl"}
<form class="search" action="">
  <h2>Liste des entreprises</h2>
  <div class="search-container">
    <input type="text" class="searchInput" placeholder="Rechercher...">
    <button class="searchBtn"><img src="/assets/recherche.png" alt="recherche" class="recherche"></button>
  </div> 
</form>
<div class="creation_bdd">
  <button>Ajouter une entreprise</button>
</div>
{foreach  $Company as $company}
<ul class="profile_rang">
  <h1>Nom de l'entreprise: {$company->name}</h1>
  <ol>
    <ul class="display_content">
      <p>Secteur d'activité: {$company->activitySector}</p>
      <hr>
      <p> Visibilité par les etudiants:{$company->activitySector}</p>
      <hr>
      <p>Emails:{$company->contactEmail} </p>
      <hr>
      <p>Lieux:{$company->localisations} </p>
      <hr>
      <p>Évaluation du pilote: {$company->pilotEvaluation}</p>
      <hr>
      <p>Nombre d'étudiants CESI deja accepté en stage:{$company->acceptedInternNb}</p>
    </ul>
    <div class="button_add_container">
      <button class="button_page">Cacher</button>
      <button class="button_page">Modifier</button>
      <button class="button_page">Offres de l'entreprise</button>
      <button class="button_page">Notes des etudiant</button>
    </div>
  </ol>
</ul>
{/foreach}
{include file="helpers/footer.tpl"}