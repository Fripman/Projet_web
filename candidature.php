<!DOCTYPE html>
<html lang="fr">



<head>
  <title>Gestion des offres</title>
  <link rel="stylesheet" type="text/css" href="candidature.css">
</head>

<body>
  <?php
  include("header.php");
  ?>
  <h1 id="listes_des_offres">Mes candidatures</h1>
  <ul id="intitule_du_stage">
    <li>
      <h2>Intitulé du stage 1</h2>
      <div class="button-container">
        <button class="master-button">Supprimer</button>
        <button class="master-button">Postuler</button>
      </div>
    </li>
    <li>
      <h2>Intitulé du stage 2</h2>
      <div class="button-container">
        <button class="master-button">Supprimer</button>
        <button class="master-button">Postuler</button>
      </div>
    </li>
    <li>
      <h2>Intitulé du stage 3</h2>
      <div class="button-container">
        <button class="master-button">Supprimer</button>
        <button class="master-button">Postuler</button>
      </div>
    </li>
  </ul>
  <?php
include("footer.php");
?>
</body>



</html>