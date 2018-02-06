<?php

include __DIR__ . '/../views/view.php';
include __DIR__ . '/../models/video.php';
include __DIR__ . '/../models/review.php';

function all()
{	
	$videos = getAll();
	display('films', ['videos' => $videos]);
}

function show($id)
{
	if (!empty($_POST)) {
		$result = reviewCreate($id, $_POST);

		if ($result) {
			redirect('/films/show/' . $id);
		}
	}

	$video = fundById($id);
	$reviews = findReviewsByVideoId($id);

	display('show', [
		'video' => $video,
		'reviews' => $reviews,
	]);
}