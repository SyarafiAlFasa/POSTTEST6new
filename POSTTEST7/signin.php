<?php 
    require 'koneksi.php';

    if (isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $result = mysqli_query($conn, "SELECT * FROM user WHERE Username = '$username' AND Password ='$password'");

        if(mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);

            if (password_verify($password, $row['Password'])) {
                header("Location: dashboard.php");
                exit;
            }
        } 
        $error = true;
    }        
?>

<!DOCTYPE HTML>
<html>
    <head>
        <title>Sign In</title>
        <link rel="stylesheet" href="style2.css">		
    </head>

    <body>
		<div class="signin_body">
			<div class="signin_box">
				<h2>Sign In</h2>
                <?php if(isset($error)){
                    echo "<p style='color: red ;'>Username atau password salah</p>";                    
                }?>
				<form action="" method="POST">
					<div class="input_wrap">
						<input type="username" name="username" placeholder="Username">
					</div>
					<div class="input_wrap">
						<input type="password" name="password" placeholder="Password">
					</div>
					<div class="input_wrap">
						<button name="signin" type="submit">Sign In</button>
					</div>
				</form>
				<p>Belum punya akun? <a href="signup.php" style="color: #633996; text-decoration: none;">Sign Up</a></p>
			</div>
		</div>           
    </body>
</html>
