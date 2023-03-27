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
    <ul class="display_content">
      <li>
        <h3>Intitulé du stage 1</h3>
        <div class="button-container">
          <button>Voir plus</button>
        </div>
      </li>
      <li>
        <h3>Intitulé du stage 2</h3>
        <div class="button-container">
          <button>Voir plus</button>
        </div>
      </li>
      <li>
        <h3>Intitulé du stage 3</h3>
        <div class="button-container">
          <button>Voir plus</button>
        </div>
      </li>
    </ul>

    <h2 id="Wishlist">Wishlist</h2>
        <ul class="display_content">
            <li>
                <h3>Intitulé du stage 1</h3>
                <div class="button-container">
                    <button>Etat</button>
        
                    <button>Postuler</button>
                </div>
            </li>
            <li>
                <h3>Intitulé du stage 2</h3>
                <div class="button-container">
                    <button>Etat</button>
        
                    <button>Postuler</button>
                </div>
            </li>
            <li>
                <h3>Intitulé du stage 3</h3>
                <div class="button-container">
                    <button>Etat</button>
        
                    <button>Postuler</button>
                </div>
            </li>
        </ul>
  </main>
  <?php
  include("footer.php");
  ?>
</body>



</html>