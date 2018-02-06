# Kinomonster-on-PHP

Для видео обзора проекта перейдите по ссылке

[Kinomonster на PHP.](https://youtu.be/e4_VQJ_2US4)

Для работы сайта необходим файл .htaccess

Описание htaccess:

RewriteEngine on

# If a directory or a file exists, use it directly
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
# Otherwise forward it to index.php
RewriteRule . index.php