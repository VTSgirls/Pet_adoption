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
$query = "SELECT * FROM form";
$res = mysqli_query($connection,"SELECT * FROM form");
$row = mysqli_fetch_array($res);
if(mysqli_query($connection, $query)){
    echo "Records added successfully";
}
else{
    echo "ERROR: Could not able to execute". $query." ". mysqli_error($connection);
}
mysqli_close($connection);
?>

<h2>Form Details</h2>

<table border="2">
  <tr>
    <td>Name and surname</td>
    <td>Address</td>
    <td>Phone number</td>
    <td>Picked pet</td>
    <td>Pet meaning</td>
  </tr>

<?php

while($data = mysqli_fetch_array($res))
{
?>
  <tr>
    <td><?php echo $data['name_surname']; ?></td>
    <td><?php echo $data['address']; ?></td>
    <td><?php echo $data['phone_number']; ?></td>
    <td><?php echo $data['picked_pet']; ?></td>
    <td><?php echo $data['pet_meaning']; ?></td>
  </tr>
<?php
}
?>
</table>