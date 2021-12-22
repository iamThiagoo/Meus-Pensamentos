<?php 

    $host = "localhost";
    $dbname = "pensamentos";
    $user = "root";
    $psw = "";

    try{
        $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $psw);
    }
    catch(PDOException $e){
        $e = $e->getMessage();
        echo "Ocorreu um erro: $e";
    }