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
  <h1>Liste des offres</h1>
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
          <button>supprimer</button>
          <button>postuler</button>
          
      </ol>
    </ul>
  </main>
  <?php
  include("footer.php");
  ?>
</body>
</html>