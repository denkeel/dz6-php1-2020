<?php
    include __DIR__ . '/engine/db.php';
    include __DIR__ . '/engine/lib.php';

    $pageId = 1;
if (!empty($_GET['page'])) {
    $pageId = $_GET['page'];
}
$pagesInfo = include 'config/pagesInfo.php';
$page = 'main.php';
if (!empty($pagesInfo[$pageId])) {
    $page = $pagesInfo[$pageId];
}

ob_start();
include __DIR__ . '/pages/' . $page;
$content = ob_get_clean();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<style>
    .big-image {
        max-width: 100%;
        max-height: 100%;
    }
</style>

<body>

<ul>
    <li><a href="?page=1">Калькулятор 1</a></li>
    <li><a href="?page=2">Калькулятор 2</a></li>
    <li><a href="?page=3">Фотографии с отзывами</a></li>
</ul>

<? echo $content;?>