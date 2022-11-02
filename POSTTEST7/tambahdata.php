

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
                    <li><a href="#logout">Log Out</a></li>
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
                <p><a href="" class="tbl-pink">Pelajari Lebih Lanjut</a></p>                
                <script src="script.js"></script>
            </div>
        </section>
        <!---Untuk daftar-->        
        <section id="signup">            
                <form action="add.php" method="post" enctype="multipart/form-data">
                    <div class="kolom">
                        <h2 class="descminath2">Berminat?</h2>
                        <p class="descminat">Silahkan isi formulir dibawah ini</p>
                        <table class="tabel">
                            <tr>
                                <td width="120">Nama</td>
                                <td><input name="nama" type="text" placeholder="Masukkan Nama"></td>
                            </tr>                                                                                          
                            <tr>
                                <td>Email</td>
                                <td><input name="email" type="text" placeholder="Masukkan Email"></td>
                            </tr>                                        
                            <tr>
                                <td>Nomor HP</td>
                                <td><input name="nomorhp" type="text" placeholder="Masukkan Nomor HP"></td>
                            </tr>                                                                    
                            <tr>
                                <td>Pembayaran</td>
                                <td><select name="kategori">
                                    <option value="Bulanan">Bulanan</option>
                                    <option value="Tahunan">Tahunan</option>
                                </select></td>
                            </tr>
                            <tr>
                                <td>Alamat</td>
                                <td><textarea placeholder="Masukkan Alamat" name="alamat"></textarea></td>
                            </tr>
                            <tr>
                                <td>Input Foto KTP</td>                                
                                <td><input name="gambar" type="file"></td>                                                                
                            </tr>
                            <tr>
                                <td></td>
                                <td><input type="submit" value="simpan">
                                    <input type="reset" value="Reset">
                            </td>
                            </tr>                                                    
                            </table>
                    </div>
                    <script src="script.js"></script>
                </form>

                </div>
        </section>
    </div>
    <div class="footer">
		<p>Copyright © 2022 Designed by Fasa</p>
	</div>
</body>
</html>