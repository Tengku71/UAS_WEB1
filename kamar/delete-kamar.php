
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<?php
// proses_delete.php

// Mengecek apakah data dikirim melalui metode GET
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // Memeriksa apakah 'id' ada dalam array $_GET
    if (isset($_GET['id'])) {
        // Mengambil nilai ID Dokter yang akan dihapus dari formulir
        $delete_id = $_GET['id'];

        // Validasi ID
        if (!is_numeric($delete_id)) {
            die("ID Kamar tidak valid");
        }

        // Lakukan operasi delete pada database (contoh menggunakan MySQLi)
        $koneksi = new mysqli("localhost", "root", "", "uas_web");

        // Periksa koneksi
        if ($koneksi->connect_error) {
            die("Koneksi Gagal: " . $koneksi->connect_error);
        }

        // Query untuk menghapus data
        $sql = "DELETE FROM kamar WHERE id_kamar = '$delete_id'";

        if ($koneksi->query($sql) === TRUE) {
            header("location:index.php");
        } else {
            echo "Error: " . $sql . "<br>" . $koneksi->error;
        }

        // Tutup koneksi
        $koneksi->close();
    } else {
        // Jika 'id' tidak ada dalam array $_GET
        die("Parameter 'id' tidak ditemukan dalam URL");
    }
}
?>
</body>
</html>