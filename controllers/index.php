<?php

include __DIR__ . '/../views/view.php';
include __DIR__ . '/../models/video.php';
include __DIR__ . '/../models/new.php';

function home()
{
	$videos = getVideo();
	$news = getNew();

	display('home', [
		'videos' => $videos,
		'news' => $news,
	]);	
}

