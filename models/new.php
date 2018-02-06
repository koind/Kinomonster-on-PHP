<?php

function getNews()
{
	return query("SELECT * FROM news ORDER BY id DESC");
}

function getNew($limit = 2)
{
	return query("SELECT * FROM news ORDER BY id DESC LIMIT " . $limit);
}

function fundInNewsById($id)
{
	return query("SELECT * FROM news WHERE id ='" . $id . "'")[0];
}

function newDelete($id)
{	
	return exic("DELETE FROM news WHERE id = " . $id);	
}

function newCreate($post)
{
	$date = $post['date'] ?? date('d.m.Y');

	$sql = "
		INSERT INTO `news` 
		(`name`, `content`, `date`) 
		VALUES ('" . $post['name'] . "', '" . $post['content'] . "', '" . $date . "');
	";

	return exic($sql);
}

function newChange($id, $post)
{	
	$sql = "
		UPDATE `news` 
		SET `name` = '" . $post['name'] . "', `content` = '" . $post['content'] . "', `date` = '" . $post['date'] . "'
		WHERE id = '". $id ."'
	";

	return exic($sql);
}