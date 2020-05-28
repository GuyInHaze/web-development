<?php

header("Content-Type: text/plain");
$text = getGETParameter('text');    
if($text === null)
{
    echo 'incorrect data'; 
}
else
{
    if(strlen($text) != 0)
    { 
        echo getGETParameter('text'), ' - raw string';
        echo "\n";
        echo removeExtraBlanks($text), ' - converted string';
    }
    else
    {
        echo 'no data';
    }
} 
 
function getGETParameter(string $parameter): ?string 
{
    return isset($_GET[$parameter]) ? (string)$_GET[$parameter] : null;
}

function removeExtraBlanks(string $parametr): ?string
{
    $i = 0;
    while ($i < strlen($parametr) & $parametr[$i] == ' ')
    {
        $i++;
    }
    while ($i < strlen($parametr)) 
    {
        if ($parametr[$i] != ' ')
        {
      	    echo $parametr[$i];
      	    $i++;
    	} 
   	else 
        {
            while ($parametr[$i] == ' ' & $i < strlen($parametr))
            {
                $i++;
            }
            if ($i != strlen($parametr))
            {
                echo ' ';
            }
        }
     }
    echo '?';//÷òîáû îáîçíà÷èòü îáðåçàííûå â êîíöå ïðîáåëû 
} 
