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
    <link rel="stylesheet" href="./public/styles/landing.css">
    <title>MyGameList</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="index.php">MyGameList</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="./public/pages/form.php">Cadastrar<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="./public/pages/list.php">Listar<span class="sr-only">(current)</span></a>
                </li>
            </div>
        </div>
    </nav>
            
    <main class="container">
        <div class="card">
            <div class="card-header">
                <h1 class="card-title">Adicione seus jogos favoritos</h1>
            </div>
            <div class="card-body">
                <p>Mantenha sua lista de jogos organizadas e fique sabendo dos lançamentos dos seus jogos favoritos com o MyGameList</p>
                <p>Comece agora: </p>
                <a class="btn btn-dark" href="./public/pages/form.php">Cadastrar</a>
            </div>
        </div>
    </main>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async=""></script>
    <script>
        window.OneSignal = window.OneSignal || [];
        OneSignal.push(function() {
            OneSignal.init({
            appId: "afea1b54-70cb-4459-b4ba-24c6d307ac9e",
            safari_web_id: "",
            notifyButton: {
                enable: true,
            },
            });
        });
    </script>
</body>
</html>