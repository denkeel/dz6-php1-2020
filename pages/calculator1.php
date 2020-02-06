<?php
$msg = '';
if (!empty($_GET['res'])) {
    $msg = 'Ответ: ' . $_GET['res'];
}

echo <<<php
    <form method="post" action="?page=4">
        <input name="num1" type="number" placeholder="Число 1">
        <select name="operation" size="1">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="/">/</option>
            <option value="*">*</option>
        </select>
        <input name="num2" type="number" placeholder="Число 2">
        <input type="submit">
    </form>
php;

echo '<hr>' . $msg;
