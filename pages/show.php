<style>
	.send select {
		width: 63.89%;
    	margin-bottom: 15px;
	}

	.video_id {
		display: none;
	}
</style>
<h1><?= $video['name']; ?></h1>
				
<iframe width="560" height="315" src="<?= $video['link']; ?>" frameborder="0" allowfullscreen></iframe>


<div class="info_film_page">
	<span class="label">рейтинг: </span><span class="value"><?= $video['rating']; ?> / 10</span>
	<span class="label">год: </span><span class="value"><?= $video['year']; ?></span>
	<span class="label">режиссер: </span><span class="value"><?= $video['producer']; ?></span>
</div>
<hr>	
<h2>Описание <?= $video['name']; ?></h2>
<div class="descriptions_film">
	<img src="/web/img/<?= $video['image']; ?>">
	<?= $video['description']; ?>
</div>



<hr>
<?php if (!empty($reviews)): ?>
<h2>Отзывы об <?= $video['name']; ?></h2>

<?php foreach($reviews as $review): ?>
<div class="reviews">
	<div class="review_name">
		<?= $review['name']; ?>
		<span class="date"><?= $review['date']; ?></span>
	</div>
	<div class="review_text">
		<p><i><b>Отзыв:</b></i> <?= $review['content']; ?></p>
		<p><i><b>Оценка:</b></i> <?= $review['rating']; ?></p>
	</div>
</div>
<?php endforeach; ?>
<?php endif; ?>

<h2>Оставить отзыв</h2>
<?php if (empty($_COOKIE["video_id-" . $video['id']]) && $_COOKIE["video_id-" . $video['id']] !== $video['id']): ?>
<div class="send">	
	<form method="post" action="/films/show/<?= $video['id']; ?>" id="review">
		<input type="text" name="name" placeholder="Ваше имя" required>
		<input type="text" name="video_id" class="video_id" value="<?= $video['id']; ?>" required>
		<textarea name="content" placeholder="Ваш отзыв" required></textarea>
		<label for="select" required>Оцените фильм от 1 до 10:</label>
		<select name="rating" id="select">
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			<option value="4">4</option>
			<option value="5">5</option>
			<option value="6">6</option>
			<option value="7">7</option>
			<option value="8">8</option>
			<option value="9">9</option>
			<option value="10">10</option>
		</select>
		<input class="btn" type="submit" value="отправить">
	</form>
</div>
<?php else: ?>
<p>Вы оставили отзыв.</p>
<?php endif; ?>