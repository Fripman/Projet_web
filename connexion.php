<!DOCTYPE html>
<html lang="fr">



<head>
    <meta charset="UTF-8">
    <title>Header simple</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    include("header.php");
    ?>
    <div class="login">
        <div class="login-box">
            <h2>Login</h2>
            <form action="index.php" method="$_POST">
                <div class="user-box">
                    <input type="text" name="username" required="">
                    <label>Username</label>
                </div>
                <div class="user-box">
                    <input type="password" name="password" required="">
                    <label>Password</label>
                </div>
                <button type="submit">
                    Login
                </button>
                    
                
            </form>
        </div>
    </div>
    <?php
    include("footer.php");
    ?>
</body>


</html>