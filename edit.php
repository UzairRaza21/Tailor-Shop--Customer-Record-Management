<?php
include("conn.php");
$cus_id = $_GET['cid'];
$sql = "SELECT * FROM `customer_data` WHERE cid ={$cus_id}";
$result = mysqli_query($conn, $sql) or die ("Falied to fetch customer record");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <title>Tailor Shop - Customer Data</title>
</head>
<body>

<!-- Nav start -->
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="./index.php">Tailor Shop- Customer Data</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="./index.php">Home</a>
        <a class="nav-link" href="./addcustomer.php">Add Customer</a>
      </div>
    </div>
  </div>
</nav>
<!-- Nav End -->

<?php
$row = mysqli_num_rows($result);
if($row > 0){
   while($customer = mysqli_fetch_assoc($result)){

        ?>

<!-- Form Start -->
<form method="post" action="editeddata.php">
    <label for="">
        Customer Name: 
        <input type="text" name="name" id="name" value="<?php echo $customer['name'] ?>">
    </label><br><br>
    <label for="">
        Phone: 
        <input type="text" name="phone" id="phone" value="<?php echo $customer['phone'] ?>">
    </label><br><br>
    <label for="">
        Height: 
        <input type="text" name="height" id="height" value="<?php echo $customer['height'] ?>">
    </label><br><br>
    <label for="">
        Length: 
        <input type="text" name="length" id="length" value="<?php echo $customer['length'] ?>">
    </label><br><br>
    
    <input type="submit" value="Update Customer" name="subBtn" id="subBtn">
    
</form>
<?php
}
}
else {
    echo "Failed to update customer record";
}
?>
<!-- Form End -->


</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</html>