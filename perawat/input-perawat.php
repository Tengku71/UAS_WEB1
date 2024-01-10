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
    if (isset($_POST['nama']) && !empty($_POST['nama'])) {
      $nama = mysqli_real_escape_string($koneksi, $_POST['nama']);
      $tanggal = mysqli_real_escape_string($koneksi, $_POST['tanggal_lahir']);
      $nomor = mysqli_real_escape_string($koneksi, $_POST['no_kontak']);
      $alamat = mysqli_real_escape_string($koneksi, $_POST['alamat']);
      $gender = mysqli_real_escape_string($koneksi, $_POST['gender']);
      $perawatan = mysqli_real_escape_string($koneksi, $_POST['perawatan']);

      $input = "INSERT INTO perawat(nama_perawat, tanggal_lahir, no_kontak, alamat, gender, perawatan) VALUES ('$nama', '$tanggal', '$nomor', '$alamat', '$gender', '$perawatan')";
      $hasil = mysqli_query($koneksi, $input);
      
      if ($hasil) {
        header("location:index.php");
        // echo "Query: $update";
        // echo var_dump($_POST);
      } else {
        echo "Query: $input";
        echo "Gagal update data perawat: " . mysqli_error($koneksi);
      }
    } else {
      echo "Invalid request method";
  }
  ?>
</body>
</html>