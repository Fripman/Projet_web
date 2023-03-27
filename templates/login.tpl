{include file="helpers/header.tpl"}
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
            <label class="remember-me">
                <input type="checkbox" name="remember-me">
                Se souvenir de moi
            </label>
            <button type="submit">
                Login
            </button>
        </form>
    </div>
</div>
{include file="helpers/footer.tpl"}