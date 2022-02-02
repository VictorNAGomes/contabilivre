<script src="../../public/js/update.js"></script>

<?php
    try {
        include_once '../database/conn.php';
        $id = $_GET['id'];

        $game = $conn->query("SELECT * FROM game WHERE id = " . $id);

        $result = $game->fetchAll(\PDO::FETCH_ASSOC);
       
        $json = json_encode($result);
    }catch(PDOException $e) {
        echo 'Ocorreu um erro durante a listagem: ' . $e->getMessage();
    }

?>

<script>
    var game = '<?php print_r($json); ?>'
    update(game);
</script>