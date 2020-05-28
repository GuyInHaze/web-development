<?php
header("Content-Type: text/plain");

$email = getGETParameter('email');
  
if ($email == null)
{
    echo 'incorrect email data';
} 
else
{
    $fileName = 'data/' . $email . '.txt';
    if (file_exists($fileName))
    {
        $personDataFile = fopen($fileName, 'r');
        while (!feof($personDataFile))
        {
           echo fgets($personDataFile);
        }
    } 
    else
    {
        echo 'such person does not exist';
    }
}
    
function getGETParameter(string $name): ?string
{
    return isset($_GET[$name]) ? $_GET[$name] : null;
}
