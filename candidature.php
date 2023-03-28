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
    <h2>Mes candidatures</h2>
    <ul class="profile_rang">
      <ol>
        <ul class="display_content">
          <p>Nom de stage: </p>
          <hr>
          <p> Nom l'entreprise:</p>
          <hr>
          <p>Lieux Statut: </p>
          <hr>
          <p>Lieux: </p>
        </ul>
        <div class="button-container">
          <button>Noter l'entreprise</button>
      </ol>

    </ul>
    
    <h2 id="Wishlist">Wishlist</h2>
    <ul class="profile_rang">
      <ol>
        <ul class="display_content">
          <p>Nom de stage: </p>
          <hr>
          <p> Nom l'entreprise:</p>
          <hr>
          <p>Lieux Statut: </p>
          <hr>
          <p>Lieux: </p>
        </ul>
        <div class="button-container">
          <button>Etat</button>
          <button>postuler</button>
      </ol>
    </ul>
  </main>
  <?php
  include("footer.php");
  ?>
</body>



</html>