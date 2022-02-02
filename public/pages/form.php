<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../styles/global.css">
    <link rel="stylesheet" href="../styles/register.css">
    <title>To do | Cadastro</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">To Do</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="form.php">Cadastrar<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="list.php">Listar<span class="sr-only">(current)</span></a>
                </li>
            </div>
        </div>
    </nav>
    <main class="container">
        <div class="form-container bg-light">
            <h1 class="title">Adicione seus jogos favoritos</h1>
            <form action="../../src/controller/register.php" method="POST" enctype="multipart/form-data">

                <div class="input-title form-group">
                    <label class="font-weight-bold" for="input-title">Nome do jogo</label>
                    <input class="form-control" type="text" name="title" id="input-title" />
                </div>

                <div class="input-desc form-group">
                    <label class="font-weight-bold" for="desc">Descrição</label>
                    <textarea class="form-control" name="desc" id="desc" /></textarea>
                </div>

                <div class="input-price form-group">
                    <label class="font-weight-bold" for="price">Preço</label>
                    <input class="form-control" type="number" value="0" name="price" id="price" />
                </div>

                <div class="input-platform form-group">
                    <label class="font-weight-bold" for="type">Plataforma</label>
                    <select class="form-control" name="platform" id="platform">
                        <option value="Console">Console</option>
                        <option value="Desktop">Desktop</option>
                        <option value="Mobile">Mobile</option>
                        <option value="Multiplataforma">Multiplataforma</option>
                    </select>
                </div>

                <div class="input-played form-group">
                    <label class="font-weight-bold" for="played">Já jogou?</label>
                    <div class="radio-option">
                        <input type="radio" name="played" id="yes" value="Sim" />
                        <label for="yes">Sim</label>
                    </div>
                    <div class="radio-option">
                        <input type="radio" name="played" id="no" value="Não" />
                        <label for="no">Não</label>
                    </div>
                </div>

                <div class="input-releaseDate form-group">
                    <label class="font-weight-bold" for="releaseDate">Data de lançamento</label>
                    <input class="form-control" type="date" name="releaseDate" id="releaseDate" />
                </div>

                <div class="input-category form-group">
                    <label class="font-weight-bold category-label">Categoria</label>

                    <div class="checkbox-option">
                        <input value="Multijogador" name="category[]" id="Multiplayer" type="checkbox">
                        <label for="multiplayer">Multijogador</label>
                    </div>

                    <div class="checkbox-option">
                        <input value="FPS" name="category[]" id="fps" type="checkbox">
                        <label for="fps">FPS</label>
                    </div>

                    <div class="checkbox-option">
                        <input value="Aventura" name="category[]" id="adventure" type="checkbox">
                        <label for="adventure">Aveventura</label>
                    </div>

                    <div class="checkbox-option">
                        <input value="Ação" name="category[]" id="action" type="checkbox">
                        <label for="action">Ação</label>
                    </div>

                    <div class="checkbox-option">
                        <input value="RPG" name="category[]" id="rpg" type="checkbox">
                        <label for="rpg">RPG</label>
                    </div>

                    <div class="checkbox-option">
                        <input value="Esporte" name="category[]" id="sport" type="checkbox">
                        <label for="sport">Esporte</label>
                    </div>

                    <div class="checkbox-option">
                        <input value="Corrida" name="category[]" id="racing" type="checkbox">
                        <label for="racing">Corrida</label>
                    </div>

                    <div class="checkbox-option">
                        <input value="Simulação" name="category[]" id="simulation" type="checkbox">
                        <label for="simulation">Simulação</label>
                    </div>

                </div>

                <div class="input-image custom-file">
                    <input class="custom-file-input" type="file" name="image" id="image" />
                    <label class="custom-file-label" for="image">Escolha uma imagem</label>
                </div>
                
                <button class="btn btn-dark register btn-lg" type="submit">Cadastrar</button>

            </form>
        </div>
    </main>

    <script src="../js/update.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>

<?php
    if(isset($_GET['id'])) {
        $id = $_GET['id'];
        try {
            include_once '../../src/database/conn.php';
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
        <?php
    }
?>

