<table>
	<tr>
		<th></th>
		<th>Фильм</th>
		<th class="center">Год</th>
		<th class="center">Рейтинг</th>
		<th class="center">Количество людей</th>
	</tr>

	<?php  
		$i = 1;
		foreach($videos as $video): 
	?>
	<tr>
		<td class="center"><a href="/films/show/<?= $video['id'] ?>"><img src="/web/img/<?= $video['image'] ?>"></a></td>
		<td><?= $i; ?>. <a href="/films/show/<?= $video['id'] ?>"><?= $video['name'] ?></a></td>
		<td class="center"><?= $video['year'] ?></td>
		<td class="center rating"><?= $video['rating'] ?></td>
		<td class="center rating"><?= $video['count_users'] ?></td>
	</tr>
	<?php 
		$i++;
		endforeach; 
	?>

</table>