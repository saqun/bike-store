<?php

  ob_start(); // turn on output buffering

  // session_start(); // turn on sessions if needed

  // Assign file paths to PHP constants
  // __FILE__ returns the current path to this file
  // dirname() returns the path to the parent directory
  define("PRIVATE_PATH", dirname(__FILE__));
  define("PRIVATE_TELEPHONE", "021 0265 0338");
  define("PRIVATE_EMAIL", 'sakun_yim@yahoo.com');
  
  require_once('private/parsecvs.class.php');
  ?>
  