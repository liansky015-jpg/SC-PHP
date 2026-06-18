<?php 
require 'db.php';   

if ($_SERVER["REQUEST_METHOD"] === "POST") {     
    $stmt = $pdo->prepare("INSERT INTO services (title, description, icon)                             
    VALUES (:title, :description, :icon)");     
    $stmt->execute([         
        "title"       => $_POST["title"],         
        "description" => $_POST["description"],         
        "icon"        => $_POST["icon"]     
        ]); 
        header("Location: index.php");     
        exit; 
        } 
        ?> 
        <!DOCTYPE html> 
        <html> 
            <head><title>Tambah Layanan</title></head> 
            <body>   
                <h1>Tambah Layanan Baru</h1>   
                <form method="POST">     
                    Judul: <input type="text" name="title" required>
                    <br>     
                    Deskripsi: <textarea name="description"></textarea><br>     
                    Icon: <input type="text" name="icon" placeholder="faglobe"><br>     
                    <button type="submit">Simpan</button>   
                </form> 
            </body> 
        </html>