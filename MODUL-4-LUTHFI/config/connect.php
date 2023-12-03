<!-- File ini berisi koneksi dengan database MySQL -->
<?php 

// (1) Buatlah variable untuk connect ke database yang telah di import ke phpMyAdmin
$dbhost = "localhost:3308";
$dbuser = "root";
$dbname = "wad_modul4";
$dbpass = "";

$koneksi = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

// (2) Buatlah perkondisian untuk menampilkan pesan error ketika database gagal terkoneksi

if ($koneksi->connect_error) {
    die("Koneksi Gagal : " . $koneksi->connect_error);
  }
  echo "Koneksi Berhasil";
 
?>