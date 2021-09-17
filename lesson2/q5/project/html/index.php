<?php
$about = renderTemplate('templates/about');
$menu = renderTemplate('templates/menu');

echo renderTemplate('templates/layout', $menu, $about);

function renderTemplate($page, $menu = '', $content = '') {
    ob_start();
    include $page . ".php";
    return ob_get_clean();
}