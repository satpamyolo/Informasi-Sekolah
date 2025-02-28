<?php
    session_start();
include 'koneksi.php';

// Koneksi User Login
$username=$_SESSION['userweb'];
$query ="SELECT*FROM siswa join orang_tua on siswa.NIS = orang_tua.id where NIS ='$username'";
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
    <div class="container p-3 my-3" style="border: solid black;">
        <center>
            <div class="foto-profil">
            <img src="<?php $tr = mysqli_fetch_assoc($rows);echo $tr["foto_siswa"]; ?>" class="rounded shadow-1-strong mb-4" alt="Foto Kepsek" width="100px">
            </div>
            <h4><?php echo $tr["Nama_siswa"];?></h4>
            <h5><?php echo $tr['NIS'];?></h5>
        </center>
        <h5 style="color: #0171BB;font-weight: bold;border-bottom: solid black; padding-bottom: 10px;">Data Diri</h5>
        <div class="data">
            <form>
                <div class="form-group">
                    <label for="Nama">Nomor Induk</label>
                    <input type="email" class="form-control mb-2" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="<?php echo $tr['NIS'];?>" readonly>
                </div>
                <div class="form-group">
                    <label for="Nama">Nama Lengkap</label>
                    <input type="email" class="form-control mb-2" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="<?php echo $tr['Nama_siswa'];?>" readonly>
                </div>
                <div class="form-group">
                    <label for="Nama">Tanggal Lahir</label> <br>
                    <input type="text" class="form-control mb-2"   id="tgl-lahir" name="Tanggal Lahir" placeholder="<?php echo $tr['Tanggal_lahir_siswa'];?>" readonly>
                </div>
                <div class="form-group">
                    <label for="Nama">Alamat</label>
                    <textarea class="form-control mb-2" id="exampleFormControlTextarea1" rows="3" readonly><?php echo $tr['Alamat_siswa'];?></textarea>
                </div>
                <div class="form-group">
                    <label for="Nama">No Handphone</label>
                    <input type="email" class="form-control mb-2" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="<?php echo $tr['No_hp_siswa'];?>" readonly>
                </div>
                <div class="form-group">
                    <label for="Nama">Jenis Kelamin</label> <br>
                    <input type="text" class="form-control mb-2" placeholder="<?php echo $tr['Jenis_kelamin'];?>" readonly>
                </div>
            </form>
        </div>
        <h5 style="color: #0171BB;font-weight: bold;border-bottom: solid black; padding-bottom: 10px;">Data Orang Tua / Wali</h5>
        <div class="data">
            <form>
                <div class="form-group">
                    <label for="Nama">Nama Orang Tua</label>
                    <input type="email" class="form-control mb-2" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="<?php echo $tr['Nama'];?>" readonly>
                </div>
                <div class="form-group">
                    <label for="Nama">Tanggal Lahir</label> <br>
                    <input type="text" class="form-control mb-2" id="tgl-lahir" placeholder="<?php echo $tr['Tanggal_lahir'];?>" readonly>
                </div>
                <div class="form-group">
                    <label for="Nama">Pekerjaan</label>
                    <input type="email" class="form-control mb-2" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="<?php echo $tr['Pekerjaan'];?>" readonly>
                </div>
                <div class="form-group">
                    <label for="Nama">No Handphone</label>
                    <input type="email" class="form-control mb-2" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="<?php echo $tr['No_hp'];?>"readonly>
                </div>
            </form>
        </div>
    </div>

    <!-- Footer -->
        <!-- Footer -->
        <div data-aos="fade-up" data-aos-anchor-placement="center-bottom"> 
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
