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

<article style="width: 100%; padding-block: 10px; background-color: #FDCFBC;">
	<img src="favicon/logo.jpg" alt="Logo">
	<h1 style="margin: auto;">Sobre a Makeup Charm</h1>
	<div class="texto">
	<h2>Seja bem-vindo!</h2>
	<p>A <strong>Makeup Charm</strong> é uma marca criada com o intuito de ajudar a tirar certas dúvidas do cotidiano de todos em relação a produtos e cuidados pessoais. Visando em trazer conteúdo para homens e mulheres, independente da faixa etária, além disso buscamos trazer novidades e proliferar relações de respeito e transparência.</p>
	<p>Trabalhamos com muito entusiamo acreditando que o futuro está cheio oportunidades para nós.
	Acompanhem nosso conteúdo nas <strong>redes sociais</strong> abaixo, e explore nosso site, temos certeza que você irá se identificar e adorar nosso conteúdo.
	</p>
	<h2>Nossa visão.</h2>
	<p>Temos um objetivo de servir artigos diários sobre bem-estar, moda, cuidados pessoais sobre pele, cabelos, olhos, etc.</p>
	<h2>Nossos valores.</h2>
	<p>Temos em nossa equipe o compromisso de respeito a todos, e de ajudar os nossos para atingir os objetivos previstos, prezamos a integridade, responsabilidade, qualidade, etc.</p>
	<h2>O futuro.</h2>
	<p>Para o futuro planejamos aumentar e escalar o tamanho total do site, em questão de recursos, funcionalidades e equipe.</p></div>
</article>

<footer style="margin-top: 0;">
        <a href="https://twitter.com" target="_blank" rel="noopener noreferrer"><i class="bi bi-twitter"></i></a>
        <a href="https://facebook.com" target="_blank" rel="noopener noreferrer"><i class="bi bi-facebook"></i></a>
        <a href="https://instagram.com" target="_blank" rel="noopener noreferrer"><i class="bi bi-instagram"></i></a>
        <a href="https://github.com/Drugs/projeto208" target="_blank" rel="noopener noreferrer"><i class="bi bi-github"></i></a>
    </footer>
    <script src="js/script.js"></script>
</body>
</html>