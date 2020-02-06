<?php
$msg = '';
if (!empty($_GET['res'])) {
    $msg = 'Ответ: ' . $_GET['res'];
}

echo <<<php
    <form method="post" action="?page=5">
        <input name="num1" type="number" placeholder="Число 1">
        <input name="num2" type="number" placeholder="Число 2">
        <input name="operation" value="+" type="submit">
        <input name="operation" value="-" type="submit">
        <input name="operation" value="*" type="submit">
        <input name="operation" value="/" type="submit">
    </form>
php;

echo '<hr>' . $msg;