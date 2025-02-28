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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="background.css">
    <style>
      label{
        font-weight: bold;
        color: white;
        background-color: red;
        padding: 5px 10px;
        border-radius: 5px;
      }
    </style>
</head>
<body>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
<?php
                        // If submit button is clicked
                        if (isset($_POST['submit']))
                        {
                          // get name from the form when submitted
                          $name = $_POST['name'];
                          $ket = $_POST['keterangan'];                    
 
                          if (isset($_FILES['pdf_file']['name']))
                          {  
                          // If the ‘pdf_file’ field has an attachment
                            $file_name = $_FILES['pdf_file']['name'];
                            $file_tmp = $_FILES['pdf_file']['tmp_name'];
                             
                            // Move the uploaded pdf file into the pdf folder
                            move_uploaded_file($file_tmp,"./pdf/".$file_name);
                            // Insert the submitted data from the form into the table
                            $insertquery = "INSERT INTO pdf_data(judul,keterangan,filename) VALUES('$name','$ket','$file_name')";
                             
                            // Execute insert query
                            $iquery = mysqli_query($koneksi, $insertquery);     
 
                                if ($iquery)
                               {                            
                    ?>                                             
                                  <div class=
                                "alert alert-success alert-dismissible fade show text-center">
                                    <a class="close" data-dismiss="alert" aria-label="close">
                                      ×
                                    </a>
                                    <strong>Success!</strong> Data submitted successfully.
                                  </div>
                                <?php
                                }
                                else
                                {
                                ?>
                                  <div class=
                                "alert alert-danger alert-dismissible fade show text-center">
                                    <a class="close" data-dismiss="alert" aria-label="close">
                                      ×
                                    </a>
                                    <strong>Failed!</strong> Try Again!
                                  </div>
                                <?php
                                }
                            }
                            else
                            {
                              ?>
                                <div class=
                                "alert alert-danger alert-dismissible fade show text-center">
                                  <a class="close" data-dismiss="alert" aria-label="close">
                                      ×
                                  </a>
                                  <strong>Failed!</strong> File must be uploaded in PDF format!
                                </div>
                              <?php
                            }// end if
                        }// end if
                    ?>  
<div class="container py-5">
			<div class="col-lg-5 col-md-8 mx-auto shadow border bg-white p-4 rounded">
				<nav class="navbar navbar-dark bg-primary">
          <div class="container">
            <a class="navbar-brand" href="#">Form Upload Jurnal SMAN 8 KOTA TERNATE</a>
          </div>
				</nav>
				<br>
				<form method="post" enctype="multipart/form-data">
					<div id="form_alerts"></div>
					<div class="form-group mb-3">
						<label for="nama" class="form-label">Judul</label>
						<input type="text" name="name" class="form-control" placeholder="Masukan Judul" required>
            </div>
            <div class="form-group mb-3">
            <label for="subjek" class="form-label">Deskripsi</label>
						<input type="text" class="form-control" name="keterangan" placeholder="Masukkan Keterangan" required>
            </div>
						<div class="form-group mb-3">
							<label for="uploadFile" class="form-label">Upload File</label>
              <input type="file" name="pdf_file" class="form-control" accept=".pdf" title="Upload PDF" required>
            </div>
            <div class="form-group"> <button type="submit" class="btn btn-primary btn-block" name="submit" value="Submit">SUBMIT FILE</button>
		        </div>
					</div>
				</form>
			</div>
	</div>
  <!-- <div class="container">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">Kode</th>
                <th scope="col">Judul</th>
                <th scope="col">Keterangan</th>
                <th scope="col">Hapus</th>
              </tr>
            </thead>
            <tbody>
            <?php
					    $selectQuery = "select * from pdf_data";
					    $squery = mysqli_query($koneksi, $selectQuery);
              if(isset($_GET['ID'])){
             
                mysqli_query($koneksi, "delete from pdf_data where id='$_GET[ID]'");
                echo "Data Terhapus";
                echo '<script language = "Javascript">document.location="Upload.php";</script>';
               
              }
					    while (($result = mysqli_fetch_assoc($squery))) {
				    ?>
				        <tr>
				        <td><?php echo $result['id']; ?></td>
				        <td><?php echo $result['judul']; ?></td>
                <td><?php echo $result['keterangan']; ?></td>
				        <td><a href='?ID=<?php echo $result['id']?>' onclick="return confirm('Yakin hapus data?')" class="btn btn-danger">Hapus</a></td>
				        </tr>
               
				<?php
					}
				?>
            </tbody>
          </table>
    </div> -->
    
</body>
</html>
