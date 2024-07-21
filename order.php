<?php 
include 'config.php';

session_start();
error_reporting(0);
session_start();

// if (!isset($_SESSION['username'])) {
//     header("Location: index.php");
// }

if (isset($_POST['submit'])){//edit contact
  $nama          =   $_POST['nama'];
  $perusahaan   =  $_POST['perusahaan'];
  $email       =  $_POST['email'];
  $desc        =   $_POST['desc'];
  if($nama && $perusahaan && $email && $desc ){
          //$sql1   = "insert into abot(about) values ('$about')";
          $sql1 = "insert into  orders (name,perusahaan,email,deskripsi) values ('$nama','$perusahaan','$email','$desc')";
           $q1   = mysqli_query($conn,$sql1);
           if ($q1){
          $sukses = "Berhasil ";
          }else{
          $error = "error";
          }
      }  
  }


?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
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
              <a class="nav-link active" aria-current="page" href="dashboard.php">Home</a>
            </div>
          </div>
        </div>
      </nav>
    <!-- Akhir dari Aavbar -->
    
    <div class="container">
        <div class="container">
            <div class="row text-center pt-5">
                <div class="coloumn">
                    <h2>Order In Here</h2>
                </div>
            </div>
            <form action="" class=" pb-5" method="POST">
                <div class="mb-3">
                    <label for="exampleFormControlInput1"  class="form-label">Nama </label>
                    <input type="text" class="form-control shadow" id="exampleFormControlInput1" placeholder="PT Jaya Abadi" name = "nama">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1"  class="form-label ">Nama Perusahaan</label>
                    <input type="text" class="form-control shadow" id="exampleFormControlInput1" placeholder="Condong Catur" name= "perusahaan">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label ">Email address</label>
                    <input type="email" class="form-control shadow" id="exampleFormControlInput1" placeholder="name@example.com" name = "email" >
                </div>
                <div class="mb-5">
                    <label for="exampleFormControlTextarea1"  class="form-label">Deskripsi Order</label>
                    <textarea type="text" class="form-control shadow" id="exampleFormControlTextarea1" rows="3" name="desc"></textarea>
                </div>
                <div class="text-center">
                    <button type="submit" name="submit" class="btn btn-primary btn-lg" >SUBMIT</button>
                </div>
            </form>
        </div>
    </div>

    <footer class="text-center" style="margin-top: 70px;">
        <p>Copyright     2022 | PT.Samshan Tech</p>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>