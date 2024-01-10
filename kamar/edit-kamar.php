<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style-edit-kamar.css">
  <title>Edit Perawat</title>
</head>
<body>
  <div class="main-container">
    <div class="header">
      <p class="logo-header">RS</p>
      <div class="account">
        <div class="container-account">
          <img src="../img/icon/user-regular.svg" alt="">
        </div>
        <p>Admin</p>
      </div>
    </div>
    <div class="container">
      <div class="side-menu">
        <div class="dashboard-menu">
          <a href="../index.php">Dashboard</a>
        </div>
        <div class="dokter-menu">
          <a href="../dokter/index.php">Dokter</a>
        </div>
        <div class="perawat-menu">
          <a href="index.php">Perawat</a>
        </div>
        <div class="pasien-menu">
          <a href="../pasien/index.php">Pasien</a>
        </div>
        <div class="kamar-menu">
          <a href="../kamar/index.php">Kamar</a>
        </div>
  
      </div>
      <div class="right-side">
        <h1 class="judul">Edit Kamar</h1>
        <?php
            $koneksi = mysqli_connect("localhost","root","","uas_web");
            $id = $_GET['id'];
            $edit  = "SELECT * FROM kamar WHERE id_kamar='$id'";
            $hasil = mysqli_query($koneksi,$edit);
            $data = mysqli_fetch_array($hasil);
        
        ?>
        <div class="form-edit">
            <form method="POST" action="update-kamar.php" class="container-edit">
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <div class="gedung">
                    Gedung<input type="text" class="input" name="gedung" value="<?php echo $data['gedung']; ?>">
                </div>
                <div class="nama_kamar">
                    Nama Kamar<input type="text" class="input" name="nama_kamar" value="<?php echo $data['nama_kamar']; ?>">
                </div>
                <div class="no_kamar">
                    No Kamar<input type="text" class="input" name="no_kamar" value="<?php echo $data['no_kamar']; ?>">
                </div>
                <div class="kelas">
                    Kelas<input type="text" class="input" name="kelas" value="<?php echo $data['kelas']; ?>">
                </div>
                <a href="index.php" class="btn-kembali">Kembali</a>
                <input type="submit" class="btn-edit" value="Edit">
            </form>
      </div>
    </div>
  </div>
</body>
</html>