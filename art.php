<?php
    session_start();
include 'koneksi.php';
$sql = "SELECT * FROM berita";
$hasil = mysqli_query($koneksi, $sql);
// $err = '';
// $username = '';
// $rememberme = '';
// get main article content based on ID
$result = mysqli_query($koneksi,"SELECT * FROM berita WHERE idberita = $idberita");
$row = mysqli_fetch_array($result);
// get sidebar article data based on article type
$sidebar_result = mysqli_query($koneksi,"SELECT * FROM berita WHERE type = 'sidebar'");
$sidebar_row = mysqli_fetch_array($sidebar_result);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Halaman Berita</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <style>
.container {
	max-width: 800px;
	margin: 0 auto;
	display: flex;
	flex-direction: row;
	justify-content: space-between;
}
.title {
	text-align: center;
	margin-bottom: 50px;
}
.main-content {
	flex-basis: 70%;
	padding-right: 50px;
}
.sidebar {
	flex-basis

    </style>
	<div class="container">
		<div class="title">
			<h1><?php echo $row['title']; ?></h1>
		</div>
		<div class="content">
			<div class="main-content">
				<p><?php echo $row['content']; ?></p>
			</div>
			<div class="sidebar">
				<h2><?php echo $sidebar_row['title']; ?></h2>
				<img src="<?php echo $sidebar_row['image']; ?>" alt="sidebar image">
				<p><?php echo $sidebar_row['content']; ?></p>
			</div>
		</div>
	</div>
</body>
</html>
