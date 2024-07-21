<?php

include 'config.php';

error_reporting(0);
session_start();

// if (!isset($_SESSION['username'])) {
//     header("Location: index.php");
// }

if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $cpassword = md5($_POST['cpassword']);
    
    if($password ==$cpassword){
        $sql ="SELECT * FROM users WHERE email='$email'";
        $result = mysqli_query($conn, $sql);
        if(!$result->num_rows > 0){
            $sql = "INSERT INTO users(username, email, password) VALUES ('$username','$email', '$password')";
            $result =mysqli_query($conn, $sql);
            if($result){
                echo "<script> alert('YeayyY, Akun Anda Telah Dibuat') </script>";
                $username ="";
                $email ="";
                $_POST['password'] ="";
                $_POST['cpassword'] = "";
                header("Location: index.php");
            }else{
                echo "<script> alert('Maaf, yang anda masukan salah.') </script>";
            }
        }else{
            echo "<script> alert('Maaf, email anda sudah digunakan') </script>";
        }
        
    }else{
        echo "<script> alert('Password Not Matched.') </script>";
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>SIGNUP</title>
    <link rel="stylesheet" href="./css/styleLG.css">

</head>

<body>
    <div class="logo">
        <img src="" alt="">
    </div>
    <div class="container">
        <div class="forms">
            <div class="login">
                <span class="title">Registration</span>

                <form action="" method="POST">
                    <div class="input-field">
                        <input type="text" placeholder="username" name ="username" required value="<?php echo $username; ?>">
                    </div>
                    <div class="input-field">
                        <input type="email" placeholder="Alamat Email" name="email" value="<?php echo $email; ?>" required>
                    </div>

                    <div class="input-field">
                        <input type="password" placeholder="Kata Sandi" name="password" value="<?php echo $_POST['cpassword']; ?>" required>
                    </div>
                    <div class="input-field">
                        <input type="password" placeholder="Konfirmasi Kata Sandi" name="cpassword" value="<?php echo $_POST['cpassword']; ?>" required>
                    </div>
                    <div class="input-field button">
                        <button name="submit" class="button">Submit</button>
                    </div>
                </form>

                <div class="masuk-daftar">
                    <span class="text">
                      <p>Sudah punya <a href="index.php" class="text">akun</a></p>  
                    </span>
                </div>
            </div>
        </div>

    </div>
    
</body>
</html>