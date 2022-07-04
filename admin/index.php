<?php

session_start();
include("../login/functions.php");
if (!isset($_SESSION['username']) && isset($_SESSION['login'])) {
    header("Location: index.php");
}
else if (isset($_POST['logout'])){
    session_destroy();
    header('location:/adoption/index.php');
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Index</title>
</head>
<body>
<div class="main">
    <?php
    echo '
<h1 id="welcome"> Welcome '. $_SESSION['username'] .' </h1>
<script>
setTimeout(() => {
    document.getElementById("welcome").style.display = "none";
}, 2000)
</script>'
    ?>
<main class="main_role">
    <section class="jumbotron text-center">
        <div class="container">
            <?php
            $query = "select * from `requests`;";

            if(count(fetchAll($query))>0){
                foreach(fetchAll($query) as $row){
                    ?>

                    <h1 class="jumbotron-heading"><?php echo $row['email'] ?></h1>
                    <p class="lead text-muted"><?php echo $row['message'] ?></p>
                    <p>
                        <a href="./new_users/accept.php?id=<?php echo $row['id'] ?>" class="btn btn-primary my-2">Accept</a>
                        <a href="./new_users/reject.php?id=<?php echo $row['id'] ?>" class="btn btn-secondary my-2">Reject</a>
                    </p>
                    <small><i><?php echo $row['date'] ?></i></small>
                    <?php
                }
            }else{
                echo "No Pending Requests.";
            }
            ?>

        </div>
    </section>
</main>
</div>
<div class="sidenav">
    <h1><i class="fa fa-user-circle"></i></h1>
    <br><br>
    <hr>
    <a href="new_post.php">Add new post</a>
    <hr>
    <a href="index.php">User details</a>
    <hr>
    <a href="forms.php">Forms</a>
    <hr>
    <div class="logout">
        <?php
        if(isset($_POST['logout'])){
            session_destroy();
            header('location:/adoption/index.php');
        }
        ?>
        <form method="post">
            <button name="logout" class="btn btn-danger my-2" >Logout</button>
        </form>
    </div>
</div>

</body>
</html>