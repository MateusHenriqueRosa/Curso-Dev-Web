<?php

define('HOST', 'localhost');
define('DBNAME', 'modulo_08');
define('USER', 'root');
define('PASS', '');

try {
    $pdo = new PDO('mysql:host='.HOST.';dbname='.DBNAME, USER, PASS, array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"));
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    echo '<h1>erro ao conectar</h1>';
}

?>
