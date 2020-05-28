<?php 
    header('Content-Type: text/plain');

    $password = getGETParameter('password');
    $numbers = '0123456789';
    $power = 0;
    if ($password !== null)
    {
  	    $power = 4 * strlen($password);
  	    $upper_Letters = 0;
        $lower_Letters = 0;
   	    $Letters_Numbers = 0;
  	    $number_Amount = 0;
  	    $sub_Str = "";
  	    $sub_Str_In_Count = 0;
  	    for ($i = 0; $i < strlen($password); $i++)
  	    {

  		  if (stripos($numbers, $password[$i]) !== false)
  		  {
            $power += 4;
            $number_Amount++;
  		  }
  		  if (stripos($sub_Str, $password[$i]) === false)
  		  {
  		      $sub_Str = $sub_Str.$password[$i];
  		  }
  		  if (strtoupper($password[$i]) == $password[$i] & stripos($numbers, $password[$i]) === false)
  		  {
            $upper_Letters += 1;
  		  }
  		  if (strtolower($password[$i]) == $password[$i] & stripos($numbers, $password[$i]) === false)
  		  {
  		      $lower_Letters+= 1; 
  		  }
  	  }
    
      $Letters_Numbers = $lower_Letters + $lower_Letters;

  	  for ($i = 0; $i < strlen($sub_Str); $i++)
  	  {

        if (substr_count($password, $sub_Str[$i]) > 1)
        {
      	    $sub_Str_In_Count += substr_count($password, $sub_Str[$i]);
        }
  	  }

  	  $power -= $sub_Str_In_Count;
    
      if ($Letters_Numbers == 0 & $number_Amount !== 0)
      {
          $power -= strlen($password);	
      }

      if ($Letters_Numbers !== 0 & $number_Amount == 0)
      {
          $power -= strlen($password);	
      }

      $power += 2 * (strlen($password) - $lower_Letters);
      $power += 2 * (strlen($password) - $lower_Letters);
    } 

    echo $power;

    function getGETParameter($parameter): ?string 
    {
        return isset($_GET[$parameter]) ? $_GET[$parameter] : null;
    }
