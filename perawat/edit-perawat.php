<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style-edit-perawat.css">
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
        <h1 class="judul">Edit Perawat</h1>
        <?php
            $koneksi = mysqli_connect("localhost","root","","uas_web");
            $id = $_GET['id'];
            $edit  = "SELECT * FROM perawat WHERE id_perawat='$id'";
            $hasil = mysqli_query($koneksi,$edit);
            $data = mysqli_fetch_array($hasil);
        
        ?>
        <div class="form-edit">
            <form method="POST" action="update-perawat.php" class="container-edit">
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <div class="nama">
                    Nama Perawat<input type="text" class="input" name="nama" value="<?php echo $data['nama_perawat']; ?>">
                </div>
                <div class="tanggal">
                    Tanggal Lahir<input type="date" class="input" name="tanggal_lahir" value="<?php echo $data['tanggal_lahir']; ?>">
                </div>
                <div class="nomor">
                    No Kontak<input type="text" class="input" name="no_kontak" value="<?php echo $data['no_kontak']; ?>">
                </div>
                <div class="alamat">
                    Alamat<textarea class="input" name="alamat" rows="2" cols="30"><?php echo $data['alamat']; ?></textarea>
                </div>
                <div class="jenis-kelamin">
                    <label for="gender">Jenis Kelamin</label>
                    <select name="gender" id="gender">
                        <?php if ($data['gender'] == 1) : ?>
                            <option value="1" selected>Laki - laki</option>
                            <option value="2">Perempuan</option>
                        <?php else : ?>
                            <option value="1">Laki - laki</option>
                        <option value="2" selected>Perempuan</option>
                        <?php endif; ?>
                    </select>
                </div>
                <div class="perawatan">
                  Perawatan<input type="time" class="input" name="perawatan" value="<?php echo $data['perawatan']; ?>">
                </div>  
                <a href="index.php" class="btn-kembali">Kembali</a>
                <input type="submit" class="btn-edit" value="Edit">
            </form>
        </div>
      </div>
    </div>
  </div>
</body>
</html>