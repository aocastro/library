<?php

    // Declarar as variáveis necessárias para gerar a minha conexão com o banco de dados ....
    $hostmane = "fdb22.awardspace.net";
    $dbname = "2874836_library";
    $username = "2874836_library";
    $password = "Et3cL1br@ry";

    try {
        $pdo = new PDO('mysql:host='.$hostmane.';dbname='.$dbname, $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // echo 'Conexão realizada com sucesso!!!';
    } catch (PDOException $e) {
        echo 'Error: '.$e->getMessage();
    }