<?php
/*
  made by: mohamed seabeai mohamed
  websit: http://arrogantm.com
  facebook: https://www.facebook.com
  linkdin: in/arrogantm
*/

session_start();
include '../config/config.php';
include '../system/init.php';


//echo 'index php file new from all website';


// run database if work or not
$db->connect();

// run framework class if work or not
//echo $rout->get_msg();
