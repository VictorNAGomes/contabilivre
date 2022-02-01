<?php
    try {
        include_once '../../src/database/conn.php';

        $games = $conn->query("SELECT * FROM game");
    }catch(PDOException $e) {
        echo 'Ocorreu um erro durante a listagem: ' . $e->getMessage();
    }
?>
