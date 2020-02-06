<?php

if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    header('Location: ?page=3');
    exit;
}

$text = clearStr($_POST['text']);
$id = clearStr($_GET['id']);


$sql = "INSERT INTO feedback (id_photo, `text`) VALUES ($id, \"$text\")";
mysqli_query($link, $sql) or exit(mysqli_error($link));

header("Location: ?page=3&img_id=$id");
exit;