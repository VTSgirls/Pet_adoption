<?php
include('functions.php');
$id = $_GET['id'];
$query = "select * from `requests` where `id` = '$id'; ";
if(count(fetchAll($query)) > 0){
    foreach(fetchAll($query) as $row){
        $id = $row['id'];
        $username = $row['username'];
        $email = $row['email'];
        $password = md5($row['password']);
        $query = "INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES (NULL, '$username','$email', '$password');";
    }
    $query .= "DELETE FROM `requests` WHERE `requests`.`id` = '$id';";
    if(performQuery($query)){
        echo "Account has been accepted.";
    }else{
        echo "Unknown error occured. Please try again.";
    }
}else{
    echo "Error occured.";
}

?>
<br/><br/>
<a href="../index.php">Back</a>