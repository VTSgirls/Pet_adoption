<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="login.css">
    <title>Register</title>
</head>
<body>


<div class="container-login">
    <form action="web.php" method="post" class="login-email" enctype="multipart/form-data">
        <p class="login-text" style="font-size: 2rem; font-weight: 800;">Register</p>
        <div class="input-group">
            <input type="text" id="registerFirstname" placeholder="First Name" name="firstname" required>
        </div>
        <div class="input-group">
            <input type="text" id="registerLastname" placeholder="Last Name" name="lastname" required>
        </div>
        <div class="input-group">
            <input type="email" id="registerEmail" placeholder="Email" name="email" required>
        </div>
        <div class="input-group">
            <input type="password" placeholder="Password" name="password" required>
        </div>
        <div class="input-group">
            <input type="Confirmpassword" placeholder="Confirm password" name="password" required>
        </div>
        <br>


        <div class="input-group">
            <input type="hidden" name="action" value="register">
            <button type="submit" class="btn">Register</button>
        </div>
        <p class="login-register-text">Have an account? <a href="login.php" style="text-decoration:underline">Login Here</a>.</p>
</div>

</form>

</body>
</html>
