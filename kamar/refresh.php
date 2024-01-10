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
    $tampil = "SELECT * FROM kamar";
    $hasil  = mysqli_query($koneksi,$tampil);

    echo "<table>
            <tr>
                <th>Gedung</th>
                <th>Nama Kamar</th>
                <th>No Kamar</th>
                <th>Kelas</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            ";

    //menampilkan nama, email, dan pesan
    while($data=mysqli_fetch_array($hasil)){
        echo "<tr>
            <td>{$data['gedung']}</td>
            <td>{$data['nama_kamar']}</td>
            <td>{$data['no_kamar']}</td>
            <td>{$data['kelas']}</td>
            <td><a href=\"edit-kamar.php?id={$data['id_kamar']}\">Edit</a></td>
            <td><a href=\"delete-kamar.php?id={$data['id_kamar']}\">Delete</a></td>>
            </tr>
            ";
        } 
        echo "</table>";
    ?>
</body>
</html>