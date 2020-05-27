<?php

  $email = getGETParameter('email');
  
  if ($email == null)
  {
  	echo 'incorrect email data';
  } 
  else
  {
    $filename = 'data/'.$email.'.txt';
    if (file_exists($filename))
    {
      $person_data_file = fopen($filename, 'r');
      while (!feof($person_data_file))
      {
      	echo fgets($person_data_file)."<br/>";
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