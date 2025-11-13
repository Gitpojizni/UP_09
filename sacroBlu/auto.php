<?php 
session_start();
// $_SESSION['registered'] = '0';

$host = "localhost";
$username = "root";
$password = "";
$dbname = "AlikovDemo_1G";

$conn = mysqli_connect($host, $username, $password, $dbname);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $login = $_POST['login'];
	$password = $_POST['password'];
	
	$query = "SELECT * FROM `reg` WHERE `login`='$login' AND `password`='$password'";
	
	$result = mysqli_query($conn, $query);
	$arra = mysqli_fetch_array($result);
	// print_r($arra[0]);
	
	if ($arra[1] == $login AND $arra[7] == $password){
		$_SESSION['registered'] = '1';
		header("Location: index.php");
	} else {
		header("Location: exception.php");
	}

    file_put_contents('app.log', "Обработано: $name\n", FILE_APPEND);
}

exit();
?>