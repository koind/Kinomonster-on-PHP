<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Главная страница</title>
	<meta name="description" content="Киномонстр - это портал о кино" />
	<meta name="keywords" content="фильмы, фильмы онлайн, hd" />
	<link rel="stylesheet" href="/web/css/style.css">
</head>
<body>

	<div class="main">
		
		<div class="header">
			<div class="logo">
				<div class="logo_text">
					<h1><a href="/">КиноМонстр</a></h1>
					<h2>Кино - наша страсть!</h2>
				</div>
			</div>
			
			<div class="menubar">
				
				<ul class="menu">
					<li><a href="/">Главная</a></li>	
					<li><a href="/films/all">Фильмы</a></li>
					<li><a href="/news/all">Новости</a></li>
					<li><a href="/rating/index">Рейтинг фильмов</a></li>
					<li><a href="/contact/index">Контакты</a></li>
				</ul>

			</div>

		</div>

			
		<div class="site_content">
			
			<div class="sidebar_container">
				
				<div class="sidebar">
					<h2>Вход</h2>
					<form method="post" action="/admin/login" id="login">
						
						<input type="text" name="login" placeholder="логин" />
						<input type="password" name="password" placeholder="пароль" />
						<input type="submit" class="btn" value="вход" />					

					</form>
				</div>				

			</div>

			<div class="content">
				
			<?= $content; ?>
				
			</div>

		</div>





		<div class="footer">
			<p>				
				<a href="/">Главная</a> |
				<a href="/films/all">Фильмы</a> |
				<a href="/news/all">Новости</a> |
				<a href="/rating/index">Рейтинг фильмов</a> |
				<a href="/contact/index">Контакты</a>
			</p>
			<p>wh-db.com 2018</p>
		</div>

	</div>
	
</body>
</html>