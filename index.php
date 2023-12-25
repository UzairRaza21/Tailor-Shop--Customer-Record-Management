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

<!-- Table Start -->
<?php
include ('conn.php');
$sql = "SELECT * FROM `customer_data`";
$result = mysqli_query($conn, $sql);
$row = mysqli_num_rows($result);
if($row > 0){
    ?>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Customer Name</th>
            <th scope="col">Phone</th>
            <th scope="col">Height</th>
            <th scope="col">Length</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    
    <tbody>
        <?php
        while($row = mysqli_fetch_assoc($result)){
            ?>
            <tr>
            <td><?php echo $row['cid']?></td>
            <td><?php echo $row['name']?></td>
            <td><?php echo $row['phone']?></td>
            <td><?php echo $row['height']?></td>
            <td><?php echo $row['length']?></td>
            <td><a href="edit.php?cid=<?php echo $row['cid'] ?>"><button>Edit</button></a></td>
            <td><a href="./delete.php?cid=<?php echo $row['cid']?>"><button>Delete</button></a></td>
        </tr>
        <?php
        }
    }else {
        echo "No Record Found";
        mysqli_close($conn);
    }
    ?>
        </tbody>
    </table>
<!-- Table End -->
    
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</html>