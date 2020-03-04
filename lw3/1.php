<?php
  header("Content-Type: text/plain");
  function getGETParameter($parameter) {
     return isset($_GET[$parameter]) ? $_GET[$parameter] : null;
  };
  $text = getGETParameter('text');
      function removeExtraBlanks($parametr){
  	$i = 0;
  	while ($i < strlen($parametr) & $parametr[$i] == ' ') $i++;
  	while ($i < strlen($parametr)) {
    	 if ($parametr[$i] != ' ') {
      	   echo $parametr[$i];
      	   $i++;
    	 } 
   	 else {
           while ($parametr[$i] == ' ' & $i < strlen($parametr)) $i++;
           if ($i != strlen($parametr)) echo ' ';
         };
        };
       echo '?'; 
     }; 
  echo getGETParameter('text');
  echo "\n";
  echo removeExtraBlanks($text);
  