<?php
    include_once '../../src/controller/list.php'
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../styles/global.css">
    <link rel="stylesheet" href="../styles/list.css">
    <title>Listar | MyGameList</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="../../index.php">MyGameList</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="form.php">Cadastrar<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link active" href="list.php">Listar<span class="sr-only">(current)</span></a>
                </li>
            </div>
        </div>
    </nav>
    <main class="container">
        <h1 class="title">Jogos Adicionados</h1>
        <div class="games-grid">
        <?php 
            while ($row = $games->fetch()) {
                echo "<div class='card bg-light mb-3 game-card'>";
                echo "<img class='card-img-top' src='../uploads/" . $row['imageName'] . "' alt='Imagem do jogo' />";
                echo "<div class='card-header'><h5 class='card-title'>" . $row['title'] . "</h5>";
                echo "<p>" . $row['description'] . "</p></div>";
                echo "<ul class='list-group list-group-flush'>";
                echo "<li class='list-group-item'>Plataforma: " . $row['platform'] . "</li>";
                echo "<li class='list-group-item'>Já jogou: ";
                echo $row['played'] == true ?  "Sim" : "Não";
                echo "</li>";
                echo "<li class='list-group-item'>Data de lançamento: " . $row['releaseDate'] . "</li   >";
                echo "<li class='list-group-item'>R$" . $row['price'] . ",00</li>";
                echo "<li class='list-group-item'><ul class='categories-ul'>";
                $gameCategories = $conn->query("SELECT * FROM gameCategory WHERE gameId = " . $row['id']);
                while ($category = $gameCategories->fetch()){
                    echo "<li>" . $category["category"] . "</li>";
                }
                echo "</ul></li>";
                echo "</ul>";
                echo "<div class='card-body btns'>";
                echo "<a class='update btn btn-outline-success' href='form.php?id=". $row['id'] ."'>Editar</a>";
                echo "<a class='delete btn btn-outline-danger' href='../../src/controller/delete.php?id=". $row['id'] ."'>Deletar</a>";
                echo "</div>";
                echo "</div>";
            }
        ?>
        </div>
    </main>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>