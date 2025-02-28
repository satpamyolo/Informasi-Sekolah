<?php
session_start();
require_once('koneksi.php');

if (isset($_POST['judul']) && isset($_POST['tanggal'])) {
    // Mengambil nilai input judul dan tanggal dari form
    $judul = $_POST['judul'];
    $tanggal = $_POST['tanggal'];
    $isi = $_POST['isi'];

    // Menyimpan judul dan tanggal ke dalam database
    $sql = "INSERT INTO pengumuman (judul, tanggal, isi) VALUES ('$judul', '$tanggal', '$isi')";
    $qry = mysqli_query($koneksi, $sql);
    if($qry) {
        echo '<script>alert("Data berhasil di upload");</script>';
    }
    else {
        // Query gagal dijalankan
        echo '<script>alert("Data gagal dijalankan!");</script>';
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Pengumuman</title>
    <link rel="stylesheet" type="text/css" href="">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }

        h1 {
            color: #333;
            text-align: center;
        }

        form {
            max-width: 800px;
            margin: 0 auto;
            padding: 50px;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        table {
            width: 100%;
        }

        td {
            padding: 5px;
        }

        label {
            font-weight: bold;
        }

        textarea,
        input[type="file"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #1983d3;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        input[type="submit"]:hover {
            background-color: #3da2ef;
        }

        .button-container {
            display: flex;
            justify-content: flex-end;
        }
    </style>
</head>
<body>

    
    <form action="" method="post" enctype="multipart/form-data">
        <h1>Upload Pengumuman</h1>
        <br>
        <table>
            <tr>
                <td><label for="judul">Judul</label></td>
                <td><textarea name="judul" rows="1" cols="50"></textarea></td>
            </tr>
            <tr>
                <td><label for="isi">Isi</label></td>
                <td><textarea name="isi" rows="4" cols="50"></textarea></td>
            </tr>
        </table>
        <input type="hidden" id="tanggal" name="tanggal">
        <br>
        <div class="button-container">
        <input type="submit" name="uploadfilesub" value="Upload" />
        </div>
    </form>

</body>
<script>
        // Mengisi nilai tanggal saat submit form
        window.onload = function() {
            var inputTanggal = document.getElementById("tanggal");
            var currentDate = new Date();
            var formattedDate = currentDate.toISOString().substr(0, 10);
            inputTanggal.value = formattedDate;
        };
</script>
</html>



