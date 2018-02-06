<?php

function getAll()
{
	return query("SELECT * FROM videos ORDER BY id DESC");
}

function getVideo($limit = 8)
{
	return query("SELECT * FROM videos ORDER BY id DESC LIMIT " . $limit);
}

function videoDelete($id)
{
	deleteFile($id);
	return exic("DELETE FROM videos WHERE id = " . $id);	
}

function videoCreate($post, $files)
{
	if ($files["image"]["error"] == 0) {
		$imageName = time() . '-' . $files['image']['name'];

		move_uploaded_file($files['image']['tmp_name'], __DIR__ . '/../web/img/' . $imageName);
		$image = $imageName;
	}

	if ($image) {
		$sql = "
			INSERT INTO `videos` 
			(`name`, `description`, `image`, `link`, `year`, `producer`) 
			VALUES ('" . $post['name'] . "', '" . $post['description'] . "', '" . $image . "', '" . $post['link'] . "', '" . $post['year'] . "', '" . $post['producer'] . "');
		";

		return exic($sql);	
	}	
}

function videoChange($id, $post, $files)
{
	if ($files["image"]["error"] == 0) {
		$imageName = time() . '-' . $files['image']['name'];

		move_uploaded_file($files['image']['tmp_name'], __DIR__ . '/../web/img/' . $imageName);
		
		deleteFile($id);

		$addInSql = "`image` = '" . $imageName . "',";
	} else {
		$addInSql = "";
	}		

	$sql = "
		UPDATE `videos` 
		SET `name` = '" . $post['name'] . "', `description` = '" . $post['description'] . "', " . $addInSql . " `link` = '" . $post['link'] . "', `year` = '" . $post['year'] . "', `producer` = '" . $post['producer'] . "'
		WHERE id = '". $id ."'
	";

	return exic($sql);
}

function deleteFile($id)
{
	$imageName = query("SELECT `image` FROM videos WHERE id ='" . $id . "'")[0]['image'];	
	unlink(__DIR__ . '/../web/img/' . $imageName);
}

function fundById($id)
{
	return query("SELECT * FROM videos WHERE id ='" . $id . "'")[0];
}

function getRatingVideos()
{
	return query("SELECT `id`, `name`, `image`, `rating`, `year`, `count_users` FROM videos ORDER BY `rating` DESC");
}

function changeRatingAndCountUsers($videos)
{
	foreach ($videos as $video) {
		$sql = "
			UPDATE `videos` 
			SET `rating` = '" . $video['rating'] . "', `count_users` = '" . $video['count_users'] . "'
			WHERE id = '". $video['id'] ."'
		";

		exic($sql);
	}	
}