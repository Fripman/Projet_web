{include file="helpers/header.tpl"}
<div class="login">
    <div class="login-box">
        <h2>Login</h2>
        <form action="" method="post">
            <div class="user-box">
                <input id="username" type="text" name="username" required="">
                <label for="username">Username</label>
            </div>
            <div class="user-box">
                <input id="password" type="password" name="password" required="">
                <label for="password">Password</label>
            </div>
            <label for="rememberMe" class="remember-me">
                <input id="rememberMe" type="checkbox" name="rememberMe">
                Se souvenir de moi
            </label>
            <button type="submit">
                Login
            </button>
        </form>
    </div>
</div>
{include file="helpers/footer.tpl"}