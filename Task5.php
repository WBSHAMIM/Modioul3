<?php

function generatePassword($length)
{
  $characters  = 'AbCdEfGhIjKLMIPQUR156485!@#$%^&*';
  return substr(str_shuffle($characters ), 0, $length);
}
  echo generatePassword(12);
