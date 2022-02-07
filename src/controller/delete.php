<?php
    try {
        include_once '../../src/database/conn.php';

        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $game = $conn->query("SELECT * FROM game WHERE id = " . $id);
            while ($row = $game->fetch()) {
                unlink('../../public/uploads/' . $row['imageName']);
            }
            $conn->query("DELETE FROM game WHERE id = " . $id);
        }
        
        header("location: ../../public/pages/list.php");
        
    }catch(PDOException $e) {
        echo 'Ocorreu um erro durante a listagem: ' . $e->getMessage();
    }
?>
