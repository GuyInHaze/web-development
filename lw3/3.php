<?php 
header('Content-Type: text/plain');

$password = getGETParameter('password');
$numbers = '0123456789';
$power = 0;
if ($password !== null)
{ 
    $power = 4 * strlen($password);
    $upperLetters = 0;
    $lowerLetters = 0;
    $lettersNumber = 0;
    $numberAmount = 0;
    $subStr = "";
    $subStrInCount = 0;
    for ($i = 0; $i < strlen($password); $i++)
    {
        if (stripos($numbers, $password[$i]) !== false)
        {
            $power += 4;
            $numberAmount++;
        }
        if (stripos($subStr, $password[$i]) === false)
        {
            $subStr = $subStr.$password[$i];
        }
        if (strtoupper($password[$i]) == $password[$i] & stripos($numbers, $password[$i]) === false)
        {
            $upperLetters += 1;
        }
        if (strtolower($password[$i]) == $password[$i] & stripos($numbers, $password[$i]) === false)
        {
            $lowerLetters+= 1; 
        }
    }

    $lettersNumber = $lowerLetters + $upperLetters;

    for ($i = 0; $i < strlen($subStr); $i++)
    {
        if (substr_count($password, $subStr[$i]) > 1)
        {
            $subStrInCount += substr_count($password, $subStr[$i]);  
        }
    }

    $power -= $subStrInCount;
    
    if ($lettersNumber == 0 & $numberAmount !== 0)
    {
        $power -= strlen($password);	
    }
    if ($lettersNumber !== 0 & $numberAmount == 0)
    {
        $power -= strlen($password);	
    }

    $power += 2 * (strlen($password) - $lowerLetters);
    $power += 2 * (strlen($password) - $upperLetters);
} 

echo $power;

function getGETParameter($parameter): ?string 
{
    return isset($_GET[$parameter]) ? $_GET[$parameter] : null;
}
    $power += 2 * (strlen($password) - $lowerLetters);
    $power += 2 * (strlen($password) - $upperLetters);
} 

echo $power;

function getGETParameter($parameter): ?string 
{
    return isset($_GET[$parameter]) ? $_GET[$parameter] : null;
}
