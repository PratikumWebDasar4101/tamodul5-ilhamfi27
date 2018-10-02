<?php
session_start();
if(!isset($_SESSION['data_mhs'])){
	$data_mhs = array();
} else {
  $data_mhs = $_SESSION['data_mhs'];
}
if (isset($_POST['submit'])) {
	$nim 	= isset($_POST['nim']) ? $_POST['nim'] : "";
	$nama 	= isset($_POST['nama']) ? $_POST['nama'] : "";
  $email 	= isset($_POST['email']) ? $_POST['email'] : "";
  $jenis_kelamin 	= isset($_POST['jenis_kelamin']) ? $_POST['jenis_kelamin'] : "";
  $program_studi 	= isset($_POST['program_studi']) ? $_POST['program_studi'] : "";
  $fakultas 	= isset($_POST['fakultas']) ? $_POST['fakultas'] : "";
  $hobby 	= isset($_POST['hobby']) ? $_POST['hobby'] : "";
  $file 	= isset($_FILES['photo']) ? $_FILES['photo'] : "";
  $file_name = $file['name'];
  $tmp_name = $file['tmp_name'];
  $error = $file['error'];
  $photo_storage = "../multimedia_storage/images/";
  $upload_success = move_uploaded_file($tmp_name, $photo_storage.$file_name);

  $file_success = 0;
  if ($error < 1) {
  	if($upload_success){
      $file_success = 1;
  	} else {
      $file_success = 0;
    }
  } else {
    $file_success = 0;
  }

  if ($file_success < 1) {
    $_SESSION['pesan_error'] = "Upload Foto Gagal";
  } else {
  	$new_data = array(
  				'nim' 	=> $nim,
  				'nama' 	=> $nama,
          'email' => $email,
          'jenis_kelamin' => $jenis_kelamin,
          'program_studi' => $program_studi,
          'fakultas' => $fakultas,
          'hobby' => $hobby,
  				'photo' => $photo_storage.$file_name
  			);
  	array_push($data_mhs, $new_data);
  	$_SESSION['data_mhs'] = $data_mhs;
  }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Data Registrasi</title>
  </head>
  <body>
    <table border="1">
    	<tr>
    		<th>NIM</th>
    		<th>Nama</th>
    		<th>Email</th>
        <th>Jenis Kelamin</th>
    		<th>Fakultas</th>
    		<th>Program Studi</th>
    		<th>Hobby</th>
    		<th>Foto</th>
    	</tr>
    	<?php
    	$data = $_SESSION['data_mhs'];
    	$x = 0;
    	while ($x < count($data)) {
        $hobby = implode(", ", $data[$x]['hobby']);
    	?>
    	<tr>
    		<td><?php echo $data[$x]['nim']; ?></td>
    		<td><?php echo $data[$x]['nama']; ?></td>
    		<td><?php echo $data[$x]['email']; ?></td>
    		<td><?php echo $data[$x]['jenis_kelamin']; ?></td>
    		<td><?php echo $data[$x]['fakultas']; ?></td>
    		<td><?php echo $data[$x]['program_studi']; ?></td>
    		<td><?php echo $hobby; ?></td>
    		<td><img src="<?php echo $data[$x]['photo']; ?>" width="200"></td>
    	</tr>
    	<?php
    	$x++;
    	}
    	?>
    </table>
    <br>
    <a href="registrasi.php">Tambah Data</a>
  </body>
</html>
