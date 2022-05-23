<?php
    session_start();
    $url = parse_url($_SERVER['REQUEST_URI']);
    $path = isset($url['path']) ? $url['path'] : '/';

    switch($path){
        case $path === "/tp_revision_POO/":
            include './controlers/controler_article.php';
            break;
    }