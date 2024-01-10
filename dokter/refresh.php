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
    $tampil = "SELECT * FROM dokter";
    $hasil  = mysqli_query($koneksi,$tampil);

    echo "<table>
            <tr>
              <th>No.</th>
              <th>Nama</th>
              <th>Tanggal Lahir</th>
              <th>Kontak</th>
              <th>Gender</th>
              <th>Praktek</th>
              <th>Pilih</th>
            </tr>
            ";

    //menampilkan nama, email, dan pesan
    while($data=mysqli_fetch_array($hasil)){
        $id = $data['id_dokter'];
        if($data["gender"] == 1){
            $gender = "Laki - laki";
        }else{
            $gender = "Perempuan";
        }
        echo "<tr>
            <td>$i</td>
            <td>$data[nama]</td>
            <td>$data[tanggal_lahir]</td>
            <td>$data[no_kontak]</td>
            <td>$gender</td>
            <td>$data[praktek]</td>
            <td><a href='edit-dokter.php?id=$id' class='edit-btn'>Edit</a><a href='delete-dokter.php?id=$id' class='hapus-btn'>Hapus</a></td>
            </tr>
            ";
            $i++;
        } 
        echo "</table>";
    ?>
</body>
</html>