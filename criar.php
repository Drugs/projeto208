<?php
	$title = "Makeup Charm";
	include "include/db.php";
    if (isset($_GET["criar"]) and $_GET["criar"] == "ok") {
        $sql = "INSERT INTO artigos (titulo, capa, autor, data, categoria, texto) VALUES ('{$_GET["titulo"]}', '{$_GET["capa"]}', '{$_GET["autor"]}', '{$_GET["data"]}', '{$_GET["categoria"]}', '{$_GET["texto"]}')";
        $query = mysqli_query($con, $sql);
        header("Location: index.php");
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$title?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-3">
        <form action="">
            <label for="titulo" class="form-label">Titulo:</label>
            <input type="text" name="titulo" id="titulo" class="form-control">
            <label for="capa" class="form-label">Link da capa:</label>
            <input type="text" name="capa" id="capa" class="form-control">
            <label for="autor" class="form-label">Autor:</label>
            <input type="text" name="autor" id="autor" class="form-control">
            <label for="data" class="form-label">Data:</label>
            <input type="date" name="data" id="data" class="form-control">
            <label for="categoria" class="form-label">Categoria:</label>
            <select name="categoria" id="categoria" class="form-control">
                <option value="1">Mulheres</option>
                <option value="2">Homens</option>
            </select>
            <label for="texto" class="form-label">Texto:</label>
            <textarea name="texto" id="texto" cols="30" rows="10" style="resize: none;" class="form-control"></textarea>
            <button type="submit" class="btn btn-success" name="criar" value="ok">Criar</button>
            <a href="index.php" class="btn btn-danger">Voltar</a>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>