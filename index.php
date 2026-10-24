<?php
// Allowed Pages
$allowedPages = ['home', 'about', 'projects', 'services', 'contact', '404'];

// Getting current page
$page = $_GET['page'] ?? '';

// Validating page
if (!in_array($page, $allowedPages)) {
    $page = 'home';
}

// Header, Footer, Navigation
$header = "app/templates/header.html";
$footer = "app/templates/footer.html";
$nav = "app/templates/nav.html";


// Including Page-specific content
// Checking Content
$content = "app/pages/{$page}.html";
if (!file_exists($content)) {
    $content = "app/pages/{$page}.php";
}
$css = "app/css/{$page}.css";
$js = "app/js/{$page}.js";
$backend = "app/backend/{$page}.php";
$seo = "app/seo/{$page}.html";

// Including the Backend Variables before loading the template
if (file_exists($backend)) {
    include($backend);
}
// Loading the Template
include("app/templates/base.php");

