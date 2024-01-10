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
    if (isset($_POST['nama_kamar']) && !empty($_POST['nama_kamar'])) {
      $gedung = mysqli_real_escape_string($koneksi, $_POST['gedung']);
      $nama_kamar = mysqli_real_escape_string($koneksi, $_POST['nama_kamar']);
      $no_kamar = mysqli_real_escape_string($koneksi, $_POST['no_kamar']);
      $kelas = mysqli_real_escape_string($koneksi, $_POST['kelas']);

      $input = "INSERT INTO kamar(gedung, nama_kamar, no_kamar, kelas) VALUES ('$gedung', '$nama_kamar', '$no_kamar', '$kelas')";
      $hasil = mysqli_query($koneksi, $input);
      
      if ($hasil) {
        header("location:index.php");
      } else {
        echo "Query: $input";
        echo "Gagal update data kamar: " . mysqli_error($koneksi);
      }
    } else {
      echo "Invalid request method";
  }
  ?>
</body>
</html>