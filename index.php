<?php 
require 'db.php'; 
$stmt = $pdo->query("SELECT * FROM services ORDER BY id DESC"); 
$layanan = $stmt->fetchAll(PDO::FETCH_ASSOC); 
?> 
<!DOCTYPE html> 
<html> 
    <head><title>Daftar Layanan</title></head> 
    <body>   
        <h1>Daftar Layanan</h1>   
        <a href="tambah.php">+ Tambah Layanan</a>   
        <table border="1" cellpadding="8">     
            <tr><th>ID</th><th>Judul</th><th>Deskripsi</th><th>Aksimu yeahh</th> </tr>     
            <?php foreach ($layanan as $row): ?>     
                <tr> 
                    <td><?= $row["id"] ?></td>       
                    <td><?= $row["title"] ?></td>       
                    <td><?= $row["description"] ?></td>       
                    <td>         
                        <a href="edit.php?id=<?= $row["id"] ?>">Edit rene</a> |         
                        <a href="hapus.php?id=<?= $row["id"] ?>">Hapus rene</a>       
                    </td>    
                </tr>     
                <?php endforeach; 
                ?>   
                </table> 
            </body> 
            </html>