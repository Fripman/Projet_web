<!DOCTYPE html>
<html lang="fr">

<?php
include("header.php");
?>

<head>
    <title>Gestion des offres</title>
    <link rel="stylesheet" type="text/css" href="Gestion_des_offres.css">
  </head>
  <body>
    <h1>Gestion des offres</h1>
    
    <div class="search-container">
      <input type="text" placeholder="Rechercher...">
      <button type="submit">Rechercher</button>
    </div>
    
    <ul class="offer-list">
      <li>
        <h2>Intitulé du stage 1</h2>
        <div class="button-container">
          <button class="edit-button">Modifier</button>
          <button class="delete-button">Supprimer</button>
        </div>
      </li>
      <li>
        <h2>Intitulé du stage 2</h2>
        <div class="button-container">
          <button class="edit-button">Modifier</button>
          <button class="delete-button">Supprimer</button>
        </div>
      </li>
      <li>
        <h2>Intitulé du stage 3</h2>
        <div class="button-container">
          <button class="edit-button">Modifier</button>
          <button class="delete-button">Supprimer</button>
        </div>
      </li>
    </ul>
    
  </body>

<?php
    include("footer.php");
?>

</html>