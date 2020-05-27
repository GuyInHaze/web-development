<?php 
  header('Content-Type: text/plain');

  $password = getGETParameter('password');
  $numbers = '0123456789';
  $power = 0;
  if ($password !== null)
  {
  	$power = 4 * strlen($password);
  	$upperL = 0;
  	$lowerL = 0;
  	$LettersN = 0;
  	$numberAm = 0;
  	$subStr = "";
  	$subStrInCount = 0;
  	for ($i = 0; $i < strlen($password); $i++)
  	{

  		if (strpos($numbers, $password[$i]) !== false)
  		{
          $power += 4;
          $numbersA++;
  		}
  		if (strpos($subStr, $password[$i]) === false)
  		{
  		  $subStr = $subStr.$password[$i];
  		}
  		if (strtoupper($password[$i]) == $password[$i] & strpos($numbers, $password[$i]) === false)
  		{
        $upperL += 1;
  		}
  		if (strtolower($password[$i]) == $password[$i] & strpos($numbers, $password[$i]) === false)
  		{
  		  $lowerL += 1; 
  		}
  	}
    
    $LettersN = $upperL + $lowerL;

  	for ($i = 0; $i < strlen($subStr); $i++)
  	{

      if (substr_count($password, $subStr[$i]) > 1)
      {
      	$subStrInCount += substr_count($password, $subStr[$i]);
      }
  	}

  	$power -= $subStrInCount;
    
    if ($LettersN == 0 & $numbersA !== 0)
    {
      $power -= strlen($password);	
    }

    if ($LettersN !== 0 & $numbersA == 0)
    {
      $power -= strlen($password);	
    }

    $power -= 2 * (strlen($password) - $lowerL);
    $power -= 2 * (strlen($password) - $upperL);
  } 

  echo $power;

  function getGETParameter($parameter): ?string 
  {
    return isset($_GET[$parameter]) ? $_GET[$parameter] : null;
  }