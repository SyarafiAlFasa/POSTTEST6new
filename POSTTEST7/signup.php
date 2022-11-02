<?php

use LDAP\Result;

require 'koneksi.php';

if (isset($_POST['register'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $phone_number = $_POST['phone_number'];
    $password = $_POST['password'];    
    $cpassword = $_POST['cpassword'];
    
    if ($password === $cpassword) {
        $password = password_hash($password, PASSWORD_DEFAULT);         
        $result = mysqli_query($conn, "SELECT username from user WHERE username ='$username'");

        if (mysqli_fetch_assoc($result)){
            echo "
            <script>
                alert('Username telah digunakan. Silahkan gunakan username yang lain!');
                document.location.href = 'signup.html';
            </script>
            ";
        }else{
            $sql = "INSERT INTO user VALUES ('','$username', '$email', '$phone_number', '$password')";
            $result = mysqli_query($conn, $sql);
            echo "
                <script>
                    alert('Registrasi Berhasil!');                    
                </script>";
            header("Location: signin.php");


            if (mysqli_affected_rows($conn) > 0) {
                echo "
                <script>
                    alert('Registrasi Gagal!');
                    document.location.href = 'signup.php;
                </script>";
            }
        }
    } else {
        echo "<script>
            alert('Konfirmasi Password And Tidak Sesuai!');
            document.location.href = 'signup.php';
        </script>";
    }    
}
?>

<!DOCTYPE HTML>
<html>
    <head>
        <title>Sign Up</title>
        <link rel="stylesheet" href="style2.css">		
    </head>
    <body>
		<div class="signup_body">
			<div class="signup_box">
				<h2>Sign Up</h2>
				<form action="" method="POST">
                    <div class="input_wrap">
						<input type="text" name="username" placeholder="Username">
					</div>
					<div class="input_wrap">
						<input type="email"  name="email" placeholder="Email">
					</div>
                    <div class="input_wrap">
						<input type="text" name="phone_number" placeholder="Phone number">
					</div>
					<div class="input_wrap">
						<input type="password"  name="password" placeholder="Password">
					</div>
                    <div class="input_wrap">
						<input type="password"  name="cpassword" placeholder="Confirm Password">
					</div>
					<div class="input_wrap">
						<a href="signin.html">
							<button type="submit" name="register">Register</button>
						</a>
					</div>
				</form>
				<p>Sudah punya akun? <a href="signin.php"  style="color: #633996; text-decoration: none;">Sign In</a></p>
			</div>
		</div>
    </body>
</html>