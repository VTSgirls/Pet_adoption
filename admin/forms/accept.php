<?php
include('functions.php');
$id = $_GET['id'];
$query = "select * from `form` where `id` = '$id'; ";
if(count(fetchAll($query)) > 0){
    foreach(fetchAll($query) as $row){
        $id = $row['id'];
        $name_surname = $row['name_surname'];
        $address = $row['address'];
        $phone_number = $row['phone_number'];
        $picked_pet = $row['picked_pet'];
        $pet_meaning = $row['pet_meaning'];
        $query = "INSERT INTO `accepted_form` (`id`, `name_surname`, `address`, `phone_number`, `picked_pet`, `pet_meaning`) VALUES (NULL, '$name_surname','$address', '$phone_number', '$picked_pet', '$pet_meaning');";
    }
    $query .= "DELETE FROM `form` WHERE `form`.`id` = '$id';";
    if(performQuery($query)){
        echo "Form has been accepted.";
    }else{
        echo "Unknown error occured. Please try again.";
    }
}else{
    echo "Error occured.";
}

?>
<br/><br/>
<a href="../forms.php">Back</a>