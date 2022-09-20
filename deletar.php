<?php
	$title = "Makeup Charm";
	include "include/db.php";
    $id = $_GET['artigo'];
    if (isset($_GET['deletar']) and $_GET['deletar'] == "ok") {
        $sql = "DELETE FROM artigos WHERE id = $id";
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
            <input type="text" name="titulo" id="titulo" class="form-control" value="<?=$fetch["titulo"]?>" readonly>
            <label for="capa" class="form-label">Link da capa:</label>
            <input type="text" name="capa" id="capa" class="form-control" value="<?=$fetch['capa']?>" readonly>
            <label for="autor" class="form-label">Autor:</label>
            <input type="text" name="autor" id="autor" class="form-control" value="<?=$fetch['autor']?>" readonly>
            <label for="data" class="form-label">Data:</label>
            <input type="date" name="data" id="data" class="form-control" value="<?=$fetch['data']?>" readonly>
            <label for="categoria" class="form-label">Categoria:</label>
            <?php
                if ($fetch['categoria'] == 1) {
                    echo "
                    <input type='text' name='data' id='data' class='form-control' value='Mulheres' readonly>
                    ";
                } else {
                    echo "
                    <input type='text' name='data' id='data' class='form-control' value='Homens' readonly>
                    ";
                }
            ?>
            <label for="texto" class="form-label">Texto:</label>
            <textarea name="texto" id="texto" cols="30" rows="10" style="resize: none;" class="form-control" readonly><?=$fetch['texto']?></textarea>
            <input type="hidden" name="artigo" value="<?=$id?>">
            <button type="submit" class="btn btn-success" name="deletar" value="ok">Deletar</button>
            <a href="index.php" class="btn btn-danger">Voltar</a>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>