<?php 
session_start();

$host = "localhost";
$username = "root";
$password = "";
$dbname = "AlikovDemo_1G";

$conn = mysqli_connect($host, $username, $password, $dbname);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$FIO = $_POST['FIO'];
	
    $login = $_POST['login'];
	list($last_name, $name, $father_name) = explode(' ', $FIO); 
	
	$phone_num = $_POST['phone_num'];
	$mail = $_POST['mail'];
	$pass1 = $_POST['pass1'];
	$pass2 = $_POST['pass2'];
	
	if ($pass1 == $pass2){
		$query = "INSERT INTO `reg` (`login`, `name`, `last_name`, `father_name`, `phone`, `mail`, `password`, `status`)
		VALUES ('$login', '$name', '$last_name', '$father_name', '$phone_num', '$mail', '$pass1', '0')";
		
		$result = mysqli_query($conn, $query);
		$_SESSION['registered'] = '1';
	} else {
		readfile("reg.html");
	}

    file_put_contents('app.log', "Обработано: $name\n", FILE_APPEND);
}
/**/
readfile("index.html");

exit();
?>