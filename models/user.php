<?php

function getUsers()
{
	return query("SELECT * FROM users")[0];
}

function userChange($id, $post)
{
	$sql = "
		UPDATE `users` 
		SET `login` = '" . $post['login'] . "', `password` = '" . $post['password'] . "'
		WHERE id = '". $id ."'
	";

	return exic($sql);
}