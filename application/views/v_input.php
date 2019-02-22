<!DOCTYPE html>
<html>
<head>
	<title>Add Data</title>
</head>
<body>
	<center>
		<h1>Silahkan Tambah Data</h1>
	</center>
	<form action="<?php echo base_url(). 'adddata/tambah_aksi'; ?>" method="post">
		<table style="margin:20px auto;">
			<tr>
				<td>Tangal Datang</td>
				<td><input type="date" name="tgldatang"></td>
			</tr>
			<tr>
				<td>Sasaran</td>
				<td><input type="text" name="saasaranpenghuni"></td>
			</tr>
			<tr>
				<td>Penerima</td>
				<td><input type="text" name="penerimakaryawan"></td>
			</tr>
			<tr>
				<td>Isi Paket</td>
				<td><input type="text" name="isipaket"></td>
			</tr>
            <tr>
				<td>Tanggal Ambil</td>
				<td><input type="text" name="tglambil"></td>
			</tr>
            <tr>
				<td></td>
				<td><input type="submit" value="Tambah"></td>
			</tr>
		</table>
	</form>	
</body>
</html>