<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!doctype html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Teste Ezoom</title>
		<link rel="stylesheet" href="https://bootswatch.com/4/cyborg/bootstrap.min.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
		<style type="text/css">
			html {
				height: 100%;
			}
			body {
				min-height: 100%;
			}
			.footer {
				overflow: hidden;
				position: sticky;
				top: 100%;
			}
			.jumbotron {
				padding: 2rem 1rem;
			}
			.card {
				margin-bottom: 30px;
			}
			.btn .material-icons {
				font-size: inherit;
				transform: scale(1.5) translateY(1px);
			}
			.btn-group-lg .material-icons {
				transform: scale(1.25) translateY(2px);
			}
			.c-inherit {
				color: inherit;
			}
			.c-inherit:focus,
			.c-inherit:hover {
				color: inherit;
			}
		</style>
	</head>
	<body>

		<header class="jumbotron text-center">
			<div class="container">

				<?php if ($this->uri->segment(1) == ''): ?>
					<h1 class="h2">Teste <a class="c-inherit" href="http://www.grupoezoom.com.br/ezoom/" target="_blank" title="Acessar o site da Ezoom">Ezoom</a></h1>
				<?php else: ?>
					<div class="h5 mb-3"><a class="c-inherit" href="<?= base_url(); ?>" title="Ir para a página inicial">Teste Ezoom</a></div>
				<?php endif; ?>

				<?php if ($this->uri->segment(1) == ''): ?>
					<p class="lead">Um <abbr class="initialism" lang="en" title="Create, Read, Update & Delete">CRUD</abbr> básico em <a class="c-inherit" href="https://www.codeigniter.com" target="_blank">CodeIgniter</a>.</p>
				<?php endif; ?>

				<div aria-label="Seções do site" class="btn-group btn-group-lg" role="group">
					<a class="btn btn-primary active" href="<?= site_url('series'); ?>">Séries</a>
					<a aria-label="Adicionar série" class="btn btn-primary" href="<?= site_url('series/inserir'); ?>" title="Adicionar série">
						<i aria-hidden="true" class="material-icons">add</i>
					</a>
					<a class="btn btn-secondary" href="<?= site_url('personagens'); ?>">Personagens</a>
					<a aria-label="Adicionar personagem" class="btn btn-secondary" href="<?= site_url('personagens/inserir'); ?>" title="Adicionar personagem">
						<i aria-hidden="true" class="material-icons">add</i>
					</a>
				</div>

			</div>
		</header>

		<main class="container">
