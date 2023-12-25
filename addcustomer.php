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
    

<!-- Form Start -->
<form action="insert.php" method="post">
    <label for="">
        Customer Name: 
        <input type="text" name="name" id="name">
    </label><br><br>
    <label for="">
        Phone: 
        <input type="text" name="phone" id="phone">
    </label><br><br>
    <label for="">
        Height: 
        <input type="text" name="height" id="height">
    </label><br><br>
    <label for="">
        Length: 
        <input type="text" name="length" id="length">
    </label><br><br>
   
    <input type="submit" value="Add Customer" name="subBtn" id="subBtn">

</form>
<!-- Form End -->
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</html>