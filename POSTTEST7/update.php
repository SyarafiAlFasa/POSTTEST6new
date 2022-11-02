<?php 
include 'connection.php';
$id = $_POST['ID'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$nomorhp = $_POST['nomorhp'];                
$alamat = $_POST['alamat'];
$pembayaran = $_POST['kategori'];    

mysqli_query($connection, "UPDATE datapemasangan SET nama='$nama', email='$email', nomorhp='$nomorhp', alamat='$alamat', tipe_langganan='$pembayaran'  WHERE ID='$id'");
header("location:dashboard.php");

?>