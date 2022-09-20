<?php
	$title = "Makeup Charm";
	include "include/db.php";
    $id = $_GET['artigo'];
    if (isset($_GET['editar']) and $_GET['editar'] == "ok") {
        $sql = "UPDATE artigos SET titulo = '{$_GET['titulo']}', autor = '{$_GET['autor']}', capa = '{$_GET['capa']}', data = '{$_GET['data']}', categoria = '{$_GET['categoria']}', texto = '{$_GET['texto']}' WHERE id = $id";
        $query = mysqli_query($con, $sql);
        header("Location: index.php");
    }
    $sql = "SELECT * FROM artigos WHERE id = $id";
    $query = mysqli_query($con, $sql);
    $fetch = mysqli_fetch_assoc($query);
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
            <input type="text" name="titulo" id="titulo" class="form-control" value="<?=$fetch["titulo"]?>">
            <label for="capa" class="form-label">Link da capa:</label>
            <input type="text" name="capa" id="capa" class="form-control" value="<?=$fetch['capa']?>">
            <label for="autor" class="form-label">Autor:</label>
            <input type="text" name="autor" id="autor" class="form-control" value="<?=$fetch['autor']?>">
            <label for="data" class="form-label">Data:</label>
            <input type="date" name="data" id="data" class="form-control" value="<?=$fetch['data']?>">
            <label for="categoria" class="form-label">Categoria:</label>
            <select name="categoria" id="categoria" class="form-control">
            <?php
                    if ($fetch['categoria'] == 1) {
                        echo "
                        <option value='1' selected>Mulheres</option>
                        <option value='2'>Homens</option>
                        ";
                    } else {
                        echo "
                        <option value='1'>Mulheres</option>
                        <option value='2' selected>Homens</option>
                        ";
                    }
                ?>
            </select>
            <label for="texto" class="form-label">Texto:</label>
            <textarea name="texto" id="texto" cols="30" rows="10" style="resize: none;" class="form-control"><?=$fetch['texto']?></textarea>
            <input type="hidden" name="artigo" value="<?=$id?>">
            <button type="submit" class="btn btn-success" name="editar" value="ok">Editar</button>
            <a href="index.php" class="btn btn-danger">Voltar</a>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>