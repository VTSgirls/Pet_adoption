<?php

include 'config.php';

session_start();

error_reporting(0);

if (isset($_SESSION['username'])) {
    header("Location: ../index.php");
}

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) == 1) { // user found
        // check if user is admin or user
        $row = mysqli_fetch_assoc($result);
        if ($row['email'] == 'admin@gmail.com') {
            $_SESSION['username'] = $row['username'];
            header('location: ../admin/index.php');
        } else {
            $_SESSION['username'] = $row;
            header('location: /adoption/index.php');
        }
    }else {
        echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
    }
}

?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="style.css">

    <title>Login</title>
</head>
<body>

<div class="container">
    <form action="" method="POST" class="login-email">
        <p class="login-text" style="font-size: 2rem; font-weight: 800;">Login</p>
        <div class="role">
        </div>
        <div class="input-group">
            <input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
        </div>
        <div class="input-group">
            <input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
        </div>
        <div class="input-group">
            <button name="submit" class="btn">Login</button>
        </div>
        <br>

        <p class="login-register-text">Don't have an account? <a href="register.php">Register Here</a>.</p>
        <div style="text-align: center">
            <a href="forgotpassword/index.php" id="fl" style="color: black;">Forgot password?</a>
        </div>
    <div style="text-align: center">
        <a href="../index.php" style="color: black">Back</a>
    </div>
    </form>

</div>
</body>
</html>