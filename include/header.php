<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$title?></title>
    <link rel="stylesheet" href="../css/header.css">
</head>
<body>
    <header>
        <nav>
            <a href="#">MC</a>
            <div class="menu">
                <form action="" method="get">
                    <label for="barra"></label>
                    <input type="search" name="busca" id="barra" placeholder="Buscar" autocomplete="off" required>
                    <label for="buscar"></label>
                    <button type="submit" id="buscar"><i class="bi bi-search lupa"></i></button>
                </form>
                <ul>
                    <li><a href="#">Inicio</a></li>
                    <li><a href="#">Mulheres</a></li>
                    <li><a href="#">Homens</a></li>
                    <li><a href="#">Contato</a></li>
                    <li><a href="#">Sobre</a></li>
                </ul>
            </div>
            <i class="bi bi-list" onclick="abrirmenu()"></i>
        </nav>
    </header>