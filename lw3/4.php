<?php
    header("Content-Type: text/plain");

    $email = getGETParameter('email');
    $first_name = getGETParameter('first_name');
    $last_name = getGETParameter('last_name');
    $age = getGETParameter('age');

    if ($email == null)
    {
  	    echo 'Incorrect email data';
    }
    else
    {
  	    $filename = 'data/' . $email . '.txt';
  	if (!file_exists('data/'))
    {
        mkdir('data/', 0777, true);
    }
  	$person_data  = 'First name = ' . $first_name . "\r\n" . 'Last name = ' . $last_name . "\r\n" . 'Age = ' . $age;
  	$person_data_file = fopen($filename, 'w');
  	fwrite($person_data_file, $person_data);
  	fclose($person_data_file);
    }

    function getGETParameter(string $name): ?string
    {
        return isset($_GET[$name]) ? $_GET[$name] : null;
    }
