
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

  $id = $_GET['id'];

  $delete = "DELETE FROM perawat where id_perawat=$id";
  $hasil = mysqli_query($koneksi, $delete);

  if ($hasil) {
    header("location:index.php");
    // echo "Query: $update";
    // echo var_dump($_POST);
  } else {
    echo "Gagal update data perawat: ";
  }
?>
</body>
</html>