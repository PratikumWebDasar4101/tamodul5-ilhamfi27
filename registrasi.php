<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
	<body>
		<form action="prosesregis.php" method="POST" enctype="multipart/form-data">
			<table>
				<tr>
					<td valign="top">NIM</td>
					<td><input type="text" name="nim" pattern="[0-9]{10}" title="Harus 10 Digit" required></td>
				</tr>
				<tr>
					<td valign="top">Nama</td>
					<td><input type="text" name="nama" pattern="[A-Za-z ]{1,25}" title="Nama Harus Lebih Dari 1 Karakter dan Kurang Dari 25 Karakter dan Tidak Mengandung Angka" required></td>
				</tr>
				<tr>
					<td valign="top">Email</td>
					<td><input type="email" name="email" required></td>
				</tr>
				<tr>
					<td valign="top">Jenis Kelamin</td>
					<td>
						<input type="radio" name="jenis_kelamin" value="Laki-Laki"> Laki-Laki<br>
						<input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan
					</td>
				</tr>
				<tr>
					<td valign="top">Program Studi</td>
					<td>
						<select name="program_studi">
							<option value="">-- Program Studi --</option>
							<option value="Manajemem Informatika">Manajemem Informatika</option>
							<option value="Manajemen Pemasaran">Manajemen Pemasaran</option>
							<option value="Perhotelan">Perhotelan</option>
							<option value="Komputerisasi Akuntansi">Komputerisasi Akuntansi</option>
							<option value="Teknik Telekomunikasi">Teknik Telekomunikasi</option>
							<option value="Teknik Informatika">Teknik Informatika</option>
							<option value="Teknik Komputer">Teknik Komputer</option>
							<option value="Sistem Multimedia">Sistem Multimedia</option>
						</select>
					</td>
				</tr>
				<tr>
					<td valign="top">Fakultas</td>
					<td>
						<select name="fakultas">
							<option value="">-- Fakultas --</option>
							<option value="FIT">FIT</option>
							<option value="FKB">FKB</option>
							<option value="FEB">FEB</option>
							<option value="FIK">FIK</option>
							<option value="FTE">FTE</option>
							<option value="FRI">FRI</option>
							<option value="FIF">FIF</option>
						</select>
					</td>
				</tr>
				<tr>
					<td valign="top">Hobi</td>
					<td>
						<input type="checkbox" name="hobby[]" value="Membaca">Membaca<br>
						<input type="checkbox" name="hobby[]" value="Menulis">Menulis<br>
						<input type="checkbox" name="hobby[]" value="Memasak">Memasak<br>
						<input type="checkbox" name="hobby[]" value="Mereparasi Barang">Mereparasi Barang<br>
						<input type="checkbox" name="hobby[]" value="Bersepeda">Bersepeda<br>
						<input type="checkbox" name="hobby[]" value="Memancing">Memancing<br>
						<input type="checkbox" name="hobby[]" value="Balapan">Balapan<br>
						<input type="checkbox" name="hobby[]" value="Berenang">Berenang<br>
						<input type="checkbox" name="hobby[]" value="Badminton">Badminton<br>
						<input type="checkbox" name="hobby[]" value="Futsal">Futsal<br>
						<input type="checkbox" name="hobby[]" value="Basket">Basket<br>
					</td>
				</tr>
				<tr>
					<td valign="top">Foto</td>
					<td>
						<input type="file" name="photo">
					</td>
				</tr>
				<tr>
					<td></td>
					<td>
						<input type="submit" name="submit" value="Submit">
					</td>
				</tr>
			</table>
		</form>
	</body>
</html>
