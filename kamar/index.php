<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Perawat</title>
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
          <a href="../dokter/index.php">Dokter</a>
        </div>
        <div class="perawat-menu">
          <a href="../perawat/index.php">Perawat</a>
        </div>
        <div class="pasien-menu">
          <a href="../pasien/index.php">Pasien</a>
        </div>
        <div class="kamar-menu">
          <a href="index.php">Kamar</a>
        </div>
  
      </div>
      <div class="right-side">
        <h1 class="judul">Daftar Kamar</h1>
        <div class="pencarian">
          <button class="btn-refresh">Refresh</button>
          <input type="text" name="search" id="search" placeholder="Cari">
          <img class="search-icon" src="../img/icon/magnifying-glass-solid.svg" alt="">
        </div>
        <div class="tabel">
          <div class="tabel-kamar">
            <?php
              $koneksi = mysqli_connect("localhost", "root", "", "uas_web");

              // memeriksa koneksi
              if (!$koneksi) {
                  die("Koneksi gagal: " . mysqli_connect_error());
              }

              // menampilkan data
              $tampil = "SELECT * FROM kamar ORDER BY id_kamar";
              $hasil = mysqli_query($koneksi, $tampil);

              // memeriksa apakah kueri berhasil dijalankan
              if (!$hasil) {
                  die("Error: " . mysqli_error($koneksi));
              }

              // menampilkan nama, kontak, sift
              echo "<table>
                      <tr>
                          <th>Gedung</th>
                          <th>Nama Kamar</th>
                          <th>No Kamar</th>
                          <th>Kelas</th>
                          <th>Edit</th>
                          <th>Delete</th>
                      </tr>";

              // memeriksa apakah hasil query valid sebelum menggunakan mysqli_fetch_array
              if ($hasil) {
                  while ($data = mysqli_fetch_array($hasil)) {
                      echo "<tr>
                              <td>{$data['gedung']}</td>
                              <td>{$data['nama_kamar']}</td>
                              <td>{$data['no_kamar']}</td>
                              <td>{$data['kelas']}</td>
                              <td><a href=\"edit-kamar.php?id={$data['id_kamar']}\">Edit</a></td>
                              <td><a href=\"delete-kamar.php?id={$data['id_kamar']}\">Delete</a></td>
                          </tr>";
                  }
                  echo "</table>";
              } else {
                  echo "Tidak ada data yang dapat ditampilkan.";
              }

              // menutup koneksi
              mysqli_close($koneksi);
            ?>
          </div>    
          <!-- <div class="footer-tabel"></div> -->
          
        </div>
        <a href="tambah-kamar.php" class="btn-tambah-kamar">Tambah Kamar</a>
      </div>
    </div>
  </div>
  <script src='script.js'></script>
</body>
</html>