<?php
// Ambil data dari formulir
$nama = $_POST['nama'];
$email = $_POST['email'];
$jumlah = $_POST['jumlah'];

// Format data yang akan disimpan
$bookingData = "Nama: $nama\nEmail: $email\nJumlah Tiket: $jumlah\n\n";

// Path ke file .txt untuk menyimpan data
$file = 'booking_data.txt';

// Buka atau buat file .txt untuk menulis
$current = file_get_contents($file);
$current .= $bookingData;

// Tulis data pemesanan tiket ke file
file_put_contents($file, $current);

// Redirect kembali ke halaman pemesanan tiket setelah selesai
header('Location: admin.php');
exit();
?>
