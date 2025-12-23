<?php

/*
	phprechnung.inc.php

	phpRechnung - is easy-to-use Web-based multilingual accounting software.
	Copyright (C) 2001 - 2018 Edy Corak < edy at loenshotel dot de >

	This program is free software; you can redistribute it and/or modify
	it under the terms of the GNU General Public License as published by
	the Free Software Foundation; either version 2 of the License, or
	(at your option) any later version.

	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.

	You should have received a copy of the GNU General Public License
	along with this program; if not, write to the Free Software
	Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
*/

if ('phprechnung.inc.php' === basename($_SERVER['SCRIPT_FILENAME'])) {
	exit('Sorry, direct access not allowed!');
}

if (version_compare(PHP_VERSION, '5.2', '<'))
	exit("I'm sorry, this release of phpRechnung needs PHP-Version 5.2 or greater.
	Your PHP-Version: ".PHP_VERSION."\n\n");

ini_set("session.use_trans_sid", "0");

@session_start();
$sessname = session_name();
$sessid = session_id();

// Turn on different linkbars after lines ( default "25" )
//
$MultiBar = "25";

// Please don't change $root, $admingroup_1, $admingroup_2 and $admingroup_3
//
$root = "admin";

// Root
//
$admingroup_1 = "1";

// Manager
//
$admingroup_2 = "2";

// Bookkeeping
//
$admingroup_3 = "3";

// Language selection
//
require_once("language.inc.php");

// For more information about
// ADOdb and supported databases
// see /include/adodb/docs/ or
// http://adodb.sourceforge.net/#docs
//
require_once("adodb5/adodb.inc.php");

require_once("dbconf.php");

// Connect to database ( default mysql )
// The SQL needs adaptions in order to
// work with other databases
//
function DBConnect() {
	global $db;
	$db = ADONewConnection('mysqli');
	$db->autoRollback = true;
	$db->PConnect(_DBHOST, _DBUSER, _DBPASS, _DBNAME) or die($db->ErrorMsg());
	//$db->Execute("SET sql_mode = ''");
	//$db->Execute("set names 'utf8'");
	$SQL = "SET 
    character_set_results    = 'utf8mb4',
    character_set_client     = 'utf8mb4', 
    character_set_connection = 'utf8mb4',
    character_set_database   = 'utf8mb4', 
    character_set_server     = 'utf8mb4',
    names = 'utf8'";
$db->execute($SQL);
}

// Close database connection
//
function DBClose() {
	global $db;
	$db->Close() or $db->ErrorMsg();
}

// Include data from setting table
//
require_once("company_settings.inc.php");

// Get current date / time
//
$CurrentDateTime = date('Y-m-d H:i:s');

$CurrentDate = date('d.m.Y');

// Date format - htable.tpl
//
$Strftime = strftime('%A, %d. %B %Y %H:%M %Z');

// Change this to "1" if you want to use PEAR Mail::Interface
// or "" to use the PHP mail() function
// Please Note PEAR::Mail is not ready for PHP5, you need PEAR::Mail2 and all dependencies.
//
$PHPSendMail = "1";

// Users IPAddress
//
$IPAddress = getenv('REMOTE_ADDR');

// Users Hostname
//
$Hostname = gethostbyaddr($IPAddress);

// Browser
//
$Browser = getenv('HTTP_USER_AGENT');

// Your own Webserver
//
$web = "https://oschlueter.de/bill/test";

// Key to encrypt and decrypt data
// Note: If you change this key, thereafter
// a login is no longer possible.
//
$pkey = "e76a669e075b6e034ec5911553a86abb";

// After User Update please replace $pkey with $pkeyOld
//
$pkeyOld = "e76a669e075b6e034ec5911553a86abb";

// Header to send first
//
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Pragma: no-cache");
header("X-Frame-Options: deny");
header("X-XSS-Protection: 1; mode=block");
header("X-Content-Type-Options: nosniff");

// Important for MSIE on SSL, take a look at http://fpdf.org/
//
header("Pragma: public");

// Set default charset depend on selected language
//
//header('Content-type: text/plain; charset=utf-8');
header("Content-Type: text/html; charset=".$_SESSION['Charset']);

// Logout user and delete TEMP Entry's
//
function Logout() {
	global $db;

	if(isset($_SESSION['Username'])) {
		DBConnect();
		$stmt = $db->Prepare("DELETE FROM tmp_invoice WHERE username = ?");
		$stmt = $db->Execute($stmt, array($_SESSION['Username']));
		$stmt1 = $db->Prepare("DELETE FROM tmp_offer WHERE username = ?");
		$stmt1 = $db->Execute($stmt1, array($_SESSION['Username']));
		DBClose();
	}
}

// Save last visited page by user
//
function UserSite() {
	global $web;

	if (!empty($_SERVER['QUERY_STRING'])) {
		$_SESSION['LastSite'] = htmlspecialchars($_SERVER['PHP_SELF'].'?'.$_SERVER['QUERY_STRING'], ENT_QUOTES, $_SESSION['Charset']);
		$_SESSION['UserSite'] = htmlspecialchars($_SERVER['PHP_SELF'].'?'.$_SERVER['QUERY_STRING'], ENT_QUOTES, $_SESSION['Charset']);
	} else {
		$_SESSION['LastSite'] = htmlspecialchars($_SERVER['PHP_SELF'], ENT_QUOTES, $_SESSION['Charset']);
		$_SESSION['UserSite'] = htmlspecialchars($_SERVER['PHP_SELF'], ENT_QUOTES, $_SESSION['Charset']);
	}
}

// Check if any user are logged in
//
function CheckUser() {
	global $web, $sessname, $sessid;

	if(!isset($_SESSION['Username'])) {
		exit(header("Location: $web/login/login.php?$sessname=$sessid"));
	}
	CheckLicense();
}

// Check if user has accepted the license
//
function CheckLicense() {
	global $web, $sessname, $sessid;

	if(isset($_SESSION['LicenseAccepted']) && $_SESSION['LicenseAccepted'] != '1') {
		exit(header("Location: $web/license.php?$sessname=$sessid"));
	}
}

// Are you administrator
//
function CheckAdmin() {
	global $web, $root, $sessname, $sessid;

	if(isset($_SESSION['Username']) && $_SESSION['Username'] != $root) {
		if (!empty($_SERVER['QUERY_STRING'])) {
			$_SESSION['LastSite'] = htmlspecialchars($_SERVER['PHP_SELF'].'?'.$_SERVER['QUERY_STRING'], ENT_QUOTES, $_SESSION['Charset']);
		} else {
			$_SESSION['LastSite'] = htmlspecialchars($_SERVER['PHP_SELF'], ENT_QUOTES, $_SESSION['Charset']);
		}
		$_SESSION['logoutid'] = "5";
		exit(header("Location: $web/login/sustart.php?$sessname=$sessid"));
	}
}

// Are you in the administrator group1 ( Root )
//
function CheckAdminGroup1() {
	global $web, $admingroup_1, $sessname, $sessid;

	if(isset($_SESSION['Usergroup1']) && $_SESSION['Usergroup1'] != $admingroup_1) {
		CheckAdminGroup2();
	}
}

// Are you in the administrator group2 ( Manager )
//
function CheckAdminGroup2() {
	global $web, $admingroup_2, $sessname, $sessid;

	if(isset($_SESSION['Usergroup2']) && $_SESSION['Usergroup2'] != $admingroup_2) {
		if (!empty($_SERVER['QUERY_STRING'])) {
			$_SESSION['LastSite'] = htmlspecialchars($_SERVER['PHP_SELF'].'?'.$_SERVER['QUERY_STRING'], ENT_QUOTES, $_SESSION['Charset']);
		} else {
			$_SESSION['LastSite'] = htmlspecialchars($_SERVER['PHP_SELF'], ENT_QUOTES, $_SESSION['Charset']);
		}
		$_SESSION['logoutid'] = "5";
		exit(header("Location: $web/login/sustart.php?$sessname=$sessid"));
	}
}

// Are you in the administrator group3 ( Bookkeeping )
// In order to access cashbook/reports as non admin user
// The Usergroup2 must be Bookkeeping
// Example: Usergroup1: User, Usergroup2: Bookkeeping
//
function CheckAdminGroup3() {
	global $web, $admingroup_3, $sessname, $sessid;

	if(isset($_SESSION['Usergroup2']) && $_SESSION['Usergroup2'] != $admingroup_3) {
		CheckAdminGroup2();
	}
}

// Change German date output to MySQL (ISO-Date).
//
function German_Mysql_Date($date) {
	@list($day, $month, $year) = explode('.', $date);
	return sprintf('%04d-%02d-%02d', $year, $month, $day);
}

// Change Date output for printing in YearMonthDay
//
function Print_Date($date) {
	@list($day, $month, $year) = explode('.', $date);
	return sprintf('%04d%02d%02d', $year, $month, $day);
}

// Change the output of number_format printing ( default: 1.000,00 )
//
function Format_Number($number) {
	$decimals = "2";
	$dec_point = ",";
	$thousands_sep = ".";

 	return number_format($number,$decimals,$dec_point,$thousands_sep);
// 
// 	If your system doesn't support money_format then please change to number_format
// 
//	return money_format('%!i',$number);
}

// Formats the number in a valid database format
//
function FormatDBNumber($number) {
	// Negative numbers are also allowed
	//
	$number = trim($number);

	if(preg_match("~^([\-0-9]+|(?:(?:[\-0-9]{1,3}([.,' ]))+[\-0-9]{3})+)(([.,])[\-0-9]{1,21})?$~", $number, $r)) {
		if(!empty($r['2'])) {
			$pre = preg_replace("~[".$r['2']."]~", "", $r['1']);
		} else {
			$pre = $r['1'];
		}

		if(!empty($r['4'])) {
			$post = ".".preg_replace("~[".$r['4']."]~", "", $r['3']);
		} else {
			$post = false;
		}

		$number = $pre.$post;
		return number_format($number, 2, '.', '');
	}
	return false;
}

function FormatDBNumberP($number) {
	// Negative numbers are not allowed here
	//
	$number = preg_replace("/[^0-9\.]/", "", str_replace(',', '.', $number));

	return number_format($number, 2, '.', '');
}

// Limit current session to default time in seconds
// ( $SessionSec ), can be changed under
// Configuration / Settings min. 120 seconds
//
function CheckSession() {
	global $web, $db, $SessionSec, $sessname, $sessid;

	$access = '1';

	if (isset($_SESSION['LastAccess'])) {
		$timeout = time() - $_SESSION['LastAccess'];
		if ($timeout < $SessionSec) {
			$_SESSION['LastAccess'] = time();
			$access = '0';
		}
	}
	if ($access == '1') {
		exit(header("Location: $web/login/sessionend.php?$sessname=$sessid"));
	}
	return;
}

// Check array value and escape hmtl special chars if found
//
function CheckArrayValue($arr) {
	global $web, $sessname, $sessid;

	foreach ($arr as $key => $val)

		if (is_array($val)) {
			CheckArrayValue($arr[$key]);
		} else {
			$arr[$key] = htmlspecialchars($val, ENT_QUOTES, $_SESSION['Charset']);

			$val = strtolower($val);
			//echo $key .'='.$val .' ';
			if (strpos($val, "base64_") !== false || strpos($val, "create") !== false || strpos($val, "delete") !== false || strpos($val, "drop") !== false || strpos($val, "execute") !== false || strpos($val, "fetch") !== false || strpos($val, "insert") !== false || strpos($val, "select") !== false || strpos($val, "truncate") !== false || strpos($val, "update") !== false)
				exit(header("Location: $web/index.php?$sessname=$sessid"));
		}

	return $arr;
}

// Quotes a string to be sent to the database
//
function QuoteString($string) {
	global $db;
	return $db->qstr($string,get_magic_quotes_gpc());
}

?>
