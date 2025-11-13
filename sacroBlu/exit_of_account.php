<?php 
session_start();
$_SESSION['registered'] = '0';

header('Location: index.php');
?>