<?php
  include ("config.php");
  session_start();
  error_reporting(0);
  session_start();

// if (!isset($_SESSION['username'])) {
//     header("Location: index.php");
// }


  $sql2 = "select * from orders";
  $q2   = mysqli_query($conn,$sql2);
  while ($r2 = mysqli_fetch_array($q2)){
      $id            =     $r2    ['id'];
      $nama          =     $r2   ['name'];
      $perusahaan    =     $r2   ['perusahaan'];
      $email         =     $r2   ['email'];
      $desc          =     $r2   ['deskripsi'];
      ?>
      <?php

  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
          <a class="navbar-brand" href="#"><img src="img/LOGO2 1.png" alt="samshan" style="width: 50px;"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ms-auto">
              <a class="nav-link active" aria-current="page" href="logout.php">LogOut</a>
            </div>
          </div>
        </div>
      </nav>
    <!-- Akhir dari Aavbar -->

    <div class="container">
        <div class="container">
            <div class="row text-center pt-5">
                <div class="coloumn">
                    <h2>Data Order</h2>
                </div>
            </div>
            <table class="table table-dark table-striped">
    <thead>
    <tr>
      <th scope="col"></th>
      <th scope="col">Nama</th>
      <th scope="col">Nama Perusahaan</th>
      <th scope="col">email</th>
      <th scope="col">Deskripsi</th>
    </tr>
  </thead>
        <tbody>
            <tr>
            <th scope="row">1</th>
            <td><?php echo $nama ?></td>
            <td><?php echo $perusahaan ?></td>
            <td><?php echo $email ?></td>
            <td><?php echo $desc ?></td>
            </tr>
        </tbody>
            </table>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>