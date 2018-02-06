<?php

function redirect($url)
{
	header('Location: ' . $url);
}

function debug($item)
{
	echo '<pre>';
	var_dump($item);
	die;
}