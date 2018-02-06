<?php

include __DIR__ . '/../views/view.php';
include __DIR__ . '/../models/new.php';

function all()
{	
	$news = getNews();
	display('news', ['news' => $news]);	
}

function item($id)
{
	$new = fundInNewsById($id);
	display('new', ['new' => $new]);	
}