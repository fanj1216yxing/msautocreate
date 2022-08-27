<?php
$file= DIR . '/..'.$_SERVER["PHP_SELF"];

if(file_exists($file))
{
   return false;
}
else
{
    require_once DIR . '/../index.php';
}
#echo $_SERVER["PHP_SELF"];
