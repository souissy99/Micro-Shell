<?php
// cat.php for  in /home/yass/projetphp/souiss_y
// 
// Made by SOUISSY Yassine
// Login   <souiss_y@etna-alternance.net>
// 
// Started on  Fri Oct 13 16:57:08 2017 SOUISSY Yassine
// Last update Fri Oct 13 19:04:20 2017 SOUISSY Yassine
//

function f_cat($argv)
{
  $i = 1;
  while (isset($argv[$i]))
    {
      if (!file_exists($argv[$i]))
	echo "cat: $argv[$i]: No such file or directory\n";
      else if (is_dir($argv[$i]))
	echo "cat: $argv[$i]: Is a directory\n";
      else if (!is_readable($argv[$i]))
	echo "cat: $argv[$i]: Permission denied\n";		
      else
	{
	$file = fopen($argv[$i], 'r');
      if (filesize($argv[$i]) == 0)
	echo "";
      else
	{
	  echo fread($file, filesize($argv[$i]))."\n";
	  fclose($file);
	}
	}
      ++$i;
    }
}