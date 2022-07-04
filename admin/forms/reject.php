<?php
include('functions.php');
$id = $_GET['id'];

$query = "DELETE FROM `form` WHERE `form`.`id` = '$id';";
if(performQuery($query)){
    echo "Form has been rejected.";
}else{
    echo "Unknown error occured. Please try again.";
}

?>
<br/><br/>
<a href="../forms.php">Back</a>