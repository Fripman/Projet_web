<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Modifier_profil</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
  </head>
  
  <body>
    <?php
    include("header.php");
    ?>
  <div class="login">
    <div class="login-box">
      <h2>Modifer_profil</h2>
      <form>
        <div class="user-box">
          <input type="text" name="name" required="" >
          <label>name</label>
        </div>
        <div class="user-box">
          <input type="text" name="surname"   required="">
          <label>surname</label>
        </div>
        <div class="user-box">
          <input type="text" name="username"    required="">
          <label>username</label>
        </div>
        <div class="user-box">
          <input type="text" name="promos" required="">
          <label>Promotion(s) CESI</label>
        </div>
       
        <button type="submit">
          valider
      </button>
      </form>
    </div>
  </div>
  <?php include("footer.php"); ?>
</body>
</html>
