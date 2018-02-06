<div class="posts">
	
	<?php foreach($news as $new): ?>
	<hr>
	<h2> <a href="/news/item/<?= $new['id'] ?>"><?= $new['name'] ?></a> </h2>
	<div>Дата: <?= $new['date'] ?></div>
	<div class="posts_content">
		<p>
			<?= mb_strimwidth($new['content'], 0, 250, "..."); ?>
		</p>
	</div>
	<p><a href="/news/item/<?= $new['id'] ?>">читать</a></p>
	<?php endforeach; ?>

</div>