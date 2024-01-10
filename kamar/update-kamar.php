<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<?php
// menyambungkan ke database
$koneksi = mysqli_connect("localhost", "root", "", "uas_web");

// Memeriksa koneksi
if (isset($_POST['id']) && !empty($_POST['id'])) {
    $id = mysqli_real_escape_string($koneksi, $_POST['id']);
    $gedung = mysqli_real_escape_string($koneksi, $_POST['gedung']);
    $nama_kamar = mysqli_real_escape_string($koneksi, $_POST['nama_kamar']);
    $no_kamar = mysqli_real_escape_string($koneksi, $_POST['no_kamar']);
    $kelas = mysqli_real_escape_string($koneksi, $_POST['kelas']);

// memperbaiki kueri update
$update = "UPDATE kamar SET gedung='$gedung', nama_kamar='$nama_kamar',no_kamar='$no_kamar', kelas='$kelas' WHERE id_kamar='$id'";

// mengeksekusi kueri update
$hasil = mysqli_query($koneksi, $update);

// memeriksa hasil update
if (!$hasil) {
    echo "Update gagal: " . mysqli_error($koneksi);
} else {
    header("location: index.php");
}
} else {
    echo "Invalid request method";
}

// menutup koneksi
$koneksi->close();
?>

</body>
</html>