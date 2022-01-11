<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="login.css">
    <title>Login/Sign up</title>
</head>
<body>

</body>
</html>
<div class="container-login">
    <form action="web.php" method="POST" class="login-email">
        <p class="login-text" style="font-size: 2rem; font-weight: 800;">Login</p>
        <br>
        <div class="input-group">
            <input type="email" id="loginUsername" placeholder="Email" name="username" required>
        </div>
        <div class="input-group">
            <input type="password" id="loginPassword" placeholder="Password" name="password" required>
        </div>
        <div class="input-group">
            <input type="hidden" name="action" value="login">
            <button type="submit" class="btn">Login</button>
        </div>
    </form>
    <br>
    <a href="#" id="fl" class="forgot" style="color: black;">Forgot password?</a>
    <form action="web.php" method="post" name="forget" id="forget" class="login-email" style="display:none; margin-top:5px;">
        <div class="input-group" style="margin:5px;">
            <input type="email" id="forgetEmail" placeholder="Email"
                   name="email">
        </div>
        <div class="input-group" style="margin:5px;">
            <input type="hidden" name="action" value="forget">
            <button type="submit" class="btn" style="transform: none;">Send</button>
        </div>
    </form>

    <br><br>
    <p class="login-register-text">Don't have an account? <a href="register.php" style="text-decoration:underline">Register Here</a>.</p>

