<link rel="stylesheet" type="text/css" href="css/new_post.css">
<?php
include "../../adoption/db_config.php";
$connect = databaseConnect();
if (isset($_GET['operation'])) {
if (isset($_GET['submit'])) {
$exceptions = array('submit','operation');
$value_array = [];
foreach ($_GET as $key => $value) {
if (!in_array($key, $exceptions)) {
    if($key != 'image') {
        $sql_array[] = "`{$key}` = '" . $value . "'";
    }
    if($key === 'image') {
        $sql_array[] = "`{$key}` = 'Images/" . $value . "'";
    }

array_push($value_array,$value);
}
}
}
$operation = $_GET['operation'];
switch (key($operation)) {
case 'add_new':
if (isset($_GET['submit'])) {
$sql = "INSERT INTO pets (id_breed, type, name, age, characteristics, story, image) VALUES (1,'$value_array[0]', '$value_array[1]', $value_array[2], '$value_array[3]', '$value_array[4]', 'Images/$value_array[5]')";

}
else {
$add_new = true;
}
break;
case 'update':
if (isset($_GET['submit'])) {
$sql = "UPDATE pets SET ";
$sql .= implode(', ', $sql_array);
$sql .= " WHERE id_pet = '". $operation['update'] ."'";
}
else {
$sql = "SELECT id_pet, type, name, age, characteristics, story, image FROM pets WHERE id_pet = " . $operation['update'];
if ($result = $connect -> query($sql)) {
$update = $result -> fetch_assoc();
}
}
break;
case 'delete':
$sql = "DELETE FROM pets WHERE id_pet = '". $operation['delete'] ."'";
break;
}
// Send sql to server
if (isset($_GET['submit']) || key($operation) == 'delete') {
if ($connect->query($sql) == true) {
echo "The process ended successfully";
}
}
}
// Get data from database
$sql = "SELECT id_pet , type, name, age, characteristics, story, image FROM pets";
if ($result = $connect -> query($sql)) {
while ($row = $result -> fetch_assoc()) {
$pets[] = $row;
}
}
?>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/header.css">
<title>Add new post</title>
</head>
<div class="topnav" id="myTopnav">
     <a href="new_post.php#new">Add new post</a>
     <a href="index.php">User details</a>
    <a href="../login/logout.php">Log out
    <?php
                    if(isset($_POST['logout'])){
                        session_destroy();
                        header('location:index.php');
                    }
                    ?>
                </a>
        </div>
<section class="block1">
    <form method="GET">
        <table class="table">
            <tr class="first">
                <td>id_pet</td>
                <td>type</td>
                <td>name</td>
                <td>age</td>
                <td>characteristics</td>
                <td>story</td>
                <td>image</td>
            </tr>
            <?php
            foreach ($pets as $key => $value) {
                echo '<tr class="dogs_cats">
                                    <td>' . $value['id_pet'] . '</td><br>
                                    <td>' . $value['type'] . '</td>
                                    <td>' . $value['name'] . '</td>
                                    <td>' . $value['age'] . '</td>
                                     <td>' . $value['characteristics'] . '</td>
                                         <td>' . $value['story'] . '</td>
                                     <td><img width="250px" height="auto" src ="' . $value['image'] . '"></td>
                                    <td><button id="update" href="new_post.php#update" class="admin__table-button" type="submit" name="operation[update]" value="' . $value['id_pet'] . '">Update</button></td>
                                    <td><button class="admin__table-button" type="submit" name="operation[delete]" value="' . $value['id_pet'] . '">Delete</button></td>
                                </tr>';
            }
            ?>
        </table>
        <br><br>
        <button id="new" class="new" type="submit" href="new_post.php#new" name="operation[add_new]" value="true">Add new</button>
        <br>
    </form>
</section>


<?php if (isset($update)) { ?>
    <section class="block2">
        <div class="page-wrapper">
            <h1>Change data</h1>
            <form class="update" method="GET">
                <input type="hidden" name="operation[<?php echo key($operation) ?>]" value="<?php echo $operation[key($operation)] ?>">
                <div class="update__item">
                    <br><br>
                    <input placeholder="Type" type="text" name="type" value="<?php if (isset($update)) {echo $update['type'];} ?>"></div>
                <div class="update__item"><input placeholder="Name" type="text" name="name" value="<?php if(isset($update)){echo $update['name'];} ?>"></div>
                <div class="update__item"><input placeholder="Age" type="text" name="age" value="<?php if(isset($update)){echo $update['age'];} ?>"></div>
                <div class="update__item"><input placeholder="Characteristics" type="text" name="characteristics" value="<?php if(isset($update)){echo $update['characteristics'];} ?>"></div>
                <div class="update__item"><input placeholder="Story" type="text" name="story" value="<?php if(isset($update)){echo $update['story'];} ?>"></div>
                <div class="update__item"><input placeholder="Image" type="file" name="image" value="<?php if(isset($update)){echo $update['image'];} ?>"></div>
                <button class="admin__table-new" type="submit" name="submit" value="true">Send</button>
            </form>
        </div>
    </section>
<?php } ?>
<br><br><br>
<?php if (isset($add_new)) { ?>
    <section class="block3">
        <div class="page-wrapper">
            <h1>Enter the data</h1>
            <form class="add_new" method="GET">
                <input type="hidden" name="operation[<?php echo key($operation) ?>]" value="<?php echo $operation[key($operation)] ?>">
                <div class="add_new_item">
                    <br><br>
                    <input placeholder="Type" type="text" name="type" value="<?php if (isset($add_new)) {echo $add_new['type'];} ?>"></div>
                <div class="add__item"><input placeholder="Name" type="text" name="name" value="<?php if(isset($add_new)){echo $add_new['name'];} ?>"></div>
                <div class="add__item"><input placeholder="Age" type="text" name="age" value="<?php if(isset($add_new)){echo $add_new['age'];} ?>"></div>
                <div class="add__item"><input placeholder="Characteristics" type="text" name="characteristics" value="<?php if(isset($add_new)){echo $add_new['characteristics'];} ?>"></div>
                <div class="add__item"><input placeholder="Story" type="text" name="story" value="<?php if(isset($add_new)){echo $add_new['story'];} ?>"></div>
                <div class="add__item"><input placeholder="Image" type="file" name="image" value="<?php if(isset($add_new)){echo $add_new['image'];} ?>"></div>
                <button class="admin__table-new" type="submit" name="submit" value="true">Send</button>
            </form>
        </div>
    </section>
<?php } ?>
<br><br><br>
<div class="main">
    <link rel="stylesheet" type="text/css" href="css/new_post.css">
<?php

require_once '../../adoption/db_config.php';
$result = mysqli_query($connect, "SELECT * FROM pets");


$operation = $_GET['operation'];
switch (key($operation)) {
    case 'update';
        if (isset($_GET['submit'])) {
            $sql = "UPDATE pets SET ";
            $sql .= implode(', ', $sql_array);
            $sql .= " WHERE id_pet = '" . $operation['update'] . "'";
        } else {
            $sql = "SELECT type, name, age, characteristics, story, image  FROM pets WHERE id_pet = " . $operation['update'];
            if ($result = $connect->query($sql)) {
                $update = $result->fetch_assoc();
            }
        }
        case 'add new';
            if (isset($_GET['submit'])) {
                $sql = "INSERT INTO pets (id_pet, type, name, age, characteristics, story, image) 
                            VALUES (" . implode(', ', $sql_array) . ")";
                //$sql .= " WHERE id_pet = '". $operation['add_new'] ."'";
            } else {
                $sql = "SELECT type, name, age, characteristics, story, image  FROM pets WHERE id_pet = " . $operation['add_new'];
                if ($result = $connect->query($sql)) {
                    $update = $result->fetch_assoc();
                }
            }
}
