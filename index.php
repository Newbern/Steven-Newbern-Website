<?php
// Allowed Pages
$allowedPages = ['home', 'about', 'projects', 'services', 'contact', '404'];

// Getting Current Page
$page = $_GET['page'] ?? 'home';

// Validating Page
if (!in_array($page, $allowedPages, true)) {
    $page = '404';
}

// Header, Footer, Navigation
$header = "app/templates/header.html";
$footer = "app/templates/footer.html";
$nav = "app/templates/nav.html";

// Page-Specific Files
$content = "app/pages/{$page}.html";

if (!file_exists($content)) {
    $content = "app/pages/{$page}.php";
}

$css = "app/css/{$page}.css";
$js = "app/js/{$page}.js";
$backend = "app/backend/{$page}.php";
$seo = "app/seo/{$page}.html";

// Set HTTP Status Code
if ($page === '404') {
    http_response_code(404);
}

// Include Backend Variables
if (file_exists($backend)) {
    include($backend);
}

// Load Template
include("app/templates/base.php");