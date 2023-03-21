<!DOCTYPE html>
<html lang="fr">



<head>
  <title>Gestion des offres</title>
  <link rel="stylesheet" type="text/css" href="Gestion_des_offres.css">
</head>

<body>
  <?php
  include("header.php");
  ?>
  <div id="search-container">
    <input id="search-input" type="text" placeholder="Rechercher...">
    <button id="search-button" type="submit">Rechercher</button>
  </div>
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
  <?php
include("footer.php");
?>
</body>



</html>