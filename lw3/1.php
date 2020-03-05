<?php
  header("Content-Type: text/plain");

  function getGETParameter($parameter) {
     return isset($_GET[$parameter]) ? (string)$_GET[$parameter] : null;
  };

  function removeExtraBlanks($parametr){
  	$i = 0;
  	while ($i < strlen($parametr) & $parametr[$i] == ' '){
          $i++;
        };
  	while ($i < strlen($parametr)) {
    	 if ($parametr[$i] != ' ') {
      	   echo $parametr[$i];
      	   $i++;
    	 } 
   	 else {
           while ($parametr[$i] == ' ' & $i < strlen($parametr)){
             $i++;
           };
           if ($i != strlen($parametr)){
             echo ' ';
           };
         };
        };
       echo '?';//маркер конца строки, чтобы обозначить обрезанные в конце пробелы 
     }; 

  $text = getGETParameter('text');    
  if($text === null){
  echo 'incorrect data'; 
}else{
  if(strlen($text) != 0){ 
  echo getGETParameter('text'), ' - raw string';
  echo "\n";
  echo removeExtraBlanks($text), ' - converted string';
}else{
  echo 'no data';
};
};  