<?php
echo $cus_id = $_GET['cid'];
include('conn.php');
$sql = "DELETE FROM `customer_data` WHERE cid = '{$cus_id}'";
$result = mysqli_query($conn, $sql) or die ("Query Unsuccessful");
header("location: index.php");
mysqli_close($conn);
?>