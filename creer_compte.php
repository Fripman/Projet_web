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
        <div class="rad">
          <label>
            <input type="radio" name="role" value="tuteur">
            Tuteur
          </label>
          <label>
            <input type="radio" name="role" value="etudiant">
            Etudiant
          </label>
        </div>

        <div class="sel">
        <p>Choisissez un campus:</p>
        <select id="campus" name="campus">
          <option value="campus-1">Caen</option>
          <option value="campus-2">Rouen</option>
        </select>
        </div>

        <div class="sel">
        <p>Choisissez un tuteur:</p>
        <select id="tuteur" name="tuteur">
          <option value="tuteur-1">M</option>
          <option value="tuteur-2">R</option>
        </select>
        </div>

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