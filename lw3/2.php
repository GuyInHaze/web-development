<?php
  header("Content-Type: text/plain");
  
  function getBooleanOnIn($parametr){
   $forcheckall = 'abcdefghijklmnopqrstyvwxyz1234567890';
   $symbs = 'abcdefghijklmnopqrstyvwxyz';
   $i = 0;
   $state = true;
   if(stripos($symbs, $parametr[0]) === false & strlen($parametr) != 0)$state = false;
   $i++;
   while($i < strlen($parametr)){
     if(stripos($forcheckall, $parametr[$i]) === false)$state = false;
     $i++;
   };
   return $state;
};
   $ans = true;
   foreach($_GET as $key => $value){
    if(getBooleanOnIn($key) === false)$ans = false;
};
  if($ans) echo 'yes';
  else echo 'no';
