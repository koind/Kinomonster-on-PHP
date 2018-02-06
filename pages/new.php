<style>
	.pre {
		white-space: pre-line;
	}
</style>

<div class="posts">
	
	<h2><?= $new['name'] ?></h2>
	<div>Дата: <?= $new['date'] ?></div>
	<div class="posts_content">
		<p class="pre">
			<?= $new['content']; ?>
		</p>
	</div>	

</div>