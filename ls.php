<?php
// ls.php for  in /home/yass/projetphp/souiss_y
// 
// Made by SOUISSY Yassine
// Login   <souiss_y@etna-alternance.net>
// 
// Started on  Fri Oct 13 09:06:12 2017 SOUISSY Yassine
// Last update Fri Oct 13 21:52:06 2017 SOUISSY Yassine
//

function f_ls($file)
{
  $d = opendir('.'); 
  while ($file = readdir($d))
    {
      if ($file[0] != '.')
	{
	  echo $file . "\n";
	  /*if (is_dir($file))
	    echo $file . "/\n";
	  else if (is_executable($file))
	    echo $file . "*\n";
	  else if (is_link($file))
	  echo $file . "@\n";*/
	}
    }
}