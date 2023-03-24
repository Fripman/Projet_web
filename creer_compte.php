<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <title>creer compte </title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <?php
  include("header.php");
  ?>
  <div class="login">
    <div class="login-box">
      <h2>Creer un compte</h2>
      <form>
        <div class="user-box">
          <input type="text" name="" required="">
          <label>Prenom</label>
        </div>
        <div class="user-box">
          <input type="password" name="" required="">
          <label>Nom</label>
        </div>
        <div class="user-box">
          <input type="text" name="" required="">
          <label>Nom d'utilisateur</label>
        </div>
        <div class="user-box">
          <input type="text" name="" required="">
          <label>Password</label>
        </div>
        <div class="user-box">
          <input type="text" name="" required="">
          <label>Confirmer Password</label>
        </div>
        <label for="fruits">Choisissez un fruit :</label>
        <select id="fruits" name="fruits">
          <option value="student">Etudiant</option>
          <option value="pilot">Pilote</option>
          <option value="admin">Administrateur</option>
        </select>

        <a href="#">
          Créer
        </a>
      </form>
    </div>
  </div>
  <?php
  include("footer.php");
  ?>
</body>


</html>