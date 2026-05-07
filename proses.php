<?php
// 1. Mengambil data dari form menggunakan $_POST
// Nama di dalam kurung ['...'] harus sama dengan atribut 'name' di HTML
$nama_user  = $_POST['nama'];
$email_user = $_POST['email'];
$tujuan     = $_POST['tujuan'];
$produk     = $_POST['produk'];
$pesan      = $_POST['pesan'];

// 2. Menampilkan kembali datanya ke layar
echo "<h1>Halo, $nama_user!</h1>";
echo "<p>Terima kasih sudah menghubungi kami.</p>";
echo "<hr>";

echo "<b>Detail Pesanan Anda:</b><br>";
echo "Email: $email_user <br>";
echo "Layanan: $tujuan <br>";
echo "Varian Bagel: $produk <br>";
echo "Isi Pesan: $pesan <br>";

echo "<hr>";
echo "<a href='index.html'>Kembali ke Form</a>";
?>