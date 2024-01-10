<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<?php
$koneksi = mysqli_connect("localhost", "root", "", "uas_web");

if (isset($_POST['id']) && !empty($_POST['id'])) {
    $id = mysqli_real_escape_string($koneksi, $_POST['id']);
    $nama = mysqli_real_escape_string($koneksi, $_POST['nama']);
    $tanggal = mysqli_real_escape_string($koneksi, $_POST['tanggal_lahir']);
    $nomor = mysqli_real_escape_string($koneksi, $_POST['no_kontak']);
    $gender = mysqli_real_escape_string($koneksi, $_POST['gender']);
    $kamar = mysqli_real_escape_string($koneksi, $_POST['kamar']);

    $update = "UPDATE pasien SET nama_pasien='$nama', tanggal_lahir='$tanggal', no_kontak='$nomor', gender='$gender', kamar='$kamar' WHERE id_pasien='$id'";
    $hasil = mysqli_query($koneksi, $update);

    if ($hasil) {
        header("location:index.php");
        // echo "Query: $update";
        // echo var_dump($_POST);
    } else {
        echo "Gagal update data perawat: " . mysqli_error($koneksi);
    }
} else {
    echo "Invalid request method";
}
?>

</body>
</html>