<?php 

try {
	$db = new PDO("mysql:host=localhost;dbname=S_Voice", "root", "abhishek");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e) {
    die($e->getMessage());
}



?>
