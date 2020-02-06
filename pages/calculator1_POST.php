<?php

include __DIR__ . '/../engine/lib_math.php';

if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    header('Location: ?page=1');
    exit;
}

$num1 = clearStr($_POST['num1']);
$num2 = clearStr($_POST['num2']);
$operation = clearStr($_POST['operation']);

$res = calc($num1, $num2, $operation);

header("Location: ?page=1&res=" . $res);
exit;