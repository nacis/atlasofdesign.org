<?php
/**
 * FUNctions File yay!
**/

/* Defining the functions directory */
define("FUN", get_template_directory() . "/functions");

/* Bring those files into this file, which is automatically read by Wordpress */
require_once FUN . "/general.php";
require_once FUN . "/customizer.php";
require_once FUN . "/post-maps.php";

require_once FUN . "/theme/options.php";