<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style-tambah-dokter.css">
  <title>Tambah Dokter</title>
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
          <a href="index.php">Dokter</a>
        </div>
        <div class="perawat-menu">
          <a href="../perawat/index.php">Perawat</a>
        </div>
        <div class="pasien-menu">
          <a href="../pasien/index.php">Pasien</a>
        </div>
        <div class="kamar-menu">
          <a href="../kamar/index.php">Kamar</a>
        </div>
  
      </div>
      <div class="right-side">
      <h1>Tambah Dokter </h1>
        <div class="box-container">
          <div class="image">
            <img src="../img/logindokter.jpg" class="gambar">
          </div>
            <form method="POST" action="input-dokter.php" class="container-input">
              <div class="nama">
                  Nama Dokter<input type="text" class="input" name="nama" value="">
              </div>
              <div class="tanggal">
                  Tanggal Lahir<input type="date" class="input" name="tanggal_lahir" value="">
              </div>
              <div class="nomor">
                  No Kontak<input type="text" class="input" name="no_kontak" value="">
              </div>
              <div class="jenis-kelamin">
                  <label for="gender">Jenis Kelamin</label>
                  <select name="gender" id="gender">
                    <option value="1" selected>Laki - laki</option>
                    <option value="2">Perempuan</option>
                  </select>
              </div>
              <div class="praktek">
                Praktek<input type="datetime-local" class="input" name="praktek" value="<?php echo $data['praktek']; ?>">
              </div>  
              <a href="index.php" class="btn-kembali">Kembali</a>
              <input type="submit" class="btn-tambah" value="Tambah">
          </form>
        </div>
      </div>
    </div>
  </div>
</body>
</html>