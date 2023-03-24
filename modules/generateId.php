<?php
function getTimestamp()
{
    $date = new DateTimeImmutable();
    $milli = (int) $date->format('Uv');
    return $milli;
}

function generateRandomNumber()
{
    $number = rand(1, 999);
    $numberString = strval($number);

    while (strlen($numberString) < 3) {
        $numberString = '0' . $numberString;
    }

    return $numberString;
}

function generateId()
{
    return getTimestamp() . generateRandomNumber();
}