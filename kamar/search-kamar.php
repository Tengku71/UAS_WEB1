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

        $query = "SELECT * FROM kamar 
                WHERE nama_kamar LIKE '%$searchQuery%' 
                OR tanggal_lahir LIKE '%$searchQuery%' 
                OR no_kontak LIKE '%$searchQuery%'
                OR alamat LIKE '%$searchQuery%'";
        $result = mysqli_query($koneksi, $query);

        if ($result) {
            if (mysqli_num_rows($result) > 0){
                echo "<table>
                    <tr>
                        <th>Gedung</th>
                        <th>Nama Kamar</th>
                        <th>No Kamar</th>
                        <th>Kelas</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>";

                while ($data = mysqli_fetch_array($result)) {
               
                    echo "<tr>
                            <td>{$data['gedung']}</td>
                            <td>{$data['nama_kamar']}</td>
                            <td>{$data['no_kamar']}</td>
                            <td>{$data['kelas']}</td>
                            <td><a href=\"edit-kamar.php?id={$data['id_kamar']}\">Edit</a></td>
                            <td><a href=\"delete-kamar.php?id={$data['id_kamar']}\">Delete</a></td>
                        </tr>
                        ";
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