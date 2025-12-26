<?php

/*
	licensef.php - DISABLED

	License check has been removed from this system.
	This file is kept for reference only.
*/

require_once("include/phprechnung.inc.php");

// Redirect to index page - license check is disabled
Header("Location: $web/index.php?$sessname=$sessid");
exit;

?>
