<!DOCTYPE html>
<html>
<head>
    <title>Form Data Mahasiswa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

</head>
<body>
<div class="container">
    <?php

    //Include file koneksi, untuk koneksikan ke database
    include "koneksi.php";

    //Fungsi untuk mencegah inputan karakter yang tidak sesuai
    function input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    //Cek apakah ada nilai yang dikirim menggunakan methos GET dengan nama id_peserta
    if (isset($_GET['Id_Mahasiswa'])) {
        $Id_Mahasiswa=input($_GET["Id_Mahasiswa"]);

        $sql="select * from mahasiswa where Id_Mahasiswa=$Id_Mahasiswa";
        $hasil=mysqli_query($kon,$sql);
        $data = mysqli_fetch_assoc($hasil);


    }

    //Cek apakah ada kiriman form dari method post
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $Id_Mahasiswa=htmlspecialchars($_POST["Id_Mahasiswa"]);
        $nim=input($_POST["Nim"]);
        $nama=input($_POST["Nama"]);
        $prodi=input($_POST["Prodi"]);
        $angkatan=input($_POST["Angkatan"]);

        //Query update data pada tabel anggota
        $sql="update mahasiswa set
			Nim='$nim',
			Nama='$nama',
			Prodi='$prodi',
			Angkatan='$angkatan'
			where Id_Mahasiswa=$Id_Mahasiswa";

        //Mengeksekusi atau menjalankan query diatas
        $hasil=mysqli_query($kon,$sql);

        //Kondisi apakah berhasil atau tidak dalam mengeksekusi query diatas
        if ($hasil) {
            header("Location:index.php");
        }
        else {
            echo "<div class='alert alert-danger'> Data Gagal disimpan.</div>";

        }

    }

    ?>
    <h2>Update Data</h2>


    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <div class="form-group">
            <label>Nim:</label>
            <input type="text" name="Nim" class="form-control" placeholder="Masukan Nim" required />

        </div>
        <div class="form-group">
            <label>Nama:</label>
            <input type="text" name="Nama" class="form-control" placeholder="Masukan Nama" required/>
        </div>
        <div class="form-group">
            <label>Prodi:</label>
            <input type="text" name="Prodi" class="form-control" placeholder="Masukan Prodi" required/>
        </div>
        <div class="form-group">
            <label>Angkatan:</label>
            <input type="text" name="Angkatan" class="form-control" placeholder="Masukan Angkatan" required/>
        </div>

        <input type="hidden" name="Id_Mahasiswa" value="<?php echo $data['Id_Mahasiswa']; ?>" />

        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
</body>
</html>