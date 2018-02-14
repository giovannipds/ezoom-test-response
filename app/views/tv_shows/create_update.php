<?= validation_errors(); ?>

<?php $exists = isset($tv_show); ?>

<div class="row">
	<div class="col-md-10 offset-md-1 col-lg-6 offset-lg-3">
		<?= form_open(current_url()); ?>
			<div class="form-group">
				<label class="sr-only" for="name">Nome</label>
				<input aria-describedby="nameHelpBlock" class="form-control-lg form-control" id="name" name="name" placeholder="Nome" required type="text" value="<?= $exists ? $tv_show['name'] : ''; ?>">
				<span class="form-text" id="nameHelpBlock">
					<abbr title="Exemplo">Ex.</abbr>: <span lang="en">The Big Bang Theory</span>
				</span>
			</div>
			<div class="form-group">
				<label class="sr-only" for="image_url">Endereço da Imagem</label>
				<input aria-describedby="imageUrlHelpBlock" class="form-control-lg form-control" id="image_url" name="image_url" placeholder="Endereço da Imagem" required type="url" value="<?= $exists ? $tv_show['image_url'] : ''; ?>">
				<span class="form-text" id="imageUrlHelpBlock">
					<abbr title="Exemplo">Ex.</abbr>: <a class="c-inherit" href="http://via.placeholder.com/666x1000" target="_blank">http://via.placeholder.com/666x1000</a>
				</span>
			</div>
			<div class="form-group">
				<label class="sr-only" for="youtube_embed_url">Endereço do Vídeo YouTube para incorporar</label>
				<input aria-describedby="youTubeEmbedUrlHelpBlock" class="form-control-lg form-control" id="youtube_embed_url" name="youtube_embed_url" placeholder="Endereço do Vídeo YouTube para incorporar" required type="url" value="<?= $exists ? $tv_show['youtube_embed_url'] : ''; ?>">
				<span class="form-text" id="youTubeEmbedUrlHelpBlock">
					<abbr title="Exemplo">Ex.</abbr>: <a class="c-inherit" href="https://www.youtube.com/embed/LFH8g6--j-o" target="_blank">https://www.youtube.com/embed/LFH8g6--j-o</a>
				</span>
			</div>
			<div class="form-group">
				<label class="sr-only" for="short_description">Descrição Curta</label>
				<textarea class="form-control-lg form-control" id="short_description" name="short_description" placeholder="Descrição Curta" required rows="4"><?= $exists ? $tv_show['short_description'] : ''; ?></textarea>
			</div>
			<div class="row">
				<div class="col-md-5 offset-md-7">
	    			<button class="btn btn-primary btn-block btn-lg mb-3" type="submit"><?= $exists ? 'Atualizar' : 'Inserir'; ?></button>
	    		</div>
    		</div>
		</form>
	</div>
</div>
