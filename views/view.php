<?php 

function render($template, $data, $layout)
{
    ob_start();
    foreach ($data as $prop => $value) {
        $$prop = $value;
    }
    include $template;
    $content = ob_get_contents();
    ob_end_clean();

    ob_start();
    include $layout;        
    $page = ob_get_contents();
    ob_end_clean();

    return $page;
}

function display($page, $data = [], $layout = 'main')
{
    $layout_path = __DIR__ . '/../layouts/' . $layout . '.php';
	$page_path = __DIR__ . '/../pages/' . $page . '.php';

    if (!file_exists($layout_path)) {
        route_error('Нет такого layout:' . $layout);
        exit;
    } elseif (!file_exists($page_path)) {
        route_error('Нет такой страницы: ' . $page);
        exit;
    }

    echo render($page_path, $data, $layout_path);
}
 
