#!/usr/bin/env php
<?php
// main.php for  in /home/yass/projetphp/souiss_y
// 
// Made by SOUISSY Yassine
// Login   <souiss_y@etna-alternance.net>
// 
// Started on  Fri Oct 13 09:34:25 2017 SOUISSY Yassine
// Last update Fri Oct 13 22:13:31 2017 SOUISSY Yassine
   //

include_once("ls.php");
include_once("pwd.php");
include_once("cd.php");
include_once("eccho.php");
include_once("cat.php");
include_once("env.php");
include_once("setenv.php");
include_once("unsetenv.php");
include_once("clear.php");
error_reporting(0);

$glo = $_SERVER;
$str = array();
$instruc = "";

echo " !#<SHELL 2.0>#!\n";

while ($instruc != "exit")
  {
    $instruc = readline("$> ");
    $instruc = trim($instruc);
    $str = split(" ", $instruc, 20);
    $funct = "f_".$str[0];
	
    if (function_exists($funct))
      {
	if (isset($str[1]))
	  $funct($str);
	else
	  $funct();
      }
    else if ($str[0] != "exit")
      {
	echo "$str[0]: command not found\n";
      }
  }