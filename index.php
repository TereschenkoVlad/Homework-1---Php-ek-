<?php

$a = 2;
$b = 3;
$c = 45;
$number = 6;
$sqrt = 5;
$bigNumber = 625;

function plus($a, $b)
{
    return $a + $b;
}

function minus($a, $b)
{
    return $a - $b;
}

function multiplication($a, $b)
{
    return $a * $b;
}

function division($a, $b)
{
    return $a / $b;
}

function getSinus($c)
{
    return sin($c);
}

function getCosine($c)
{
    return cos($c);
}

function customSqrt($number, $sqrt)
{
    $result = $number;
    for ($i=0; $i < $sqrt-1; $i++) {
        $result = $result * $number;
    }

    return $result;
}

function customRoot($bigNumber)
{
    for ($i=0; $i < $bigNumber / 2; $i++) {
        if ($i * $i === $bigNumber) {
            break;
        }
    }

    return $i;
}

function getFactorial($number)
{
    return ($number != 1) ? $number * getFactorial($number - 1) : 1;
}

echo '<p>MathRoot '.$bigNumber.': '.customRoot($bigNumber).'</p>';
echo '<p>'.$number.'^'.$sqrt.': '.customSqrt($number, $sqrt).'</p>';
echo '<p>factorial '.$number.': '.getFactorial($number).'</p>';

