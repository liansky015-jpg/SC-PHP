<?php 
$host     = "localhost"; 
$dbname   = "lian"; 
$username = "root"; 
$password = ""; // password dikosongkan sesuai catatan default Laragon (lihat Pertemuan 4)   

try {     
    $dsn = 
    "mysql:host=$host;dbname=$dbname;charset=utf8mb4"; 
    $pdo = new PDO($dsn, $username, $password);     
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
    } catch (PDOException $e) {     
        die("Koneksi database gagal: " . $e->getMessage()); 
    } ?>