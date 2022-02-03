<?php
    try {
        include_once '../database/conn.php';
        echo "a";
    }catch(PDOException $e) {
        echo 'Ocorreu um erro durante a listagem: ' . $e->getMessage();
    }

?>