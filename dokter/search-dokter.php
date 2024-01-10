<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<div id="search-results"></div>
    <?php
    $koneksi = mysqli_connect("localhost", "root", "", "uas_web");

    if (isset($_POST['search'])) {
        $searchQuery = $_POST['search'];

        $query = "SELECT * FROM dokter 
                WHERE nama LIKE '%$searchQuery%' 
                OR tanggal_lahir LIKE '%$searchQuery%' 
                OR no_kontak LIKE '%$searchQuery%'";
        $result = mysqli_query($koneksi, $query);

        if ($result) {
            if (mysqli_num_rows($result) > 0) {
                $i = 1;
                echo "<table>
                    <tr>
                        <th>No.</th>
                        <th>Nama Pasien</th>
                        <th>Tanggal Lahir</th>
                        <th>No Kontak</th>
                        <th>Gender</th>
                        <th>Praktek</th>
                        <th>Pilih</th>
                    </tr>";

                while ($data = mysqli_fetch_array($result)) {
                $id = $data['id_dokter'];
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
                        <td>$data[praktek]</td>
                        <td><a href='edit-dokter.php?id=$id' class='edit-btn'>Edit</a><a href='delete-dokter.php?id=$id' class='hapus-btn'>Hapus</a></td>
                        </tr>
                        ";
                $i++;
                }

                echo "</table>";
            } else {
                echo "<p>Data Tidak Ditemukan</p>";
            }
        } else {
            echo "Error executing the query.";
        }
    }
    ?>


</body>
</html>