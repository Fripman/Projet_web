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
            <h2>creer un compte</h2>
            <form action="#" method="post" >
        <div class="user-box">
          <input type="text" placeholder="name" name="name" required value="">
        </div>
        <div class="user-box">
          <input type="text" placeholder="surname" name="surname" required value="">
        </div>
        <div class="user-box">
          
          <input type="email" placeholder="My e-mail is" name="email" required value="">
        </div>
        <div class="user-box">
          <input type="password" placeholder="password" name="password" required value="">
        </div>
        <div class="">
          <select placeholder="year" name="year" required value="">
            <option disabled hidden selected>year</option>
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
          </select>
        </div>
        <div class="">
          <select placeholder="type" name="type" required value="">
            <option disabled hidden selected>type</option>
            <option>Général</option>
            <option>BTP</option>
            <option>Info</option>
            <option>S3E</option>
          </select>
        </div>
        <a href="#">
                    creer
                </a>
      </form>
        </div>
    </div>
    <?php
    include("footer.php");
    ?>
</body>


</html>