<!DOCTYPE html>
<html lang="fr">



<head>
  <title>Gestion des offres</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
<?php
    include("header.php");
    ?>
  <main>
    <form class="search" action=""> 
  <h1>Liste des entreprises</h1>
  <div class="search-container">
    <input type="text" class="searchInput" placeholder="Rechercher...">
    <button class="searchBtn"><img src="/assets/recherche.png" alt="recherche" class="recherche"></button>
</div></form>
  
 
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
      <div class="button-container">
        <button>Cacher</button>
        <button>Postuler</button>
        <button>voir les offres proposées par l'entreprise</button>
        <button>voir les notes données par les etudiant</button>
      </div>
    </ol>

  </ul>
  </main>
  <?php
  include("footer.php");
  ?>
</body>
</html>
