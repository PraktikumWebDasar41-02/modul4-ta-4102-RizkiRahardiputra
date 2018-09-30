
<!DOCTYPE html>
<html>
<head>
	<title>
	</title>
</head>
<body>
	<center>
		<table>	
			<form method="post">
				<tr>

					MASUKKAN GENRE FILM DAN DESTINASI TRAVELLING: <br><br>

					GENRE:
					<td><input type="checkbox" name="genre[]" value="Horror"></td>
					<td>Horror</td>
				</tr>
				<tr>
					<td><input type="checkbox" name="genre[]" value="Action"></td>
					<td>Action</td>
				</tr>
				<tr>
					<td><input type="checkbox" name="genre[]" value="Drama"></td>
					<td>Drama</td>
				</tr>
				<tr>
					<td><input type="checkbox" name="genre[]" value="Thriller"></td>
					<td>Thriller</td>
				</tr>
				<tr>
					<td><input type="checkbox" name="genre[]" value="Animation"></td>
					<td>Animation</td>
				</tr>
			
		</table><br>

		<table>
			 
				<tr>
					HOBI:
					<td><center><input type="checkbox" name="hobi[]" value="Hangout"></center></td>
					<td>Hangout</td>
				</tr>
				<tr>
					<td><center><input type="checkbox" name="hobi[]" value="Nonton Bioskop"></center></td>
					<td>Nonton Bioskop</td>
				</tr>
				<tr>
					<td><center><input type="checkbox" name="hobi[]" value="Sepakbola"></center></td>
					<td>Sepakbola</td>
				</tr>
				<tr>
					<td><center><input type="checkbox" name="hobi[]" value="Ngegame"></center></td>
					<td>Ngegame</td>
				</tr>
				<tr>
					<td><center><input type="checkbox" name="hobi[]" value="Tidur"></center></td>
					<td>Tidur</td>
				</tr>
							

		</table><br>


		<table>
			 
				<tr>
					TRAVELLING:
					<td><center><input type="checkbox" name="travel[]" value="Bali"></center></td>
					<td>Bali</td>
				</tr>
				<tr>
					<td><center><input type="checkbox" name="travel[]" value="Raja Ampat"></center></td>
					<td>Raja Ampat</td>
				</tr>
				<tr>
					<td><center><input type="checkbox" name="travel[]" value="Pulau Derawan"></center></td>
					<td>Pulau Derawan</td>
				</tr>
				<tr>
					<td><center><input type="checkbox" name="travel[]" value="Pulau Samosir"></center></td>
					<td>Pulai Samosir</td>
				</tr>
				<tr>
					<td><center><input type="checkbox" name="travel[]" value="Labuan Cermin"></center></td>
					<td>Labuan Cermin</td>
				</tr>
				<tr>
				<td><input type="submit" name="submit" value="SUBMIT"></td>
				</tr>
			</form>

		</table><br>

		
	</center>
</body>f
</html>


<?php 
	if (isset($_POST['submit'])){

		session_start();
		$genre = $_POST['genre'];
		$travel = $_POST['travel'];
		$hobi = $_POST['hobi'];
			$_SESSION ['genre'] = $genre;
			$_SESSION ['travel'] = $travel;
			$_SESSION ['hobi'] = $hobi;
			header("location:masuk.php");
		}
	
 ?>