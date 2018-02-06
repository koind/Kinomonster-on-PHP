<?php

include __DIR__ . '/../views/view.php';
include __DIR__ . '/../models/video.php';

function index()
{	
	$videos = getRatingVideos();
	display('rating', ['videos' => $videos]);	
}