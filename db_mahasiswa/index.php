<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Portfolio Rizky Ramadhani</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light shadow-sm" style="background-color:rgb(255, 47, 47)">
        <div class="container">
            <a class="navbar-brand" href="#">RIZKY RAMADHANI</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>
    <!-- Home Section -->
    <section class="jumbotron text-center">
        <img src="images/Foto Rizky.jpg" style="width: 200px;">
        <h1 class="display-4">HELLO GUYS</h1>
        <p class="lead">PERKENALKAN NAMA SAYA RIZKY RAMADHANI</p>
        <p class="lead">Mata Kuliah Algoritma Pemrograman</p>
        <p class="lead">Prodi Teknik Informatika</p>
        <p class="lead">STIKOM MUHAMMADIYAH BATAM</p>
</section>
<!-- About Section -->
<div class="container">
        <h1>PROGRAM</h1>
        <div class="row">
            <!-- Hello World Card -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">HELLO WORLD</h5>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#helloWorldModal">
                            TAMPILAN HELLO WORLD
                        </button>
                    </div>
                </div>
            </div>

          <!-- Luas Persegi Panjang Card -->
          <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">LUAS PERSEGI PANJANG</h5>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#luasPersegiModal">
                            HITUNG LUAS
                        </button>
                    </div>
                </div>
            </div>
            
            <!-- Segitiga Bintang Card -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">SEGITIGA BINTANG</h5>
                        <div class="form-group">
                            <label for="rowInput">MASUKAN JUMLAH BARIS :</label>
                            <input type="number" class="form-control" id="rowInput" min="1">
                        </div>
                        <button type="button" class="btn btn-primary" id="generateBtn">TAMPILAN SEGITIGA</button>
                    </div>
                </div>
            </div>

            <!-- Kipas Angin Card -->
            <div class="col-md-4">
                <div class="card">
                    <img id="fanImage" src="images/mati.png" class="card-img-top img-fluid" alt="Kipas Mati">
                    <div class="card-body">
                        <h5 class="card-title">KIPAS ANGIN</h5>
                        <p class="card-text">Klik tombol untuk menghidupkan atau mematikan kipas angin</p>
                        <button id="startButton" class="btn btn-primary">Hidupkan</button>
                    </div>
                </div>
            </div>

<!-- Simulasi Lampu Card -->
<div class="col-md-12 mt-4">
                <h2 class="text-center">Simulasi Lampu Rangkaian Seri</h2>
                <p class="text-center">Klik tombol stop kontak untuk menghidupkan atau mematikan semua lampu</p>
                <div class="text-center">
                    <button id="stopKontakButton" class="btn btn-primary mb-4">Hidupkan Stop Kontak</button>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-2"><img id="lamp1" src="images/lamp_off.png" alt="Lampu 1" class="img-fluid mb-2"><p>Lampu 1</p></div>
                    <div class="col-md-2"><img id="lamp2" src="images/lamp_off.png" alt="Lampu 2" class="img-fluid mb-2"><p>Lampu 2</p></div>
                    <div class="col-md-2"><img id="lamp3" src="images/lamp_off.png" alt="Lampu 3" class="img-fluid mb-2"><p>Lampu 3</p></div>
                    <div class="col-md-2"><img id="lamp4" src="images/lamp_off.png" alt="Lampu 4" class="img-fluid mb-2"><p>Lampu 4</p></div>
                    <div class="col-md-2"><img id="lamp5" src="images/lamp_off.png" alt="Lampu 5" class="img-fluid mb-2"><p>Lampu 5</p></div>
                </div>
            </div>
        </div>
    </div>
<!-- Modals -->
    <div class="modal fade" id="helloWorldModal" tabindex="-1" role="dialog" aria-labelledby="helloWorldLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="helloWorldLabel">Hello World</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">Hello World!</div>
                <div class="modal-footer"><button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button></div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="luasPersegiModal" tabindex="-1" role="dialog" aria-labelledby="luasPersegiLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header"><h5 class="modal-title">Luas Persegi Panjang</h5></div>
                <div class="modal-body">
                    <p>Masukkan panjang dan lebar:</p>
                    <input type="number" id="panjang" placeholder="Panjang" class="form-control mb-2">
                    <input type="number" id="lebar" placeholder="Lebar" class="form-control mb-2">
                    <button class="btn btn-success" onclick="hitungLuas()">Hitung</button>
                    <div id="luasResult" class="mt-2"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="resultModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header"><h5>Hasil Segitiga Bintang</h5></div>
                <div class="modal-body" id="resultContent"></div>
            </div>
        </div>
    </div>
<!-- Script -->
<script>
        function hitungLuas() {
            const panjang = document.getElementById('panjang').value;
            const lebar = document.getElementById('lebar').value;
            document.getElementById('luasResult').innerText = `Luas: ${panjang * lebar}`;
        }

        document.getElementById('generateBtn').addEventListener('click', function() {
            const rows = document.getElementById('rowInput').value;
            let result = '';
            for (let i = 1; i <= rows; i++) {
                result += ' '.repeat(rows - i) + '* '.repeat(i) + '<br>';
            }
            document.getElementById('resultContent').innerHTML = result;
            $('#resultModal').modal('show');
        });

        document.getElementById('startButton').addEventListener('click', function() {
            const fan = document.getElementById('fanImage');
            const button = document.getElementById('startButton');
            if (fan.src.includes('mati')) {
                fan.src = 'images/hidup.gif';
                button.textContent = 'Matikan';
                button.classList.remove('btn-primary');
                button.classList.add('btn-danger');
            } else {
                fan.src = 'images/mati.png';
                button.textContent = 'Hidupkan';
                button.classList.remove('btn-danger');
                button.classList.add('btn-primary');
            }
        });

        document.getElementById('stopKontakButton').addEventListener('click', function() {
            const lamps = ['lamp1', 'lamp2', 'lamp3', 'lamp4', 'lamp5'];
            const button = document.getElementById('stopKontakButton');
            const firstLamp = document.getElementById(lamps[0]);
            const isOn = firstLamp.src.includes('lamp_on');

            lamps.forEach(id => {
                document.getElementById(id).src = isOn ? 'images/lamp_off.png' : 'images/lamp_on.png';
            });

            if (isOn) {
                button.textContent = 'Hidupkan Stop Kontak';
                button.classList.remove('btn-danger');
                button.classList.add('btn-primary');
            } else {
                button.textContent = 'Matikan Stop Kontak';
                button.classList.remove('btn-primary');
                button.classList.add('btn-danger');
            }
        });
    </script>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lampu Paralel</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-color: #f0f0f0;
        }
        .lamp-container {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-top: 50px;
        }
        .lamp {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .bulb {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background-color: gray;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.5);
            margin-bottom: 10px;
        }
        .bulb.on {
            background-color: yellow;
            box-shadow: 0 0 15px yellow;
        }
        button {
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <h1>Simulasi Lampu Paralel</h1>
    <p>Klik tombol di bawah untuk menghidupkan atau mematikan lampu</p>
    <div class="lamp-container">
        <div class="lamp">
            <div class="bulb" id="lampu1"></div>
            <button onclick="toggleLamp('lampu1')">Stop Kontak 1</button>
        </div>
        <div class="lamp">
            <div class="bulb" id="lampu2"></div>
            <button onclick="toggleLamp('lampu2')">Stop Kontak 2</button>
        </div>
        <div class="lamp">
            <div class="bulb" id="lampu3"></div>
            <button onclick="toggleLamp('lampu3')">Stop Kontak 3</button>
        </div>
    </div>
        <div class="lamp">
        <div class="bulb" id="lampu4"></div>
        <button onclick="toggleLamp('lampu4')">Stop Kontak 4</button>
    </div>
</div>
        <div class="lamp">
        <div class="bulb" id="lampu5"></div>
        <button onclick="toggleLamp('lampu5')">Stop Kontak 5</button>
    </div>
</div>

    <script>
        function toggleLamp(lampId) {
            const lamp = document.getElementById(lampId);
            lamp.classList.toggle('on');
        }
    </script>
</body>
</html>

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
                header("Location:db_mahasiswa\index.php");

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