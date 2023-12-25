<?php

if (isset($_POST['subBtn'])){
include('conn.php');

$name = $_POST['name'];
$phone = $_POST['phone'];
$height = $_POST['height'];
$length = $_POST['length'];

$sql = "UPDATE `customer_data`SET `name` = '{$name}', `phone` = '{$phone}', `height` = '{$height}', `length` = '{$length}' WHERE cid = '{$cus_id}'";
$result = mysqli_query($conn, $sql) or die ("Query not successful");

header('location: index.php');
mysqli_close($conn);

}
?>