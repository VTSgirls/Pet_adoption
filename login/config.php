<?php

$server = "localhost";
$user = "vtsgirls";
$pass = "0YCwZkm7CYIQ7Ur";
$database = "vtsgirls";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}

?>