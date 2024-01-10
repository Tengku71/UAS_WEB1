<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Dokter</title>
</head>
<body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
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
        <h1 class="judul">Daftar Dokter</h1>
        <div class="pencarian">
          <button class="btn-refresh">Refresh</button>
          <input type="text" name="search" id="search" placeholder="Cari">
          <img class="search-icon" src="../img/icon/magnifying-glass-solid.svg" alt="">
        </div>
        <div class="tabel">
          <div class="tabel-dokter">
            <?php
            $koneksi = mysqli_connect("localhost", "root", "", "uas_web");
            $tampil = "SELECT * FROM dokter ORDER BY id_dokter";
            $hasil = mysqli_query($koneksi, $tampil);

            $i = 1;
            echo "<table>
                    <tr>
                      <th>No.</th>
                      <th>Nama</th>
                      <th>Tanggal Lahir</th>
                      <th>Kontak</th>
                      <th>Gender</th>
                      <th>Praktek</th>
                      <th>Pilih</th>
                    </tr>";

            if ($hasil) {
                while ($data = mysqli_fetch_array($hasil)) {
                  echo "<tr>
                          <td>$i</td>
                          <td>{$data['nama']}</td>
                          <td>{$data['tanggal_lahir']}</td>
                          <td>{$data['no_kontak']}</td>
                          <td>{$data['gender']}</td>
                          <td>{$data['praktek']}</td>
                          <td><a class='edit-btn' href='edit-dokter.php?id={$data['id_dokter']}'>Edit</a> <a class='hapus-btn' href=\"delete-dokter.php?id={$data['id_dokter']}\">Delete</a></td>
                      </tr>";
                      $i++;
                };
                echo "</table>";                  
            } else {
                echo "Tidak ada data yang dapat ditampilkan.";
            }
            ?>       
        </div>
      </div>
      <a href="tambah-dokter.php" class="btn-tambah-dokter">Tambah Dokter</a>
    </div>
  </div>
  <script src='script.js'></script>
</body>
</html>