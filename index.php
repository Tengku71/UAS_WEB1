<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Dashboard</title>
</head>
<body>
  <div class="main-container">
    <div class="header">
      <p class="logo-header">RS</p>
      <div class="account">
        <div class="container-account">
          <img src="img/icon/user-regular.svg" alt="">
        </div>
        <p>Admin</p>
      </div>
    </div>
    <div class="container">
      <div class="side-menu">
        <div class="dashboard-menu">
          <a href="#">Dashboard</a>
        </div>
        <div class="dokter-menu">
          <a href="dokter/index.php">Dokter</a>
        </div>
        <div class="perawat-menu">
          <a href="perawat/index.php">Perawat</a>
        </div>
        <div class="pasien-menu">
          <a href="pasien/index.php">Pasien</a>
        </div>
        <div class="kamar-menu">
          <a href="kamar/index.php">Kamar</a>
        </div>
  
      </div>
      <div class="right-side">
        <div class="jml-container">
          <div class="jml-dokter box-jml"></div>
          <div class="jml-perawat box-jml"></div>
          <div class="jml-pasien box-jml"></div>
          <div class="jml-kamar box-jml"></div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>