<?php
session_start();
$data = array(
			array(
				"user_id" => "10001",
				"username" => "admin",
				"password" => "admin",
				"name" => "Ilham",
				"level" => "admin"
			),
			array(
				"user_id" => "20001",
				"username" => "ilham",
				"password" => "ilham",
				"name" => "Fadhilah",
				"level" => "user"
			)
		);
if (isset($_POST['login'])) {
  $username = isset($_POST['username']) ? $_POST['username'] : "";
  $password = isset($_POST['password']) ? $_POST['password'] : "";
  $a = 0;
  $data_valid = 0;
  while ($a < count($data)) {
    if ($username == $data[$a]['username'] && $password == $data[$a]['password']) {
      $_SESSION['user_id'] = $data[$a]['user_id'];
      $_SESSION['username'] = $data[$a]['username'];
      $_SESSION['name'] = $data[$a]['name'];
      $_SESSION['level'] = $data[$a]['level'];

      $data_valid = 1;
      break;
    }
    $a++;
  }
  if ($data_valid > 0) {
    header('location: registrasi.php');
  }
  else {
    echo "Username atau Password Salah";
  }
}
?>
