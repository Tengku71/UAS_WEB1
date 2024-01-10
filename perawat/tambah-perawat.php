<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style-tambah-perawat.css">
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
        <h1 class="judul">Tambah Perawat</h1>
        <div class="container-input">
          <form method="POST" action="input-perawat.php" >
            <div class="nama">
                Nama Perawat<input type="text" class="input" name="nama" value="">
            </div>
            <div class="tanggal">
                Tanggal Lahir<input type="date" class="input" name="tanggal_lahir" value="">
            </div>
            <div class="nomor">
                No Kontak<input type="text" class="input" name="no_kontak" value="">
            </div>
            <div class="alamat">
                Alamat<textarea class="input" name="alamat" rows="2" cols="30"></textarea>
            </div>
            <div class="jenis-kelamin">
                <label for="gender">Jenis Kelamin</label>
                <select name="gender" id="gender">
                  <option value="1">Laki - laki</option>
                  <option value="0">Perempuan</option>
                </select>
            </div>
            <div class="perawatan">
                Perawatan<input type="time" class="input" name="perawatan" value="">
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