<?php
    try {
        include_once '../../src/database/conn.php';

        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $games = $conn->query("DELETE FROM game WHERE id = " . $id);
        }
        
        header("location: ../../public/pages/list.php");
        
    }catch(PDOException $e) {
        echo 'Ocorreu um erro durante a listagem: ' . $e->getMessage();
    }
?>
