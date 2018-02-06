<?php

session_start();

include __DIR__ . '/../views/view.php';
include __DIR__ . '/../models/video.php';
include __DIR__ . '/../models/new.php';
include __DIR__ . '/../models/user.php';
include __DIR__ . '/../models/review.php';

/* === identification === */
function identification()
{
	if (empty($_SESSION['user'])) {
		redirect('/');
	}
}

function login()
{
	if (!empty($_POST)) {
		$login = $_POST['login'];
		$password = $_POST['password'];

		$user = getUsers();
		$user_login = $user['login'];
		$user_password = $user['password'];

		if ($login == $user_login) {
			if ($password == $user_password) {
				$_SESSION['user'] = $user_login;
				redirect('/admin/index');
			} else {				
				display('login', ['error' => 'Неверный пароль']);
			}
		} else {			
			display('login', ['error' => 'Неверный логин']);
		}

	} else {		
		display('login', ['error' => 'Данные не были переданы. Попробуйте еще раз!']);
	}	
}

function logout()
{
	unset($_SESSION['user']);
	redirect('/');
}
/* === /identification === */


function index()
{
	identification();

	display('admin_index', [], 'admin');	
}

/* === VIDEO === */
function videos()
{
	identification();

	$videos = getAll();	

	display('admin_videos', [
		'videos' => $videos,
	], 'admin');	
}

function video_view($id)
{
	identification();

	$video = fundById($id);
	display('video_view', ['video' => $video], 'admin');
}

function video_change($id)
{
	identification();

	if (!empty($_POST)) {
		$result = videoChange($id, $_POST, $_FILES);

		if ($result) {
			redirect('/admin/videos');
		}
	}

	$video = fundById($id);
	display('video_change', ['video' => $video], 'admin');
}

function video_delete($id)
{
	identification();

	if (videoDelete($id)) {
		redirect('/admin/videos');
	}
}

function video_create()
{
	identification();

	if (!empty($_POST) && !empty($_FILES)) {
		$result = videoCreate($_POST, $_FILES);

		if ($result) {
			redirect('/admin/videos');
		}
	}

	display('video_create', [], 'admin');
}
/* === /VIDEO === */


/* === NEWS === */
function news()
{
	identification();

	$news = getNews();	

	display('admin_news', [
		'news' => $news,
	], 'admin');	
}

function news_view($id)
{
	identification();

	$new = fundInNewsById($id);
	display('new_view', ['new' => $new], 'admin');
}

function news_delete($id)
{
	identification();

	if (newDelete($id)) {
		redirect('/admin/news');
	}
}

function news_create()
{
	identification();

	if (!empty($_POST)) {
		$result = newCreate($_POST);

		if ($result) {
			redirect('/admin/news');
		}
	}

	display('new_create', [], 'admin');
}

function news_change($id)
{
	identification();

	if (!empty($_POST)) {
		$result = newChange($id, $_POST);

		if ($result) {
			redirect('/admin/news');
		}
	}

	$new = fundInNewsById($id);
	display('new_change', ['new' => $new], 'admin');
}
/* === /NEWS === */

/* === USERS === */
function users()
{
	identification();

	$user = getUsers();
	display('admin_users', ['user' => $user], 'admin');
}

function user_change($id)
{
	identification();

	if (!empty($_POST)) {
		$result = userChange($id, $_POST);

		if ($result) {
			redirect('/admin/users');
		}
	}

	$user = getUsers();	
	display('user_change', ['user' => $user], 'admin');
}
/* === /USERS === */

/* === REVIEWS === */
function reviews()
{
	identification();

	$reviews = getAllReviews();
	display('admin_reviews', ['reviews' => $reviews], 'admin');
}

function reviews_delete($id)
{
	identification();

	if (reviewDelete($id)) {
		redirect('/admin/reviews');
	}
}

function reviews_change($id)
{
	identification();

	if (!empty($_POST)) {
		$result = reviewChange($id, $_POST);

		if ($result) {
			redirect('/admin/reviews');
		}

		$res = countRating();
		changeRatingAndCountUsers($res);
	}

	$review = findReviewById($id);	
	display('review_change', ['review' => $review], 'admin');
}
/* === /REVIEWS === */