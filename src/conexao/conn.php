<?php

    // Declarar as variáveis necessárias para gerar a minha conexão com o banco de dados ....
    $hostmane = "sql101.epizy.com";
    $dbname = "epiz_28839334_library";
    $username = "epiz_28839334";
    $password = "1lplvcR2bqjtusU";

    try {
        $pdo = new PDO('mysql:host='.$hostmane.';dbname='.$dbname, $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // echo 'Conexão realizada com sucesso!!!';
    } catch (PDOException $e) {
        echo 'Error: '.$e->getMessage();
    }