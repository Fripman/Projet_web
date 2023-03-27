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
    <h1 id="listes_des_offres">Mes candidatures</h1>
    <ul class="display_content">
      <li>
        <h2>Intitulé du stage 1</h2>
        <div class="button-container">
          <button>Supprimer</button>
          <button>Voir plus</button>
        </div>
      </li>
      <li>
        <h2>Intitulé du stage 2</h2>
        <div class="button-container">
          <button>Supprimer</button>
          <button>Voir plus</button>
        </div>
      </li>
      <li>
        <h2>Intitulé du stage 3</h2>
        <div class="button-container">
          <button>Supprimer</button>
          <button>Voir plus</button>
        </div>
      </li>
    </ul>
  </main>
  <?php
  include("footer.php");
  ?>
</body>



</html>