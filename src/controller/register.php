<?php
    try {
        include_once '../database/conn.php';

        $data = [];

        if(isset($_POST['title'])){
            $title = $_POST['title'];
            array_push($data, $title);
        }
        if(isset($_POST['desc'])){
            $desc = $_POST['desc'];
            array_push($data, $desc);
        }
        if(isset($_POST['price'])){
            $price = $_POST['price'];
            array_push($data, $price);
        }
        if(isset($_POST['platform'])){
            $platform = $_POST['platform'];
            array_push($data, $platform);
        }
        if(isset($_POST['played'])){
            $played = $_POST['played'];
            if($played == "Sim"){
                array_push($data, true);
            } else {
                array_push($data, false);

            }
        }
        if(isset($_POST['releaseDate'])){
            $releaseDate = $_POST['releaseDate'];
            array_push($data, $releaseDate);
        }

        $sql = "INSERT INTO game (title, description, price, platform, played, releaseDate) VALUES (?,?,?,?,?,?)";
        $conn->prepare($sql)->execute($data);

        $gameId = $conn->lastInsertId();

        if(isset($_POST['category'])){
            foreach($_POST['category'] as $category ) {
                $sql = "INSERT INTO gameCategory (category, gameId) VALUES (?,?)";
                $conn->prepare($sql)->execute([$category, $gameId]);
            }
        }

        header("location: ../../public/pages/list.php");
    } catch(PDOException $e) {
        echo 'Ocorreu um erro durante a inserção: ' . $e->getMessage();
    }
?>