<?php

$connection = mysqli_connect("localhost", "vtsgirls", "0YCwZkm7CYIQ7Ur", "vtsgirls");

if(!$connection) {
    die('DATABASE CONNECTION FAILED:' .mysqli_error($connection));
    exit();
}
$db = "vtsgirls";
$dbs = mysqli_select_db($connection, $db);
if(!$dbs) {
    die('DATABASE SELECTION FAILED:' .mysqli_error($connection));
exit();
}
$name_surname = mysqli_real_escape_string($connection, $_GET['name_surname']);
$address = mysqli_real_escape_string($connection, $_GET['address']);
$phone_number = mysqli_real_escape_string($connection, $_GET['phone_number']);
$picked_pet = mysqli_real_escape_string($connection, $_GET['picked_pet']);
$pet_meaning = mysqli_real_escape_string($connection, $_GET['pet_meaning']);
$query = "INSERT INTO form(name_surname, address, phone_number, picked_pet, pet_meaning) VALUES ('$name_surname', '$address','$phone_number', '$picked_pet', '$pet_meaning')";
if(mysqli_query($connection, $query)){
    echo "Records added successfully";
}
else{
    echo "ERROR: Could not able to execute". $query." ". mysqli_error($connection);
}
mysqli_close($connection);
?>