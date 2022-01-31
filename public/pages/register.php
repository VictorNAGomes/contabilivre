<?php

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="./public/styles/global.css">
    <title>To do | Cadastro</title>
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
                <a class="nav-link" href="./public/pages/register.php">Cadastrar<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="./public/pages/list.php">Listar<span class="sr-only">(current)</span></a>
            </li>
        </div>
    </nav>
            
        <main class="container">
            <h1>Organize sua agenda</h1>
            <form action="" method="POST">
                <div class="input-label">
                    <label for="title">Nome do exercício</label>
                    <input id="title" type="text">
                </div>

                <div class="input-label">
                    <label for="desc">Descrição</label>
                    <input id="desc" type="textarea">
                </div>

                <div class="input-label">
                    <label for="set">número de series</label>
                    <input id="set" type="number">
                </div>

                <div class="input-label">
                    <label for="rep">número de repetições</label>
                    <input id="rep" type="number">
                </div>

                <div class="input-label">
                    <label for="location">Local</label>
                    <select name="location" id="location">
                        <option value="gym">Academia</option>
                        <option value="house">Casa</option>
                        <option value="outdoor">Ar livre</option>
                    </select>
                </div>

                <div class="input-label">
                    <label for="date">dia de execução</label>
                    <input id="date" type="date">
                </div>

                <div class="input-label">
                    <label>Musculos atingidos</label>
                    <div class="checkbox-option">
                        <input id="chest" type="checkbox">
                        <label for="chest">Peito</label>
                    </div>

                    <div class="checkbox-option">
                        <input id="shoulder" type="checkbox">
                        <label for="shouder">Ombro</label>
                    </div>

                    <div class="checkbox-option">
                        <input id="arm" type="checkbox">
                        <label for="arm">Braço</label>
                    </div>

                    <div class="checkbox-option">
                        <input id="back" type="checkbox">
                        <label for="back">Costas</label>
                    </div>

                    <div class="checkbox-option">
                        <input id="leg" type="checkbox">
                        <label for="leg">Pernas</label>
                    </div>
                </div>
                
                <div class="input-label">
                    <label for="goal">objetivo</label>
                    <div class="radio-option">
                        <input name="goal" id="hypertrophy" type="radio">
                        <label for="hypertrophy">Hipertrofia</label>
                    </div>
                    <div class="radio-option">
                        <input name="goal" id="resistance" type="radio">
                        <label for="resistance">Resitência</label>
                    </div>
                    <div class="radio-option">
                        <input name="goal" id="strength" type="radio">
                        <label for="strength">Força</label>
                    </div>
                </div>

                <div class="input-label">
                    <label for="image">Imagem</label>
                    <input id="image" type="file">
                </div>
                
                <button type="submit">Cadastrar</button>

            </form>
        </main>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>