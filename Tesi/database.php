<?php
    $server = 'localhost';
    $username = 'root';
    $password = '6482';
    $database = 'tutorias';

    try{
        $conn = new PDO("mysql:host=$server;dbname=$database;",$username,$password);
    }
    catch(PDOException $e) {
        die('Connected failed: '.$e->getMessage());
    }
?>