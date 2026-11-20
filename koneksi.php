<?php

session_start();

$konfig = "mysql:host=localhost;dbname=db_kopi_member";

try {
    $koneksi = new PDO($konfig, 'root', '');
} catch (PDOException $e) {
    $error = $e->getMessage();
}

?>