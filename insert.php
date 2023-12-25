<?php

if (isset($_POST['subBtn'])){

    include('conn.php');
    
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $height = $_POST['height'];
    $length = $_POST['length'];

$sql = "INSERT INTO `customer_data`(`name`, `phone`, `height`, `length`) VALUES ('{$name}','{$phone}','{$height}','{$length}')";
$result = mysqli_query($conn, $sql) or die ("Query not successful");

mysqli_close($conn);
header('location: index.php');
}
?>