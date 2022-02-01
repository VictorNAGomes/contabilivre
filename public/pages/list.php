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
    <link rel="stylesheet" href="./public/styles/global.css">
    <title>To Do</title>
</head>
<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">To Do</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="register.php">Cadastrar<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="list.php">Listar<span class="sr-only">(current)</span></a>
            </li>
        </div>
    </nav>
            
        <main class="container">
            <h1>Jogos Adicionados</h1>
            <?php 
                    while ($row = $games->fetch()) {
                        echo "<div class='card'>";
                        echo "<img class='card-img-top' src='../uploads/" . $row['imageName'] . "' alt='Imagem do jogo' />";
                        echo "<div class='card-body'>";
                        echo "<h5 class='card-title'>" . $row['title'] . "</h5>";
                        echo "<p>" . $row['description'] . "</p>";
                        echo "<p>Plataforma: " . $row['platform'] . "</p>";
                        echo "<p>Já jogou: ";
                        echo $row['played'] == true ?  "Sim" : "Não";
                        echo "</p>";
                        echo "<p>Data de lançamento: " . $row['releaseDate'] . "</p>";
                        echo "<p>R$" . $row['price'] . ",00</p>";
                        echo "<a class='update' href='../../src/controller/edit.php?id=". $row['id'] ."'>Editar</a>";
                        echo "<a class='update' href='../../src/controller/delete.php?id=". $row['id'] ."'>Deletar</a>";
                        echo "</div>";
                        echo "</div>";
                    }
                ?>
        </main>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>