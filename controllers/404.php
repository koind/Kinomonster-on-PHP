<?php 

function error($message) 
{
	$content = '<h1>' . $message . '</h1>';
	include __DIR__ . '/../layouts/main.php';		
}