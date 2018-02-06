<h1>Новые фильмы</h1>

<div class="films_block">
	<?php foreach($videos as $video): ?>
	<a href="/films/show/<?= $video['id']; ?>"><img src="/web/img/<?= $video['image']; ?>"></a><?= $val; ?>
	<?php endforeach; ?>
</div>

<div class="posts">
	
	<?php foreach($news as $new): ?>
	<hr>
	<h2> <a href="/news/item/<?= $new['id']; ?>"><?= $new['name']; ?></a> </h2>
	<div class="posts_content">
		<p>
			<?= mb_strimwidth($new['content'], 0, 170, "..."); ?>
		</p>
	</div>
	<p><a href="/news/item/<?= $new['id']; ?>">читать</a></p>
	<?php endforeach; ?>

</div>
