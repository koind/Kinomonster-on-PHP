<?php

function findReviewsByVideoId($video_id)
{
	return query("SELECT * FROM reviews WHERE is_work = '1' AND video_id = '". $video_id ."' ORDER BY id DESC");
}

function getAllReviews()
{
	return query("SELECT * FROM reviews ORDER BY id DESC");
}

function reviewCreate($id, $post)
{
	$date = date('d.m.Y');

	$sql = "
		INSERT INTO `reviews` 
		(`name`, `content`, `date`, `video_id`, `rating`) 
		VALUES ('" . $post['name'] . "', '" . $post['content'] . "', '" . $date . "', '" . $post['video_id'] . "', '" . $post['rating'] . "');
	";

	setcookie('video_id-' . $id, $id, strtotime("+1 year"));

	return exic($sql);
}

function reviewDelete($id)
{
	return exic("DELETE FROM reviews WHERE id = " . $id);
}

function reviewChange($id, $post)
{	
	$sql = "
		UPDATE `reviews` 
		SET `is_work` = '" . $post['is_work'] . "'
		WHERE id = '". $id ."'
	";

	return exic($sql);
}

function findReviewById($id)
{
	return query("SELECT id, name, content, is_work FROM reviews WHERE id = '" . $id . "'")[0];
}

function countRating()
{
	$ratings = query("SELECT video_id as id, COUNT(id) as count_users, SUM(rating) as all_sum  FROM reviews WHERE is_work = '1' GROUP BY video_id ORDER BY id DESC");

	foreach ($ratings as $rating) {
		$result[] = [
			'id' => $rating['id'],
			'count_users' => $rating['count_users'],
			'rating' => substr(($rating['all_sum'] * 100) / ($rating['count_users'] * 10), 0, 1),
		];
	}

	return $result;
}