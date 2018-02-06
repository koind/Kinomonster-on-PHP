<?php

require_once __DIR__ . '/router.php';
require_once __DIR__ . '/components/model.php';
require_once __DIR__ . '/components/library.php';

$url = trim($_SERVER['REQUEST_URI'], '/');

run($url);
