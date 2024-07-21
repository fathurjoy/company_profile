<?php 

include 'config.php';

session_start();

error_reporting(0);

// if (isset($_SESSION['username'])) {
//     header("Location: dashboard.php");
// }

if (isset($_POST['submit'])) {
	$email = $_POST['email'];
	$password = md5($_POST['password']);

    $sql2 = "SELECT * FROM users WHERE email='$email' AND password='$password' AND level='admin' ";
	$result = mysqli_query($conn, $sql2);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['username'];
		header("Location: admin.php");
	} else if($data['level']==""){
        
        // buat session login dan username
        $_SESSION['username'] = $username;
        $_SESSION['level'] = "";
        // alihkan ke halaman dashboard pegawai
        header("location:dashboard.php");
    }
    else {
		echo "<script>alert('Waduhh! salah bro..')</script>";
	}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>LOGIN</title>
    <link rel="stylesheet" href="./css/styleLG.css">
    

</head>

<body>
    <div class="logo">
        <img src="" alt="">
    </div>
    <div class="container">
        <div class="forms">
            <div class="login">
                <span class="title">Login</span>

                <form action="" method="POST">
                    
                    <div class="input-field">
                        <input type="email" placeholder="Alamat Email" name="email" value="<?php echo $email; ?>" required>
                    </div>

                    <div class="input-field">
                        <input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
                    </div>
                    <div class="input-field button">
                        <button name="submit" class="button">Login </button>
                    </div>
                </form>

                <div class="masuk-daftar">
                    <span class="text">Belum punya akun, 
                        <a href="SIGNUP.php" class="text">Daftar sekarang</a>
                    </span>
                </div>
            </div>
        </div>

    </div>
    
</body>
</html>