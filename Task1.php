<?php

$text = "The quick brown fox jumps over the lazy dog.";
function wordConvert($text){
   $convertText = strtolower($text);
  $convertResult =  str_replace("brown","red",$text);
    echo "$convertResult";
} 
 wordConvert($text);
 