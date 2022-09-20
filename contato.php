<?php
	$title = "Makeup Charm";
	include "include/db.php";
	include "include/header.php";
?>

<header>
	<nav>
		<a href="index.php">MC</a>
		<div class="menu">
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

<footer style="position: absolute; bottom: 0;">
        <a href="https://twitter.com" target="_blank" rel="noopener noreferrer"><i class="bi bi-twitter"></i></a>
        <a href="https://facebook.com" target="_blank" rel="noopener noreferrer"><i class="bi bi-facebook"></i></a>
        <a href="https://instagram.com" target="_blank" rel="noopener noreferrer"><i class="bi bi-instagram"></i></a>
        <a href="https://github.com/Drugs/projeto208" target="_blank" rel="noopener noreferrer"><i class="bi bi-github"></i></a>
    </footer>
    <script src="js/script.js"></script>
</body>
</html>