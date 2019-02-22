<!DOCTYPE html>
<html>
<head>
	<title>Log In Admin</title>
</head>
<center>
<body>
	<h1>Silahkan Log In</h1>
	<form action="<?php echo base_url('login/aksi_login'); ?>" method="post">
		<table>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="username"></td>
			</tr>
			
			<tr>
				<td>NIP</td>
				<td><input type="password" name="password"></td>
			</tr>
			
		</table>
		<br>
		<tr>
				<td></td>
				<td><input type="submit" value="Login"></td>
		</tr>
	</form>
</body>
</center>
</html>



