<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table align="center">
	<form method="post" enctype="multipart/form-data">
		<tr>
			<td>NAMA</td>
			<td>:</td>
			<td><input type="text" name="nama" placeholder="Masukkan Nama"></td>
		</tr>

		<tr>
			<td colspan="2">Upload Gambar</td>
			<td><input type="file" name="file"></td>
		</tr>
		
		<tr>
			<td colspan="3" ><input type="submit" name="submit" value="SUBMIT"></td>
		</tr>
	</form>

	</table>
</body>
</html>

<?php 
	if (isset($_POST['submit'])){
		$nama = $_POST['nama'];
		$file = "gbr/".basename($_FILES["file"]["name"]);

		if (move_uploaded_file($_FILES["file"]["tmp_name"], $file )) {
			echo "Sukses";

			$arr = array($nama, $file );
			session_start(); 
			$_SESSION['arr'] = $arr;
			header("location:genre.php");
		}
	}
 ?>