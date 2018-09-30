<table align="center">
	<form method="post" enctype="multipart/form-data">
		<tr>

			<center>Masukkan Username dan Password<br><br></center>
			<td>Username</td>
			<td>:</td>
			<td><input type="text" name="user"  placeholder="Username"></td>

		</tr>

		<tr>

			<td>Password</td>
			<td>:</td>
			<td><input type="password" name="pass"  placeholder="Password"></td>

		</tr>
<tr>

	<td><center><input type="submit" name="submit" value="SUBMIT"></center></td>

</tr>		
	</form>
</table>	

<?php 
	if (isset($_POST['submit'])) {
		
		$users = array();
		$users['Rizki']="12";
		$users['Rahardi']="11";
		$username = $_POST['user'];
		$password = $_POST['pass'];
			foreach ($users as $usern => $passw) {
				if ($usern == $username && $passw == $password) {
					header("location:form.php");
				}else{
					echo "<center>Mungkin Username atau Password yang anda masukkan salah...</center>";
				}
			}
		
	}
?>