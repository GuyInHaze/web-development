<?php

header("Content-Type: text/plain");
  
$ans = true;
foreach($_GET as $key => $value)
{
    if(getBooleanOnIn($value) === false)
    {
        $ans = false;
    }
} 

if($ans)
{
    echo 'yes';
}
else
{
    echo 'no';
}
  
function getBooleanOnIn(string $parametr): ?boolean
{
    $forcheckall = 'abcdefghijklmnopqrstyvwxyz1234567890';
    $symbs = 'abcdefghijklmnopqrstyvwxyz';
    $i = 0;
    $state = true;
    if(stripos($symbs, $parametr[0]) === false & strlen($parametr) != 0)
    {
        $state = false;
    }
    $i++;
    while($i < strlen($parametr))
    {
        if(stripos($forcheckall, $parametr[$i]) === false)
        {
            $state = false;
        }
        $i++;
    }
    return $state; 
}
