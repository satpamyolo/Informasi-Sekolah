<?php
session_start();
include 'koneksi.php';

// Koneksi User Login
$username = $_SESSION['userweb'];
$query = "SELECT*FROM siswa where NIS ='$username'";
$rows = mysqli_query($koneksi, $query);

// $err = '';
// $username = '';
// $rememberme = '';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMA N 8 Kota Ternate</title>
    <link rel="stylesheet" type="text/css" href="css1.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="background.css">
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="script.js"></script>

    <!-- Header Navbar -->
    <!-- Header Navbar -->
    <header>
        <nav class="navbar" style="background-color: #0171BB;">
            <!-- Navbar content -->
            <div class="container mx-1 px-1 py-1" data-aos="fade-down">
                <a class="navbar-brand text-light" href="#"><img style="width: 80px; padding-right: 10px;" src="logo.png" alt=""> SMAN 8 KOTA TERNATE</a>
                <ul class="nav justify-content-end">
                    <div class="dropdown">                        
                        <button class="btn btn-success">
                            <a href="logout.php" style="color:white; text-decoration:none">Log Out</a>
                        </button>

                    </div>
                    <!-- <li class="nav-item">
                        <a class="nav-link text-light" href="Home.html"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                            <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z"/>
                          </svg></a>
                    </li> -->
                </ul>
            </div>
        </nav>
    </header>

    <!-- Container -->
    <div class="container p-5 my-5">
        <div class="row" style="padding-bottom: 50px;">
            <center>
                <img src="<?php $tr = mysqli_fetch_assoc($rows); echo $tr["foto_siswa"]; ?>" class="rounded shadow-1-strong mb-4" alt="Foto Kepsek" width="100px">
                <h3 style="font-weight:bold"><?php echo $tr["Nama_siswa"]; ?></h3>
                <h5 style="color: black"><?php echo $tr["NIS"]; ?> | <?php echo $tr["email"]; ?> </h5>
            </center>
        </div>

        <center>
            <div class="content-profil">
                <h5 style="padding: 10px; color: black; border-bottom: solid black;">Informasi Siswa</h5>
                <div class="row" style="padding: 30px;">
                    <div class="col">
                        <button class="container p-3 rounded-2">
                            <a href="data-diri.php" style="color:black">Data Diri</a>
                        </button>
                    </div>
                    <div class="col">
                        <button class="container p-3 rounded-2">
                            <a href="#" style="color:black">Rekap Nilai</a>
                        </button>
                    </div>
                    <div class="col">
                        <button class="container p-3 rounded-2">
                            <a href="kelola_akun.php" style="color:black">Kelola akun</a>
                        </button>
                    </div>
                </div>

                <div class="row" style="padding: 20px">
                    <div class="col">
                        <button class="container p-3 rounded-2">
                            <a href="tugas.html" style="color:black">Pengumpulan Tugas</a>
                        </button>
                    </div>
                    <div class="col">
                        <button class="container p-3 rounded-2">
                            <a href="Materii.php" style="color:black">Materi</a>
                        </button>
                    </div>
                    <div class="col">
                        <button class="container p-3 rounded-2">
                            <a href="kts1.php" style="color:black">Kartu Siswa</a>
                        </button>
                    </div>
                </div>
                <div class="row" style="padding: 20px">
                    <div class="col">
                        <button class="container p-3 rounded-2">
                            <a href="bantuan.php" style="color:black">Bantuan</a>
                        </button>
                    </div>
                    <div class="col">
                        <button class="container p-3 rounded-2">
                            <a href="Kalender.html" style="color:black">Kalender Akademik</a>
                        </button>
                    </div>
                </div>
            </div>

        </center>

    </div>

</body>

</html>