<?php
	$title = "Makeup Charm";
	include "include/db.php";
	include "include/header.php";
	$carregar = 10;
	$sql = "SELECT * FROM artigos LIMIT 0,$carregar";
	$classehf = "f";
	if (isset($_GET['carregar'])) {
		$carregar = $_GET['carregar'];
		$sql = "SELECT * FROM artigos LIMIT 0,$carregar";
	} 
	if (isset($_GET['artigo'])) {
		$sql = "SELECT * FROM artigos WHERE id = {$_GET['artigo']}";
		$query = mysqli_query($con, $sql);
		$fetch = mysqli_fetch_assoc($query);
		if ($fetch['categoria'] == 1) {
			$classehf = "f";
		} else {
			$classehf = "m";
		}
	}
	if (isset($_GET['sexo'])) {
		if ($_GET['sexo'] == "m") {
			if (isset($_GET['carregar'])) {
				$carregar = $_GET['carregar'];
			}
			$classehf = "m";
			$sql = "SELECT * FROM artigos WHERE categoria = 2 LIMIT 0,$carregar";
		} else if ($_GET['sexo'] == "f") {
			if (isset($_GET['carregar'])) {
				$carregar = $_GET['carregar'];
			}
			$classehf = "f";
			$sql = "SELECT * FROM artigos WHERE categoria = 1 LIMIT 0,$carregar";
		}
	}
	if (isset($_GET['busca'])) {
		$sql = "SELECT* FROM artigos WHERE titulo LIKE '%{$_GET['busca']}%'";
	}
	$query = mysqli_query($con, $sql);
	$fetch = mysqli_fetch_all($query, MYSQLI_ASSOC);
	$total = "SELECT * FROM artigos";
	$total = mysqli_query($con, $total);
	$qntd = mysqli_num_rows($total);
?>

<header>
	<nav class="<?=$classehf?>">
		<a href="index.php">MC</a>
		<div class="menu <?=$classehf?>">
			<form action="" method="get">
				<label for="barra"></label>
				<input type="search" name="busca" id="barra" placeholder="Buscar" autocomplete="off" required>
				<label for="buscar"></label>
				<button type="submit" id="buscar"><i class="bi bi-search lupa"></i></button>
			</form>
			<ul>
				<li><a href="index.php">Inicio</a></li>
				<li><a href="index.php?sexo=f">Mulheres</a></li>
				<li><a href="index.php?sexo=m">Homens</a></li>
				<li><a href="criar.php">Criar</a></li>
				<li><a href="sobre.php">Sobre</a></li>
			</ul>
		</div>
		<i class="bi bi-list" onclick="abrirmenu()"></i>
	</nav>
</header>

<?php
	if (isset($_GET['busca'])) {
		echo '
		<h4 style="border-bottom: 2px solid black; text-align: center; margin-inline: auto; max-width: max-content; font-size: 2em;">Você pesquisou por: "'.$_GET['busca'].'"<h4>
		';
	}
?>
<main>
	<?php
		if (!isset($_GET['artigo'])) {
			foreach ($fetch as $artigo) {
				$data = date_create($artigo['data']);
				$data = date_format($data, "d/m/Y");
				if ($artigo['categoria'] == 1) {
					$categoria = "Mulheres";
					$classe = "f";
				} else {
					$categoria = "Homens";
					$classe = "m";
				}
				echo "
				<article>
					<a href='index.php?artigo={$artigo['id']}'><img src='{$artigo['capa']}'></a>
					<h1><a href='index.php?artigo={$artigo['id']}'>{$artigo['titulo']}</a></h1>
					<div class='info'>
						<h4><i class='bi bi-person-fill'></i>{$artigo['autor']}</h4>
						<h4 class='data'><i class='bi bi-calendar-fill'></i>&nbsp;$data</h4>
						<h4 class='categoria $classe'><a href='index.php?sexo=$classe'>$categoria</a></h4>
					</div>
				</article>
				";
			}
		}
	?>
</main>

<?php
	if (isset($_GET['artigo'])) {
		foreach ($fetch as $artigo) {
			$data = date_create($artigo['data']);
			$data = date_format($data, "d/m/Y");
			if ($artigo['categoria'] == 1) {
				$categoria = "Mulheres";
				$classe = "f";
			} else {
				$categoria = "Homens";
				$classe = "m";
			}
			echo "
			<article>
				<img src='{$artigo['capa']}'>
				<h1>{$artigo['titulo']}</h1>
				<div class='info'>
					<h4><i class='bi bi-person-fill'></i>{$artigo['autor']}</h4>
					<h4><i class='bi bi-calendar-fill'></i>&nbsp;$data</h4>
					<h4 class='categoria $classe'><a href='index.php?sexo=$classe'>$categoria</a></h4>
					<a href='editar.php?artigo={$artigo['id']}'><i class='bi bi-pencil-fill'></i><a>
					<a href='deletar.php?artigo={$artigo['id']}'><i class='bi bi-trash-fill'></i><a>
				</div>
				<div class='texto'>{$artigo['texto']}</div>
			</article>
			";
		}
	}
?>

<?php
	if (!isset($_GET['artigo'])) {
		if ($carregar <= $qntd) {
			if (isset($_GET['sexo']) and $_GET['sexo'] == "m") {
				echo "<a href='index.php?sexo=m&carregar=". $carregar = $carregar + 10 . "' class='${classehf}'>Mostrar mais</a>";
			} else if (isset($_GET['sexo']) and $_GET['sexo'] == "f") {
				echo "<a href='index.php?sexo=f&carregar=". $carregar = $carregar + 10 . "' class='${classehf}'>Mostrar mais</a>";
			} else {
				echo "<a href='index.php?carregar=". $carregar = $carregar + 10 . "' class='${classehf}'>Mostrar mais</a>";
			}
		}
	}
?>

<footer class="<?=$classehf?>">
	<a href="https://twitter.com" target="_blank" rel="noopener noreferrer"><i class="bi bi-twitter"></i></a>
	<a href="https://facebook.com" target="_blank" rel="noopener noreferrer"><i class="bi bi-facebook"></i></a>
	<a href="https://instagram.com" target="_blank" rel="noopener noreferrer"><i class="bi bi-instagram"></i></a>
	<a href="https://github.com/Drugs/projeto208" target="_blank" rel="noopener noreferrer"><i class="bi bi-github"></i></a>
</footer>

<?php
	include "include/footer.php";
?>