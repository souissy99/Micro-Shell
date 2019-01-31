<?php
// echo.php for  in /home/yass/projetphp/souiss_y
// 
// Made by SOUISSY Yassine
// Login   <souiss_y@etna-alternance.net>
// 
// Started on  Fri Oct 13 14:29:06 2017 SOUISSY Yassine
// Last update Fri Oct 13 21:27:53 2017 SOUISSY Yassine
//

function f_echo($str)
{
  $i = 1;
  while (isset($str[$i]))
    {
      echo $str[$i], " ";
    $i++;
    }
  echo "\n";
}