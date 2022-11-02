<?php
session_start();
include 'koneksi.php';
if(!isset($_SESSION['login'])){
    header("Location: signin.php");
    exit;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lintasmedia.id</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>    
    <nav>
        <div class ="wrapper">
            <div class = "logo"><a href = ""> Lintasmedia.id</a> </div>
            <div class = "menu">
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#aboutme">About Us</a></li>
                    <li><a href="tambahdata.php">Pemasangan</a></li>                                                          
                    <li><a href="logout.php">Log Out</a></li>                                                          
                    <li><img src="images/moon.png" alt="logo" id="icon"></li>
                    <script src="script.js"></script>
                </ul>                
            </div>
    </nav>
    <div class = "wrapper">
        <section id="home">
        <!---Untuk Home--->
            <img src="images/logo.png" alt="logo" width="40%">
            <div class="kolom">
                <br><br><br><br><p class="deskripsi">Rasakan lancarnya internet dengan Lintasmedia</p>
                <h2>Jelajahi Duniamu</h2>                
                <p><a href="" class="tbl-pink">Pasang Sekarang!</a></p>                
                <script src="script.js"></script>
            </div>
        </section>
        <!---Untuk About Me-->
        <section id="aboutme">
            <div class="kolom">  
                <h2>About Us</h2>                
                <p class="deskripsi">Muhammad Syarafi Al Fasa<br>Samarinda, 5 Oktober 2003<br>Jl. A. Wahab Syahrani 1, No. 9</p>                
                <script src="script.js"></script>
            </div>
        </section>
        
    </div>
    <div class="footer">
		<p>Copyright © 2022 Designed by Fasa</p>
	</div>
</body>
</html>