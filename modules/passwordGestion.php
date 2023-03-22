<?php
function createPassword($rawPassword)
{
    $salt = bin2hex(random_bytes(16));
    $hash = hash_pbkdf2("sha512", $rawPassword, $salt, 1000, 64);
    return array("salt" => $salt, "hash" => $hash);
}

function checkPassword($rawPassword, $salt, $hash)
{
    $checkHash = hash_pbkdf2("sha512", $rawPassword, $salt, 1000, 64);
    return $checkHash === $hash;
}