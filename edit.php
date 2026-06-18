<?php 
require 'db.php'; 
$id = $_GET["id"];   

if ($_SERVER["REQUEST_METHOD"] === "POST") {     
    $sql  = "UPDATE services               
    SET title = :title,                   
    description = :description,                   
    icon = :icon               
    WHERE id = :id";     
    $stmt = $pdo->prepare($sql);     
    $stmt->execute([         
        "title"       => $_POST["title"],         
        "description" => $_POST["description"],         
        "icon"        => $_POST["icon"],         
        "id"          => $id     
        ]);     
        header("Location: index.php");     
        exit; 
        }   
    $stmt = $pdo->prepare("SELECT * FROM services WHERE id = :id"); 
    $stmt->execute(["id" => $id]); 
    $layanan = $stmt->fetch(PDO::FETCH_ASSOC); 
    
    ?> 
    <!DOCTYPE html> <html> 
        <head><title>Edit Layanan</title></head> 
        <body>   <h1>Edit Layanan</h1>   
        <?php $d = $layanan; 
        ?>   
        <form method="POST">     
            Judul: 
            <input type="text" name="title" value="<?= $d["title"] ?>" required><br>     
            Deskripsi:     
            <textarea name="description"><?= $d["description"] ?></textarea><br>     
            Icon:     
            <input type="text" name="icon" value="<?= $d["icon"] ?>"><br>     
            <button type="submit">Update</button>   
        </form> </body> </html>