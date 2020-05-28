<?php
header("Content-Type: text/plain");

$email = getGETParameter('email');
$firstName = getGETParameter('first_name');
$lastName = getGETParameter('last_name');
$age = getGETParameter('age');

if ($email == null)
{
    echo 'Incorrect email data';
}
else
{
    $fileName = 'data/' . $email . '.txt';
    if (!file_exists('data/'))
    {
        mkdir('data/', 0777, true);
    }
    $personData  = 'First name = ' . $firstName . "\r\n" . 'Last name = ' . $lastName . "\r\n" . 'Age = ' . $age;
    $personDataFile = fopen($fileName, 'w');
    fwrite($personDataFile, $personData);
    fclose($personDataFile);
}

function getGETParameter(string $name): ?string
{
    return isset($_GET[$name]) ? $_GET[$name] : null;
}
