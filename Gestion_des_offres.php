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
      <div class="search-container">
        <input type="text" class="searchInput" placeholder="Rechercher...">
        <button class="searchBtn"><img src="/assets/recherche.png" alt="recherche" class="recherche"></button>
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
    <h1 id="listes_des_offres">Gestion des offres</h1>
    <ul id="intitule_du_stage">
      <li>
        <h2>Intitulé du stage 1</h2>
        <div class="button-container">
          <button class="master-button">Modifier</button>
          <button class="master-button">Supprimer</button>
        </div>
      </li>
      <li>
        <h2>Intitulé du stage 2</h2>
        <div class="button-container">
          <button class="master-button">Modifier</button>
          <button class="master-button">Supprimer</button>
        </div>
      </li>
      <li>
        <h2>Intitulé du stage 3</h2>
        <div class="button-container">
          <button class="master-button">Modifier</button>
          <button class="master-button">Supprimer</button>
        </div>
      </li>
    </ul>
  </main>
  <?php
  include("footer.php");
  ?>
</body>



</html>