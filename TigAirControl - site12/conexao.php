<?php
    $dsn = 'mysql:host=MYSQL5014.site4now.net;dbname=db_9f9dea_airweb;charset=utf8';
    $usuario = '9f9dea_airweb';
    $senha = 'Bidy061989';

    try {
        $PDO = new PDO($dsn, $usuario, $senha);

        //echo "Conectado com sucesso";

    } catch(PDOException $erro) {

        echo $erro->getMessage();
        exit();
    }
?>
