<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Pasien</title>
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
          <a href="index.php">Pasien</a>
        </div>
        <div class="kamar-menu">
          <a href="../kamar/index.php">Kamar</a>
        </div>
  
      </div>
      <div class="right-side">
        <h1 class="judul">Daftar Pasien</h1>
        <div class="pencarian">
          <button class="btn-refresh">Refresh</button>
          <input type="text" name="search" id="search" placeholder="Cari">
          <img class="search-icon" src="../img/icon/magnifying-glass-solid.svg" alt="">
        </div>
        <div class="tabel">
          <div class="tabel-pasien">
            <?php
            $url = "https://databases.000webhost.com/index.php?route=/";
            //menyambungkan database
            $koneksi = mysqli_connect("localhost","root","","uas_web");
            //query menampilkan data
            $i = 1;
            $tampil = "SELECT * FROM pasien";
            $hasil  = mysqli_query($koneksi,$tampil);
    
            echo "<table>
                    <tr>
                        <th>No.</th>
                        <th>Nama Pasien</th>
                        <th>Tanggal Lahir</th>
                        <th>No Kontak</th>
                        <th>Gender</th>
                        <th>Kamar</th>
                        <th>Pilih</th>
                    </tr>
                    ";
    
            //menampilkan nama, email, dan pesan
            while($data=mysqli_fetch_array($hasil)){
                $id = $data['id_pasien'];
                if($data["gender"] == 1){
                    $gender = "Laki - laki";
                }else{
                    $gender = "Perempuan";
                }
                echo "<tr>
                    <td>$i</td>
                    <td>$data[nama_pasien]</td>
                    <td>$data[tanggal_lahir]</td>
                    <td>$data[no_kontak]</td>
                    <td>$gender</td>
                    <td>$data[kamar]</td>
                    <td><a href='edit-pasien.php?id=$id' class='edit-btn'>Edit</a><a href='delete-pasien.php?id=$id' class='hapus-btn'>Hapus</a></td>
                    </tr>
                    ";
                    $i++;
                } 
                echo "</table>";
            ?>
        
          </div>    
          <!-- <div class="footer-tabel"></div> -->
          
        </div>
        <a href="tambah-pasien.php" class="btn-tambah-pasien">Tambah Pasien</a>
      </div>
    </div>
  </div>
  <script src='script.js'></script>
</body>
</html>