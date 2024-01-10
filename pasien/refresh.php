<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<?php          
    $koneksi = mysqli_connect("localhost","root","","uas_web");
    $i = 1;
    $tampil = "SELECT * FROM pasien";
    $hasil  = mysqli_query($koneksi,$tampil);

    echo "<table>
            <tr>
              <th>No.</th>
              <th>Nama Perawat</th>
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
</body>
</html>