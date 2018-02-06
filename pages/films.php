<?php foreach($videos as $video): ?>
<div class="info_film">
	<img src="/web/img/<?= $video['image']; ?>">
	<?= $video['description']; ?>
	<div class="button"><a href="/films/show/<?= $video['id']; ?>">Смотреть</a></div>
</div>
<?php endforeach; ?>