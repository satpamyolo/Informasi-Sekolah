<?php
    session_start();
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMA N 8 Kota Ternate</title>
    <link rel="stylesheet" type="text/css" href="styleL.css">
    <link rel="stylesheet" type="text/css" href="background.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <style>
        .login-form {
        height: 500px;
        width: 430px;
        padding: 0 35px;
        background-color: white;
        border: none;
        position: relative;
        }
    </style>
</head>
<body>
    <!-- Header Navbar -->
    <header>
        <nav class="navbar" style="background-color: #0171BB;">
            <!-- Navbar content -->
            <div class="container mx-1 px-1 py-1" data-aos="fade-down">
                <a class="navbar-brand text-light" href="#"><img style="width: 80px; padding-right: 10px;" src="logo.png" alt=""> SMAN 8 KOTA TERNATE</a>
                <ul class="nav justify-content-center">
                    <li class="nav-item">
                        <a class="nav-link text-light" href="Dashboardd.php">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <div class="dropdown">
                            <button type="button" class="btn dropdown" data-bs-toggle="dropdown" style="color: white;">
                               Profil
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-lg-start">
                              <li><a class="dropdown-item" href="VisiMisii.php">Visi Misi</a></li>
                              <li><a class="dropdown-item" href="Sejarah.php">Sejarah</a></li>
                              <li><a class="dropdown-item" href="Makna_logo.php">Logo</a></li>
                              <li><a class="dropdown-item" href="Sarana.php">Sarana</a></li>
                              <li><a class="dropdown-item" href="Kurikulum.php">Kurikulum</a></li>
                              <li><a class="dropdown-item" href="adiwiyata.html">Adiwiyata</a></li>
                            </ul>
                            
                        </div>                          
                    </li>
                    <li class="nav-item">
                        <div class="dropdown">
                            <button type="button" class="btn dropdown" data-bs-toggle="dropdown" style="color: white;">
                               Publikasi
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-lg-start">
                              <li><a class="dropdown-item" href="Berita.php">Berita</a></li>
                              <li><a class="dropdown-item" href="pengumuman.php">Pengumuman</a></li>
                              <li><a class="dropdown-item" href="Download.php">Jurnal</a></li>
                              <li><a class="dropdown-item" href="prestasi.php">Prestasi</a></li>
                              <li><a class="dropdown-item" href="galeri.php">Galeri</a></li>
                            </ul>
                        </div>                          
                    </li>
                    <li class="nav-item">
                        <div class="dropdown">
                            <button type="button" class="btn dropdown" data-bs-toggle="dropdown" style="color: white;">
                               Informasi
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-lg-start">
                              <li><a class="dropdown-item" href="ppdb.php">PPDB</a></li>
                              <li><a class="dropdown-item" href="Info_Kelas.php">Informasi Kelas</a></li>
                              <li><a class="dropdown-item" href="sdm.php">Informasi SDM</a></li>
                              <li><a class="dropdown-item" href="informasi_mitra.php">Informasi Mitra</a></li>
                              <li><a class="dropdown-item" href="perpustakaan.php">Informasi Perpustakaan</a></li>
                              <li><a class="dropdown-item" href="peraturan.php">Peraturan</a></li>
                              <li><a class="dropdown-item" href="pelanggaransaksi.php">Sanksi</a></li>
                            </ul>
                        </div>                          
                    </li>
                    <li class="nav-item">
                        <div class="dropdown">
                            <button type="button" class="btn dropdown" data-bs-toggle="dropdown" style="color: white;">
                               Organisasi
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-lg-start">
                              <li><a class="dropdown-item" href="osis.php">Osis</a></li> <!--Belom-->
                              <li><a class="dropdown-item" href="mpk.html">MPK</a></li>
                            </ul>
                        </div>                          
                    </li>
                    <li class="nav-item">
                        <div class="dropdown">
                            <button type="button" class="btn dropdown" data-bs-toggle="dropdown" style="color: white;">
                               <svg xmlns="http://www.w3.org/2000/svg" width="21" height="20" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
                                </svg>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-lg-start">
                              <li><a class="dropdown-item" href="eskul.php">Ekstrakurikuler</a></li>
                              <li><a class="dropdown-item" href="aspirasi.php">Aspirasi</a></li>
                              <li><a class="dropdown-item" href="denah.html">Denah</a></li>
                              <li><a class="dropdown-item" href="infopembayaran.html">Info Pembayaran</a></li>
                            </ul>
                        </div>                          
                    </li>
                  </ul>
                <ul class="nav justify-content-end">
                <div class="dropdown">
                            <button type="button" class="btn dropdown" data-bs-toggle="dropdown" style="color: white;">
                            <a class="nav-link text-light" href="Home.html">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                            </svg></a>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-lg-start">
                              <li><a class="dropdown-item" href="LoginGuru.php">Login Guru</a></li>
                              <li><a class="dropdown-item" href="LoginSiswa.php">Login Siswa</a></li>
                            </ul>
                        </div>        
                </ul>
            </div>
        </nav>
    </header>

    <div class="container">
    <div class="row">
        <div class="col-md-7">
        <figure class="figure">
            <img src="pict\lottie-player ⏵ Img - Lottie animation ⏵ SVG.png" alt="Students&Teacher">
            <figcaption class="figure-caption" style="width:650px">
                Komunitas ini mewadahi warga sekolah dan alumni untuk berinteraksi dengan media sosial
                sekolah, untuk Siswa,Guru, dan pegawai Sekolah silahkan meminta Akun kepada admin
                sekolah dan untuk Alumni juga dapat meminta Akun kepada admin sekolah dan mulailah berinteraksi dengan sekolah
                tercinta. Alumni juga dapat berkontribusi untuk memberikan pengalaman dan informasi
                lowongan kerja bagi adik-adik tercinta.
            </figcaption>
        </figure>
        </div>
        <div class="col-md-2 mt-5 py-5">
        <div class="card shadow bg-white rounded" style="width: 27rem;">
        <div class="card login-form">
            <div class="card-header">
                <h2 class="card-title text-primary">Login Guru</h2>
                <h4 class="card-title text-success">SMA N 8 Kota Ternate</h4>
                </div>               
            <div class="card-body">
              <form action="" method="post" role="form">
                <h6 class="card-subtitle">Silahkan masukkan akun Anda</h6><br>
                <div class="mb-4">
                  <label for="exampleInputEmail1" class="form-label">NIK*</label>
                  <input type="text" class="form-control" name="fusername" id="" aria-describedby="" placeholder="Your NIK">
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Password*</label>
                  <input type="password" class="form-control" name="fpassword" id="" placeholder="Min 8 character">
                </div>
                <!-- <div class="d-flex justify-content-between">
                    <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Remember me</label>
                    </div>
                </div> -->
                <div class="d-grid mt-5">
                    <button type="submit" name="fmasuk" class="btn btn-primary btn-login">Login</button>
                </div>
              </form>
            </div>
          </div>
        </div>
    </div>
    </div>
    </div>

    <?php 
        if (isset($_POST['fmasuk'])) {
            $username = $_POST['fusername'];
            $password = $_POST['fpassword'];
            $qry = mysqli_query($koneksi, "SELECT * FROM login_guru WHERE NIK = '$username' AND password = '$password'");
            $cek = mysqli_num_rows($qry);
            if ($cek==1){   
                $_SESSION['userGuru']=$username;
                echo '<script language = "Javascript">
                alert("Anda berhasil login!"); document.location="dashboard_guru.php";</script>';
            } else {
                echo '<script language = "Javascript">
                alert("Username dan Password Salah! Silahkan Login Kembali."); document.location="LoginGuru.php";</script>';
            }
        }
    ?>
     <!-- Footer -->
     <div data-aos="fade-up"
    data-aos-anchor-placement="center-bottom"> 
    <footer class="footer mt-auto py-3" style="background-color: #294A70;" >
        <div class="container">
            <div class="container text-left text-light mb-3">
                <h5>Kontak</h5>
                <hr style="width: 70px; size: 6;">
            <p>
                Alamat : Kasturian, Kec. Kota Ternate Utara, Kota Ternate, Maluku Utara <br>
                Phone : - <br>
                E-mail : info@sman8tte.sch.id <br>
            </p>
             <br>
            </div>
        </div>
    </footer>
    <footer class="footer mt-auto py-3" style="background-color: #15305B;">
        <div class="container">
            <div class="container text-center text-light mb-3">
                <div class="row">
                  <div class="col">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-youtube" viewBox="0 0 16 16">
                        <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z"/>
                      </svg>
                    <a href="https://www.youtube.com/@smanegeri8kotaternate192">Youtube</a>
                  </div>
                  <div class="col">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                        <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
                      </svg>
                    <a href="https://www.instagram.com/sman8kotaternate/">Instagram</a>
                  </div>
                  <div class="col">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                        <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                      </svg>
                    <a href="https://www.facebook.com/pages/Sman-8-Kota-Ternate/990401890993535">Facebook</a>
                  </div>
                </div>
             <br>
              Copyright @ 2023 SMAN 8 Kota Ternate. All rights reserved.
        </span>
        </div>
      </footer>
    </div>
      <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
      <script>
        AOS.init();
      </script>
</body>
</html>
