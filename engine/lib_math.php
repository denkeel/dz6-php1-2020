<?php

function sum($a, $b)
{
    return $a + $b;
}

function sub($a, $b)
{
    return $a - $b;
}

function mul($a, $b)
{
    return $a * $b;
}

function div($a, $b)
{
    return $a / $b;
}

function calc($a, $b, $operation)
{
    switch ($operation) {
        case '+':
            return sum($a, $b);
        break;
        case '-':
            return sub($a, $b);
        break;
        case '*':
            return mul($a, $b);
        break;
        case '/':
            return div($a, $b);
            break;
    }
}