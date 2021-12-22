<?php

    include_once("connect.php");

    /* ---> Select into database <--- */
    $query = "SELECT * FROM pensamentos";

    $stmt = $conn->prepare($query);
    $stmt->execute();

    $pensamentos = $stmt->fetchAll();

    /* ---> Insert into database <--- */
    if(!empty($_POST)){

        $pensamento = trim($_POST["text"]);
        $query = "INSERT INTO pensamentos(pensamentos) VALUES (:pensamento)";

        $stmt = $conn->prepare($query);
        $stmt->bindParam(":pensamento", $pensamento);

        try{
            $stmt->execute();
        }
        catch(PDOException $e){
            $e = $e->getMessage();
            echo "Ocorreu um erro: $e";
        }

        header("Location: ../../index.php");
    }

    /* ---> Delete into database <--- */
    if(isset($_GET["id"])){
        
        $id = $_GET["id"];

        $query = "DELETE FROM pensamentos WHERE id = (:id)";

        $stmt = $conn->prepare($query);
        $stmt->bindParam(":id", $id);

        try{
            $stmt->execute();
        }
        catch(PDOException $e){
            $e = $e->getMessage();
            echo "Ocorreu um erro: $e";
        }

        header("Location: ../../index.php");
    }

    $conn = null;