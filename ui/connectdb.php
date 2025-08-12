<?php
try{
$pdo = new PDO('mysql:host=localhost;dbname=pos_barcmode_db', 'root', '');

}catch(PDOException $e){
    echo "Connection failed: " . $e->getMessage();
}
?>