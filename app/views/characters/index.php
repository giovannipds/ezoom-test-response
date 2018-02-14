<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<?php if (isset($_SESSION['success_message'])): ?>
	<div class="alert alert-success alert-dismissible fade show" role="alert">
		<p class="lead mb-0"><?= $_SESSION['success_message']; ?></p>
		<button aria-label="Fechar alerta" class="close" data-dismiss="alert" type="button">
			<span aria-hidden="true">&times;</span>
		</button>
	</div>
<?php endif; ?>

<?php if (count($characters)): ?>
	<div class="row">
		<?php foreach ($characters as $character): ?>
			<div class="col-sm-6 col-md-4 col-lg-3">
				<div class="card">
					<h2 class="card-header h5">
						<a class="c-inherit" href="<?= site_url('personagem/' . $character['slug']); ?>" title="Ver personagem"><?= $character['name']; ?></a>
						<small class="d-block text-muted"><?= $character['tv_show_name']; ?></small>
					</h2>
					<a href="<?= site_url('personagem/' . $character['slug']); ?>" title="Ver personagem">
						<img alt="<?= 'Foto do personagem ' . $character['name']; ?>" class="card-img-top" src="<?= $character['image_url']; ?>">
					</a>
					<div class="card-body">
						<div class="row">
							<div class="col-6">
								<a aria-label="Excluir personagem" href="<?= site_url('personagens/deletar/' . $character['slug']); ?>" class="btn btn-outline-danger" title="Excluir personagem">
									<span aria-hidden="true" class="material-icons">delete_forever</span>
								</a>
							</div>
							<div class="col-6 text-right">
								<a href="<?= site_url('personagens/editar/' . $character['slug']); ?>" class="btn btn-secondary">Editar</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		<?php endforeach; ?>
	</div>
<?php else: ?>
	<p class="lead text-center">Não há personagens cadastrados, experimente adicionar alguns.</p>
<?php endif; ?>
