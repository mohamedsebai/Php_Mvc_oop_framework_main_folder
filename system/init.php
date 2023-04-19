<?php
/*
  made by: mohamed seabeai mohamed
  websit: http://arrogantm.com
  facebook: https://www.facebook.com
  linkdin: in/arrogantm
*/
spl_autoload_register(function($class){
  include "classes/{$class}.class.php";
});

$rout = new Rout();
$db = new DBconnect;
