<?php

function showGallery($photosArray)
{
    foreach ($photosArray as $photo) {

        $srcMin = str_replace('.', '-min.', $photo['src']); // thor.jpg -> thor-min.jpg

        $dir_img = DIR_IMG;
        echo <<<php
    <a href="?page=3&img_id={$photo['id']}"><img src="{$dir_img}/{$srcMin}" alt=""></a>
php;
    }
}

function showImage($link)
{
    $id = (int) $_GET['img_id'];

    $sqlViewIter = 'UPDATE photos SET views = views + 1 WHERE id = ' . $id;
    mysqli_query($link, $sqlViewIter);

    $sqlSelectPhoto = 'SELECT src, views FROM photos WHERE id = ' . $id;
    $row = mysqli_fetch_assoc(mysqli_query($link, $sqlSelectPhoto));
    $src = $row['src'];
    $views = $row['views'];

    echo "<h2><a href=\"?page=3\">Назад</a></h2>";
    echo "<h4>Просмотры: $views</h4 >";

    $dir_img = DIR_IMG;
    echo <<<php
    <img class="big-image" src="{$dir_img}/{$src}" alt="">
php;
}

function showFeedback($link, $id)
{
    $sql = "SELECT `text` FROM feedback WHERE id_photo = $id";
    $feedbacksArrayDB = mysqli_query($link, $sql) or exit(mysqli_error($link));
    $feedbacksArray = [];
    while ($row = mysqli_fetch_assoc($feedbacksArrayDB)) {
        $feedbacksArray[] = $row;
    }

    foreach ($feedbacksArray as $feedback) {
        echo "<p>" . $feedback['text'] . "</p><hr>";
        //var_dump($feedback);
    }

    echo <<<php
    <form method="post" action="?page=6&id={$id}">
        <textarea name="text" rows="5" cols="33"></textarea>
        <input type="submit">
    </form>
php;
}
