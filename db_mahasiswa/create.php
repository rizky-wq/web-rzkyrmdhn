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
    //Cek apakah ada kiriman form dari method post
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $Nim=input($_POST["Nim"]);
        $nama=input($_POST["nama"]);
        $prodi=input($_POST["prodi"]);
        $angkatan=input($_POST["angkatan"]);

        //Query input menginput data kedalam tabel anggota
        $sql="insert into mahasiswa (Nim,Nama,Prodi,Angkatan) values
		('$nim','$nama','$prodi','$angkatan')";

        //Mengeksekusi/menjalankan query diatas
        $hasil= mysqli_query($kon,$sql);

        //Kondisi apakah berhasil atau tidak dalam mengeksekusi query diatas
        if ($hasil) {
            header("Location:index.php");
        } else {
            echo "Error: " . mysqli_error($kon);
        } 
    }
    ?>
    <h2>Input Data</h2>


    <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
        <div class="form-group">
            <label>Nim:</label>
            <input type="text" name="nim" class="form-control" placeholder="Masukan Nim" required />

        </div>
        <div class="form-group">
            <label>Nama:</label>
            <input type="text" name="nama" class="form-control" placeholder="Masukan Nama" required/>
        </div>
       <div class="form-group">
            <label>Prodi:</label>
            <input type="text" name="prodi" class="form-control" placeholder="Masukan Prodi" required/>
        </div>
                </p>
        <div class="form-group">
            <label>Angkatan:</label>
            <input type="text" name="angkatan" class="form-control" placeholder="Masukan Angkatan" required/>
        </div>
            
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
</body>
</html>