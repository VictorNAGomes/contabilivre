<?php
    try {
        include_once '../database/conn.php';
        include_once './sendMessage.php';

        $data = [];
        $msg = "Todos os campos devem ser preenchidos!";

        if(isset($_POST['title'])){
            $title = $_POST['title'];
            array_push($data, $title);
        } else {
            $blank = true;
        }
        if(isset($_POST['desc'])){
            $desc = $_POST['desc'];
            array_push($data, $desc);
        }else {
            $blank = true;
        }
        if(isset($_POST['price'])){
            $price = $_POST['price'];
            array_push($data, $price);
        }else {
            $blank = true;
        }
        if(isset($_POST['platform'])){
            $platform = $_POST['platform'];
            array_push($data, $platform);
        }else {
            $blank = true;
        }
        if(isset($_POST['played'])){
            $played = $_POST['played'];
            if($played == "Sim"){
                array_push($data, true);
            } else {
                array_push($data, false);

            }
        }else {
            $blank = true;
        }
        if(isset($_POST['releaseDate'])){
            $releaseDate = $_POST['releaseDate'];
            array_push($data, $releaseDate);
            $dateSplit = explode("-", $releaseDate);
            $monthName = date("F", mktime(0, 0, 0, $dateSplit[1], 10));
            $date = $monthName . " "  . $dateSplit[2] . " " . $dateSplit[0];
        }else {
            $blank = true;
        }


        if(isset($_GET['id'])) {
            if ($blank == true) {
                echo "a";
                header("location: ../../public/pages/form.php?id=" . $id . "&msg=" . $msg);
            } else {
                $id = $_GET['id'];
                $sql = "UPDATE game SET title = ?, description = ?, price = ?, platform = ?, played = ?, releaseDate = ? WHERE id = " . $id;
                $conn->prepare($sql)->execute($data);

                if(isset($_POST['category'])){
                    $conn->query("DELETE FROM gameCategory WHERE gameId = " . $id);

                    foreach($_POST['category'] as $category ) {
                        $sql = "INSERT INTO gameCategory (category, gameId) VALUES (?,?)";
                        $conn->prepare($sql)->execute([$category, $id]);
                    }
                }
                header("location: ../../public/pages/list.php");
            }
        } else {
            if ($blank == true) {
                header("location: ../../public/pages/form.php?msg=" . $msg);
                echo "a";
            }else {
                if(isset($_FILES['image'])){
                    $ext = strtolower(substr($_FILES['image']['name'],-4));
                    $random = rand(0,100000000000);
                    $imgName = $random . date("Y.m.d-H.i.s") . $ext;
                    $dir = "../../public/uploads/";
                    move_uploaded_file($_FILES['image']['tmp_name'], $dir.$imgName);
                    array_push($data, $imgName);
                }

                $sql = "INSERT INTO game (title, description, price, platform, played, releaseDate, imageName) VALUES (?,?,?,?,?,?,?)";
                $conn->prepare($sql)->execute($data);

                $gameId = $conn->lastInsertId();

                if(isset($_POST['category'])){
                    foreach($_POST['category'] as $category ) {
                        $sql = "INSERT INTO gameCategory (category, gameId) VALUES (?,?)";
                        $conn->prepare($sql)->execute([$category, $gameId]);
                    }
                }
                header("location: ../../public/pages/list.php");
            }
        }


    } catch(PDOException $e) {
        echo 'Ocorreu um erro durante a inserção: ' . $e->getMessage();
    }
?>