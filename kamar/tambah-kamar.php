<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style-tambah-kamar.css">
  <title>Perawat</title>
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
        <h1 class="judul">Tambah Kamar</h1>
        <div class="container-input">
          <form method="POST" action="input-kamar.php" >
          <input type="hidden" name="id" value="<?php echo $id; ?>">
                <div class="gedung">
                    Gedung<input type="text" class="input" name="gedung" value="">
                </div>
                <div class="nama_kamar">
                    Nama Kamar<input type="text" class="input" name="nama_kamar" value="">
                </div>
                <div class="no_kamar">
                    No Kamar<input type="text" class="input" name="no_kamar" value="">
                </div>
                <div class="kelas">
                    Kelas<input type="text" class="input" name="kelas" value="">
                </div>
                <a href="index.php" class="btn-kembali">Kembali</a>
            <input type="submit" value="Tambah" class="btn-tambah">
          </form>
        </div>
      </div>
    </div>
  </div>
</body>
</html>