<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Page introuvable</title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
  <?php
    include("header.php");
    ?>
    <main>
    <div class="error-container">
      <div class="error-message-container">
        <h1>Page introuvable</h1>
        <p>La page que vous recherchez est introuvable.</p>
        <a href="recherche.php" class="home-link">Retour à la page d'accueil</a>
      </div>
      <div class="error-image-container">
        <img src="assets/404-error.png" alt="Erreur 404">
      </div>
    </div>
</main>
    <?php
    include("footer.php");
    ?>
    
  </body>
</html>
