<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
</head>
<title>
    Rizky Ramadhani</title>
<body>
    <nav class="navbar navbar-dark bg-dark">
            <span class="navbar-brand mb-0 h1">Rizky Ramadhani</span>
        </div>
    </nav>
<div class="container">
    <br>
    <h4><center>DATA MAHASISWA</center></h4>
<?php

    include "koneksi.php";

    //Cek apakah ada kiriman form dari method post
    if (isset($_GET['Id_Mahasiswa'])) {
        $Id_Mahasiswa=htmlspecialchars($_GET["Id_Mahasiswa"]);

        $sql="delete from mahasiswa where Id_Mahasiswa='$Id_Mahasiswa' ";
        $hasil=mysqli_query($kon,$sql);

        //Kondisi apakah berhasil atau tidak
            if ($hasil) {
                header("Location:index.php");

            }
            else {
                echo "<div class='alert alert-danger'> Data Gagal dihapus.</div>";

            }
        }
?>


     <tr class="table-danger">
            <br>
        <thead>
        <tr>
       <table class="my-3 table table-bordered">
            <tr class="table-primary">           
            <th>No</th>
            <th>Nim</th>
            <th>Nama</th>
            <th>Prodi</th>
            <th>Angkatan</th>
            <th colspan='2'>Aksi</th>

        </tr>
        </thead>

        <?php
        include "koneksi.php";
        $sql="select * from mahasiswa order by Id_Mahasiswa asc";
       

        $hasil=mysqli_query($kon,$sql);
        $no=0;
        while ($data = mysqli_fetch_array($hasil)) {
            $no++;

            ?>
            <tbody>
            <tr>
                <td><?php echo $no;?></td>
                <td><?php echo $data["Nim"]; ?></td>
                <td><?php echo $data["Nama"];   ?></td>
                <td><?php echo $data["Prodi"];   ?></td>
                <td><?php echo $data["Angkatan"];   ?></td>
                <td>

            <!-- Tombol Update -->
            <a href="update.php?Id_Mahasiswa=<?php echo htmlspecialchars($data['Id_Mahasiswa']); ?>" 
            class="btn btn-warning" role="button">Update</a>

            <!-- Tombol Delete -->
            <a href="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>?Id_Mahasiswa=<?php echo urlencode($data['Id_Mahasiswa']); ?>" 
            class="btn btn-danger" role="button">Delete</a>
                </td>
            </tr>
            </tbody>
            <?php
        }
        ?>
    </table>
    <a href="create.php" class="btn btn-primary" role="button">Tambah Data</a>
</div>
</body>
</html>