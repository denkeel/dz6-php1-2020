<?php

define('DIR_IMG', '/images');
include __DIR__ . '/../engine/lib_photos.php';

$sql = 'SELECT * FROM photos ORDER BY views DESC';
$imagesArrayDB = mysqli_query($link, $sql) or exit(mysqli_error($link));
$imagesArray = [];
while ($row = mysqli_fetch_assoc($imagesArrayDB)) {
    $imagesArray[] = $row;
}
?>

<?php
    if (!empty($_GET['img_id'])) {
        showImage($link);
        showFeedback($link, $_GET['img_id']);
    } else {
        showGallery($imagesArray);
    };
?>